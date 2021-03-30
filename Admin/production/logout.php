<?php
session_start();
unset($_SESSION['operator']);
echo "<script>alert('Anda Berhasil Logout');</script>";
echo "<script>location='login.php';</script>";
session_destroy();
?>