<?php 
include_once"koneksi.php";
?>


  <br>
  <form class="form-horizontal" method="post" action="proses/login_proses.php" role="form" >

  <div class="login-wrap">
    <h2>Login</h2>
    
          <link href="css/login.css" rel="stylesheet" type="text/css"/>
    <div class="form">
      <input type="number" placeholder="NIK" name="nik" id="nik" required="" />
      <input type="password" placeholder="Password" name="password" id="password" required="" />
      <button type="submit" > Masuk </button></a>
      <a href="register.php"> <p> Belum memiliki akun? Daftar </p></a>
    </div>
  </div>