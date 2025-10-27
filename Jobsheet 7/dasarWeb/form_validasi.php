<?php    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama = $_POST["nama"] ?? '';
        $email = $_POST["email"] ?? '';
        $password = $_POST["password"] ?? ''; 
    
        $errors = array();

        if (empty($nama)) {
            $errors[] = "PHP Error: Nama harus diisi.";
        }

        if (empty($email)) {
            $errors[] = "PHP Error: Email harus diisi.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "PHP Error: Format email tidak valid.";
        }

        if (empty($password)) {
            $errors[] = "PHP Error: Password harus diisi.";
        } elseif (strlen($password) < 8) { // Pengecekan panjang string PHP
            $errors[] = "PHP Error: Password minimal 8 karakter.";
        }

        if (!empty($errors)) {
            http_response_code(400);
            echo "<p style='color:red;'>Validasi server gagal:</p>";
            foreach ($errors as $error) {
                echo "- " . $error . "<br>";
            }
        } else {
            $safe_nama = htmlspecialchars($nama);
            $safe_email = htmlspecialchars($email);
    
            echo "<p style='color:green;'>✅ Data berhasil divalidasi dan diproses oleh Server!</p>";
            echo "Data diterima: Nama = **$safe_nama**, Email = **$safe_email**";
            echo "<br>Status Password: **Valid dan siap di-hash.**";
        }
    } else {
        echo "Metode permintaan tidak valid.";
    }
    ?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi dan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error {
            color: red;
        }
    </style>
 
</head>

<body>

    <h1>Form Input dengan Validasi dan AJAX</h1>

    <form id="myForm" method="post" action="form_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" class="error"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" class="error"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" class="error"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil-server">
    </div>
    <script>
        $(document).ready(function () {

            $("#myForm").submit(function (event) {

                event.preventDefault();

                var nama = $("#nama").val().trim();
                var email = $("#email").val().trim();
                // Ambil nilai password
                var password = $("#password").val();
                var valid = true;

                $("#nama-error").text("");
                $("#email-error").text("");
                $("#password-error").text(""); 

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                }

                if (password === "") {
                    $("#password-error").text("Password harus diisi.");
                    valid = false;
                } else if (password.length < 8) { // Pengecekan panjang karakter
                    $("#password-error").text("Password minimal 8 karakter.");
                    valid = false;
                }

                if (valid) {

                    var formData = $(this).serialize();

                    $.ajax({
                        url: "form_validasi.php",
                        type: "POST",
                        data: formData,
                        success: function (response) {
                            $("#hasil-server").html("<h3>Respons Server:</h3>" + response);
                        },
                        error: function (xhr, status, error) {
                            $("#hasil-server").html("Terjadi kesalahan saat mengirim data.");
                        }
                    });
                }
            });
        });
    </script>

</body>

</html>