<?php 
session_start();
if(isset($_SESSION['operator'])){
	include "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kartu Keluarga</title>
	<link rel="icon" href="./assets/img/logo.jpg">
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
		}
		.garuda{
			padding-left: 30px;
			padding-top: 10px;
		}
		.title{
			padding-left: 320px;
			margin-bottom: 0px;
			padding-top: 25px;
		}
		.no_kk{
			padding-left: 340px;
			margin-top: 0px;
		}
		.nama_kepala{
			padding-left: 60px;
		}
		.alamat{
			padding-left: 60px;
		}
		.rtrw{
			padding-left: 60px;
		}
		.desa{
			padding-left: 60px;
		}
		.kep_kel{
			font-weight: bold;
		}
		.pengeluaran{
			padding-left: 100px
		}
		.lembar{
			padding-left: 100px
		}
		.judul1{
			font-weight: bold;
		}
		.judul2{
			font-weight: bold;
		}
		.tabelakhir{
			font-weight: bold;
		}
	</style>
</head>
<body>

<table border="6" cellspacing="0" width="100%">
	<tr>
	<td>
	<table border="0" width="100%" class="kep_kel">
		<tr>
			<td width="280px" rowspan="2"><img src="images/garuda.png" width="70px" class="garuda"></td>
			<td colspan="6"><h1 class="title">KARTU KELUARGA</h1></td>
		</tr>
		<tr>
			<td colspan="7"><h2 class="no_kk">No.</h2></td>
		</tr>
		<tr>
			<td class="nama_kepala">Nama Kepala Keluarga</td>
			<td width="5px">:</td>
			<td width="350px"></td>
			<td></td>
			<td width="170px">Kecamatan</td>
			<td width="5px">:</td>
			<td></td>
		</tr>
		<tr>
			<td class="alamat">Alamat</td>
			<td>:</td>
			<td></td>
			<td></td>
			<td>Kabupaten/Kota</td>
			<td>:</td>
			<td></td>
		</tr>
		<tr>
			<td class="rtrw">RT/RW</td>
			<td>:</td>
			<td></td>
			<td></td>
			<td>Kode Pos</td>
			<td>:</td>
			<td></td>
		</tr>
		<tr>
			<td class="desa">Desa/Kelurahan</td>
			<td>:</td>
			<td></td>
			<td></td>
			<td>Provinsi</td>
			<td>:</td>
			<td></td>
		</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td>
	<table border="1" width="100%">
		<tr class="judul1">
			<td>No.</td>
			<td>Nama Lengkap</td>
			<td>NIK</td>
			<td>Jenis Kelamin</td>
			<td>Tempat Lahir</td>
			<td>Tanggal Lahir</td>
			<td>Agama</td>
			<td>Pendidikan</td>
			<td>Jenis Pekerjaan</td>
		</tr>
		<tr>
			<td></td>
			<td align="center">(1)</td>
			<td align="center">(2)</td>
			<td align="center">(3)</td>
			<td align="center">(4)</td>
			<td align="center">(5)</td>
			<td align="center">(6)</td>
			<td align="center">(7)</td>
			<td align="center">(8)</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td>
	<table border="1" width="100%">
		<tr class="judul2">
			<td rowspan="2">No.</td>
			<td rowspan="2">Status Perkawinan</td>
			<td rowspan="2">Status Hubungan Dalam Keluarga</td>
			<td rowspan="2">Kewarganegaraan</td>
			<td colspan="2">Dokumen Imigrasi</td>
			<td colspan="2">Nama Orang Tua</td>
		</tr>
		<tr class="judul2">
			<td>No. Paspor</td>
			<td>No.</td>
			<td>Ayah</td>
			<td>Ibu</td>
		</tr>
		<tr>
			<td align="center"></td>
			<td align="center">(9)</td>
			<td align="center">(10)</td>
			<td align="center">(11)</td>
			<td align="center">(12)</td>
			<td align="center">(13)</td>
			<td align="center">(14)</td>
			<td align="center">(15)</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td>
	<table class="tabelakhir" width="100%"align="right">
		<tr>
			<td class="pengeluaran" width="160px">Dikeluarkan Tanggal</td>
			<td>:</td>
			<td width="150px"></td>
			<td width="500px"></td>
			<td></td>
		</tr>
		<tr>
			<td class="lembar">Lembar</td>
			<td>:</td>
			<td>I. Kepala Keluarga</td>
			<td rowspan="2" align="center">Kepala Keluarga</td>
			<td rowspan="2" align="center">KEPALA DINAS KEPENDUDUKAN DAN <br> CATATAN SIPIL KABUPATEN TOBA</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>II. RT</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>III. Desa/Kelurahan</td>
			<td rowspan="3" align="center"></td>
			<td rowspan="3" align="center"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>IV. Kecamatan</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td height="20px"></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td align="center"><u>Kepala Keluarga</u><br>Tanda Tangan/Cap Jempol</td>
			<td align="center"><u>Nama Kepala Dinas</u><br>NIP.</td>
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