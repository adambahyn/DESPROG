<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    echo "Nama: " . $nama;
    echo "<br>";
    echo "Email: " . $email;
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Form Input PHP</h2>
    <form action="form.php" method="post">
        <label for="nama">nama:</label>
        <input type="text" name="nama" id="nama"><br><br>
        <label for="email">email:</label>
        <input type="text" name="email" id="email"><br><br>
        <input type="submit">
    </form>
</body>

</html>