<?php 
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "1234") {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
echo "Anda berhasil login!. silahkan klik <a href='homeSession.php'>di sini</a> ";}

else {
    echo "Username atau password salah. silahkan klik <a href='sessionLoginForm.html'>di sini</a> ";
}
?>