<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>

    <h2>Form Input PHP</h2>

    <?php
        // Inisialisasi variabel
        $namaErr = "";
        $nama = "";
        $input = "";
        $email = "";

        // Cek apakah form sudah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Validasi nama (contoh: pastikan nama tidak kosong)
         
                $input = $_POST["input"];
                $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

                echo "Input: " . $input;

                $email = $_POST["email"];
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<br>";
                    echo "Email: " . $email;
                }
                else {
                    echo "<br>";
                    echo "Email tidak valid";
                }
        }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Input:</label>
        <input type="text" name="input" id="input" value="<?php echo $input; ?>">
        <span class="error"><?php echo $namaErr; ?></span><br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email"><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>