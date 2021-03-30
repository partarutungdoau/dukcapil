<?php 
  session_start();
  $conn = mysqli_connect('localhost', 'root', '', 'dukcapil');
  
  $nik = $_POST['nik'];
  $password = $_POST['password'];
  
  $query = mysqli_query($conn, " SELECT id_penduduk FROM penduduk WHERE nik='$nik' ");
  $count = mysqli_num_rows($query);
  if($count > 0)
  {
    $queryId = mysqli_query($conn, "SELECT id_penduduk FROM penduduk WHERE nik='$nik' AND password = '$password' ");
    $numRow = mysqli_num_rows($queryId);
    if($numRow == 0)
    {
      echo '
        <script>
          alert("Password Salah.");
          window.location = "../login.php"
        </script>
      ';
    }else 
    {
      $arrayId = mysqli_fetch_array($queryId);
      
      $_SESSION['id_penduduk'] = $arrayId['id_penduduk'];
      
      if(isset($_SESSION['id_penduduk']))
      {
        echo '
        <script>
          alert("Login Sukses, Nikmati Pelayanan Kami");
          window.location = "../index.php"
        </script>
        ';
      }
    }
  } else {
    echo '
      <script>
        alert("NIK tidak terdaftar.");
        window.location = "../login.php"
      </script>
    ';
  }