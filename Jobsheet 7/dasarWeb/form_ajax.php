<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP dan JQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <h2>Form Contoh</h2>

    <form id="myForm">

        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>

        <label>Pilih Warna Favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
        <br>

        <label>Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>
        <br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil">
        </div>

    <script>
        $(document).ready(function () {

            // Menangani event submit form dengan ID "myForm"
            $("#myForm").submit(function (e) {
                
                // Mencegah pengiriman formulir secara default (agar tidak memuat ulang halaman)
                e.preventDefault(); 
                
                // Mengumpulkan data form menjadi format URL-encoded string
                var formData = $("#myForm").serialize();

                // Kirim data ke server PHP menggunakan AJAX
                $.ajax({
                    url: "form_ajax.php", // Ganti dengan nama file PHP yang sesuai
                    type: "POST",
                    data: formData,
                    success: function (response) {
                        // Menampilkan hasil dari server di div "hasil"
                        $("#hasil").html(response);
                    }
                });
            });
        });
    </script>

</body>
</html>