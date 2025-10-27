<html>

<head>
    <title>Form Upload</title>
    <style>
        /* CSS sederhana agar thumbnail tidak terlalu besar saat pertama dimuat */
        #thumbnail {
            max-width: 200px; /* Lebar maksimum untuk memastikan elemen ada */
            height: auto;
            display: none; /* Sembunyikan secara default */
            border: 1px solid #ccc;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile" id="fileInput" ">
        <input type="submit" name="submit" id="">
    </form>

    <h2>Thumbnail Preview:</h2>
    <img id="thumbnail" src="#" alt="Thumbnail Gambar" width="200">

    <script>
        // Mendapatkan elemen input file dan img thumbnail
        const fileInput = document.getElementById('fileInput');
        const thumbnail = document.getElementById('thumbnail');

        // Menambahkan event listener saat file dipilih
        fileInput.addEventListener('change', function(event) {
            const file = event.target.files[0]; // Ambil file pertama yang dipilih

            // Pastikan file telah dipilih dan tipenya adalah gambar
            if (file && file.type.startsWith('image/')) {
                // Buat FileReader untuk membaca konten file
                const reader = new FileReader();

                // Fungsi yang akan dijalankan setelah file berhasil dibaca
                reader.onload = function(e) {
                    // Set src dari elemen img dengan data URL dari file
                    thumbnail.src = e.target.result;
                    // Atur lebar tetap 200px
                    thumbnail.width = 200;
                    // Tinggi otomatis
                    thumbnail.height = 'auto'; 
                    // Tampilkan elemen img
                    thumbnail.style.display = 'block';
                };

                // Baca file sebagai Data URL (base64)
                reader.readAsDataURL(file);
            } else {
                // Sembunyikan atau reset thumbnail jika file tidak valid atau dihapus
                thumbnail.src = '#';
                thumbnail.style.display = 'none';
            }
        });
    </script>
</body>

</html>