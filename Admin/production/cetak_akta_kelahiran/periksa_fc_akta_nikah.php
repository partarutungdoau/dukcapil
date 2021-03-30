<?php
	session_start();
	if(isset($_SESSION['operator'])){
		include "../connect.php";


	$id_kelahiran = $_GET["id"];
	$get = $connect->query("SELECT * FROM kelahiran WHERE id_kelahiran = '$id_kelahiran' ");
	$detail_akta = $get->fetch_assoc();

	// echo "<pre>";
	// print_r($detail_akta);
	// echo "<pre>";

?>

<!DOCTYPE html>
<html>
<head>
 <title>Foto Copy Akta Nikah</title>
 <style type="text/css">
 body {
  font-family: verdana;
  font-size: 12px;
 }
 a {
  text-decoration: none;
  color: #3050F3;
 }
 a:hover {
  color: #000F5E;
 } 
</style>
</head>
<body>
<hr>
<b>Judul:</b> <?php echo $detail_akta['fc_surat_nikah'];?> | <a href='../index.php?halaman=akta_kelahiran'> Kembali </a>
<hr>
 <embed src="../../../files/<?php echo $detail_akta['fc_surat_nikah'];?>">
</body>
</html>
<?php
}else{
	header('location:login.php');
}
