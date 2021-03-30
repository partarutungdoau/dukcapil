<?php 
session_start();
  // skrip koneksi
$koneksi = new mysqli("localhost", "root", "", "andaliman_toba");

     if(isset($_POST['login']))
     {
      $ambil = $koneksi->query("SELECT * FROM operator WHERE username='$_POST[username]' AND password = '$_POST[password]'");
      $yangcocok = $ambil->num_rows;
      if($yangcocok==1)
      {
        $_SESSION['operator']=$ambil->fetch_assoc();
        echo "<div class='alert alert-info'>Login Berhasil</div>";
        echo "<meta http-equiv='refresh' content='1;url=../index.php'>";
      } 
      else{
        echo "<div class='alert alert-danger'>Login Gagal</div>";
        echo "<meta http-equiv='refresh' content='1;url=../login.php'>";
      }
    }
?>