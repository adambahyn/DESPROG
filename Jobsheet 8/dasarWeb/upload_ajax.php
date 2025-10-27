<?php

// Memeriksa apakah file telah diunggah melalui formulir
if (isset($_FILES['file'])) {
    
    // Inisialisasi array untuk menampung pesan kesalahan
    $errors = array();

    // Mengambil detail file
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileTmp  = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];

    // Mendapatkan ekstensi file dan mengubahnya menjadi huruf kecil
    // Note: Menggunakan 'pathinfo' lebih disarankan daripada 'explode' untuk keamanan
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Daftar ekstensi file yang diizinkan
    $extensions = array("jpg", "jpeg", "png");

    // Batas ukuran file dalam byte (2 MB)
    $maxFileSize = 2097152; // 2 * 1024 * 1024

    // --- VALIDASI EKSTENSI FILE ---
    if (!in_array($fileExt, $extensions)) {
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    }

    // --- VALIDASI UKURAN FILE ---
    if ($fileSize > $maxFileSize) {
        $errors[] = "Ukuran file tidak boleh lebih dari 2 MB";
    }

    // --- PROSES UNGGAH ---
    // Jika tidak ada kesalahan (array $errors kosong)
    if (empty($errors)) {
        
        // Lokasi penyimpanan file permanen
        $targetPath = "documents/" . $fileName;

        // Memindahkan file dari direktori sementara ke lokasi target
        if (move_uploaded_file($fileTmp, $targetPath)) {
            echo "File berhasil diunggah.";
        } else {
            // Kesalahan jika pemindahan file gagal (misal: izin direktori)
            $errors[] = "Gagal memindahkan file. Periksa izin direktori 'documents/'.";
            echo implode(", ", $errors);
        }

    } else {
        // Menampilkan semua kesalahan yang terjadi
        echo implode(", ", $errors);
    }
}
// Optional: Menambahkan penanganan jika $_FILES['file'] tidak diset
// else {
//     echo "Pastikan Anda memilih file untuk diunggah.";
// }
?>