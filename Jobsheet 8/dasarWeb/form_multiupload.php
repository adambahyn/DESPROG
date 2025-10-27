<?php
// Lokasi penyimpanan file yang diunggah
// Target directory for uploaded files
$targetDirectory = "documents/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
// Check if the target directory exists, if not, create it
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Check if any file was uploaded
if (isset($_FILES['files']['name']) && is_array($_FILES['files']['name']) && count($_FILES['files']['name']) > 0 && !empty($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    // Loop through all uploaded files
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        // Pindahkan file yang diunggah ke direktori penyimpanan
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file $fileName.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
<html>
    <title></title>
    <body>
        <h2>Unggah Dokumen</h2>
        <form action="form_multiupload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple="multiple" accept=".jpg, .jpeg, .png" id="">
            <input type="submit" name="" id="" value="Unggah"> 
        </form>
    </body>
</html>