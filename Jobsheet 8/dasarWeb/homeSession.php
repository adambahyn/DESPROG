<?php 
// WAJIB: Memulai atau melanjutkan session yang sudah ada
session_start();

// Bagian ini sekarang akan bisa membaca $_SESSION['status']
if(isset($_SESSION['status']) && $_SESSION['status'] == "login") {
    // Session ditemukan dan statusnya 'login'
    echo "Selamat datang ".$_SESSION['username'];
?>

<br>
<a href="sessionLogout.php">Logout</a>

<?php 
} else {
    // Session tidak ditemukan atau statusnya bukan 'login'
    echo "Anda belum login. silahkan klik <a href='sessionLoginForm.html'>di sini</a> ";
}
?>