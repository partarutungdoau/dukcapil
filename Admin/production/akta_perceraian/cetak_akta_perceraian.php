<?php 
	session_start();
	if(isset($_SESSION['operator'])){
		include "../connect.php";


	$id_aktaKelahiran = $_GET["id"];
	$get = $connect->query("SELECT * FROM akta_kelahiran WHERE id_aktaKelahiran = '$id_aktaKelahiran' ");
	$detail_akta = $get->fetch_assoc();

	// echo "<pre>";
	// print_r($detail_akta);
	// echo "<pre>";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Akta Perceraian</title>
	<link rel="icon" href="../images/andaliman logo.png">
	<style type="text/css">
		body{
			font-family: Arial;
		}

		@media print{
			.no-print{
				display: none;
			}
		}

		table{
			border-collapse: collapse;
			margin: 0 auto;
			font-family: serif;
		
		}
		.table1{
			margin-top: 20px;
			font-size: 18px;
		}
		.garuda{
			padding-top: 50px;
			padding-bottom: 20px;
		}
		.catpil{

			padding-top: 15px;
		}
		.catpil{

			padding-top: 15px;
			padding-bottom: 15px;
		}
		.capil{
			font-weight: bold;
			font-size: 30px;
		}
		.capil2{
			font-weight: bold;
			font-size: 25px;
		}
		.titik{
			height: 20px;
		}
		.head{
			font-weight: bold;
		}
		.national{
			font-weight: bold;
		}
		.dan{
			height: 120px;
			padding-top: 50px;
		}
		.qrcode{
			height: 80px;
		}

	</style>
</head>
<body>

<table border="6" cellspacing="0" width="60%"">
	<tr>
	<td>
		<table class="table1" border="0" width="90%">
			<tr class="head">
				<td width="24%"><u>Nomor Induk Kependudukan</u><br><i>Personnel Registration Number</i></td>
				<td width="8%">:</td>
				<td width="22%"" align="left"><b><?php echo $detail_akta['NIK']; ?></b></td>
				<td width="30%"></td>
				<td width="20%">No.<b><?php echo $detail_akta['id_aktaKelahiran']; ?></b></td>
				<td></td>
			</tr>
			<tr>
				<td align="center" colspan="6"><img class="garuda" src="../images/garuda.png" width="150px"></td>
			</tr>
			<tr>
				<td class="catpil" align="center" colspan="6">
				<u class="capil">PENCATATAN SIPIL</u><br><i class="capil2">REGISTRY OFFICE</i>
				</td>
			</tr>
			<tr class="national">
				<td class="catpil" colspan="3" width="55%" align="right"><u>WARGA NEGARA</u><br><i>NATIONALITY</i></td>
				<td colspan="3" width="42%" align="left">&nbsp&nbsp&nbspINDONESIA <br><i>&nbsp&nbsp&nbspOf INDONESIA</i><br></td>
			</tr>
			<tr>
				<td class="catpi2" align="center" colspan="6">
				<u class="capil">KUTIPAN AKTA KELAHIRAN</u><br><i class="capil2">EXCERPT OF BIRTH CERTIFICATE</i>
				</td>
			</tr>
			<tr>
			<td colspan="3" width="50%">
				<u>Berdasarkan Akta Kelahiran Nomor</u><br><i>By virtue of Birth Certificate Number
			</td>
			<td colspan="3" ><b><?php echo $detail_akta['id_aktaKelahiran']; ?></b></td>
			</tr>
			<tr>
				<td colspan="3"><u>menurut stbld</u><br>in accordance with state gazette</td>
				<td colspan="3">----</td>
			</tr>
			<tr>
				<td><u>Bahwa di</u><br>that in</td>
				<td colspan="2"> <b><?php echo $detail_akta['Tempat_Lahir']; ?></b> </td>
				<td>Pada Tanggal</td>
				<td colspan ="2"><b><?php echo $detail_akta['Tanggal']; ?></b></td>
			</tr>
			<tr>
				<td><b><?php echo $detail_akta['Bulan']; ?></b>
				<td class="tahun">Tahun<br><i>on Year</i></td>
				<td colspan="2">&nbsp&nbsp&nbsp&nbsp&nbsp<b><?php echo $detail_akta['Tahun']; ?></b>
				<td colspan="2"><u>Telah Lahir</u><br><i>was born</i></td>
			</tr>
			<tr>
				<td colspan="6" align="center"><b><h3><?php echo $detail_akta['Nama_Lengkap']; ?></h3></b></td>
			</tr>
			<tr>
				<td colspan="6"><u>anak ke</u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b><?php echo $detail_akta['anak_ke']; ?>, <?php echo $detail_akta['jenis_kelamin']; ?> dari Ayah <?php echo $detail_akta['Nama_Ayah']; ?> dan Ibu <?php echo $detail_akta['Nama_Ibu']; ?></b></u><br><i>Child no</i>&nbsp&nbsp&nbsp&nbsp&nbsp<i>Sixth,male from father <?php echo $detail_akta['Nama_Ayah']; ?> and mother <?php echo $detail_akta['Nama_Ibu']; ?></i></td>
			</tr>
			<tr>
				<td colspan="6" align="center"><p class="dan">----dan----<br><i>----and----</i></p></td>
			</tr>
			<tr>
				<td colspan="3"></td>
				<td><u>Kutipan ini dikeluarkan</u><br><i>The excerpt is issued</i></td>
				<td colspan="2">di Balige<br><i>in Balige</i></td>
			</tr>
			<tr>
				<td colspan="3"></td>
				<td><u>Pada Tanggal</u><br><i>On date</i></td>
				<td colspan="2"><?php echo tglIndonesia(date('Y-m-d')); ?><br><i></i></td>
			</tr>
			<tr>
				<td colspan="3"></td>
				<td colspan="3" align="center">.............<br><i>............</i></td>
			</tr>
			<tr>
				<td colspan="3"></td>
				<td colspan="3"><u>Kepala &nbsp&nbsp&nbsp&nbsp&nbsp <b>Dinas Kependudukan dan Pencatatan Sipil</b><br><i>Head Of &nbsp&nbsp&nbsp Demography and Civil Registration Service</i></td>
			</tr>
			<tr>
				<td colspan="3"></td>
				<td colspan="3" align="center">Kota Balige<br><i>City Of Balige</i></td>
			</tr>
			<tr>
				<td colspan="3"></td>
				<td class="qrcode" colspan="3" align="center"></td>
			</tr>
			<tr>
				<td colspan="3"></td>
				<td colspan="3" align="center">Drs. Bonar M Butar-butar</td>
			</tr>
		</table>
	</td>
	</tr>
</table>


<br>

<center><a href="#" class="no-print" onclick="window.print();">Cetak/Print</a></center>

</body>
</html>

<?php
}else{
	header('location:login.php');
}
?>