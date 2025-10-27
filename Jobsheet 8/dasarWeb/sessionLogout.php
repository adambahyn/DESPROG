<?php 
session_start();
session_unset();
session_destroy();
echo "Anda berhasil logout!. silahkan klik <a href='sessionLoginForm.html'>di sini</a> ";
?>