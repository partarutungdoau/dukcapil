 <?php
require 'koneksi.php';
session_start();

$UploadDir = 'files/';

  if(isset($_POST['selanjutnya'])){
    $koneksi = mysqli_connect('localhost', 'root', '', 'dukcapil');



  $id_penduduk = $_GET['id_penduduk'];
	$nik_jenazah = trim(mysqli_real_escape_string($koneksi, $_POST['nik_jenazah']));
	$nama_jenazah = trim(mysqli_real_escape_string($koneksi, $_POST['nama_jenazah']));
	$jenis_kelamin = trim(mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']));
	$tanggal_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']));
 	$bulan_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['bulan_lahir']));
  	$tahun_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tahun_lahir']));
	$umur = trim(mysqli_real_escape_string($koneksi, $_POST['umur']));
	$tpt_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tpt_lahir']));
	$tanggal_kematian = trim(mysqli_real_escape_string($koneksi, $_POST['tanggal_kematian']));
  	$bulan_kematian = trim(mysqli_real_escape_string($koneksi, $_POST['bulan_kematian']));
 	$tahun_kematian = trim(mysqli_real_escape_string($koneksi, $_POST['tahun_kematian']));
	$waktu_kematian = trim(mysqli_real_escape_string($koneksi, $_POST['waktu_kematian']));
	$agama = trim(mysqli_real_escape_string($koneksi, $_POST['agama']));
	$pekerjaan = trim(mysqli_real_escape_string($koneksi, $_POST['pekerjaan']));
	$sebab_kematian = trim(mysqli_real_escape_string($koneksi, $_POST['sebab_kematian']));
	$tpt_kematian = trim(mysqli_real_escape_string($koneksi, $_POST['tempat_kematian']));
	$anak_ke = trim(mysqli_real_escape_string($koneksi, $_POST['anak_ke']));
	$alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
	$kewarganegaraan = trim(mysqli_real_escape_string($koneksi, $_POST['kewarganegaraan']));


	  $nik_ayah = trim(mysqli_real_escape_string($koneksi, $_POST['nik_ayah']));
  $nama_ayah = trim(mysqli_real_escape_string($koneksi, $_POST['nama_ayah']));
  $nik_ibu = trim(mysqli_real_escape_string($koneksi, $_POST['nik_ibu']));
  $nama_ibu = trim(mysqli_real_escape_string($koneksi, $_POST['nama_ibu']));

  $nik_saksi1 = trim(mysqli_real_escape_string($koneksi, $_POST['nik_saksi1']));
  $nama_saksi1 = trim(mysqli_real_escape_string($koneksi, $_POST['nama_saksi1']));
  $nik_saksi2 = trim(mysqli_real_escape_string($koneksi, $_POST['nik_saksi2']));
  $nama_saksi2 = trim(mysqli_real_escape_string($koneksi, $_POST['nama_saksi2']));

  $nama = $_FILES['surat_pengantar']['name'];
  $nama2 = $_FILES['sk_dari_dokter']['name'];
  $nama3 = $_FILES['fc_ktp']['name'];
  $nama4 = $_FILES['fc_kk']['name'];
  $nama5 = $_FILES['fc_ijazah_SK']['name'];

  $lokasi = $_FILES['surat_pengantar']['tmp_name'];
  $lokasi2 = $_FILES['sk_dari_dokter']['tmp_name'];
  $lokasi3 = $_FILES['fc_ktp']['tmp_name'];
  $lokasi4 = $_FILES['fc_kk']['tmp_name'];
  $lokasi5 = $_FILES['fc_ijazah_SK']['tmp_name'];
  move_uploaded_file($lokasi, "files/".$nama);
  move_uploaded_file($lokasi2, "files/".$nama2);
  move_uploaded_file($lokasi3, "files/".$nama3);
  move_uploaded_file($lokasi4, "files/".$nama4);
  move_uploaded_file($lokasi5, "files/".$nama5);

$queryInsert = mysqli_query($koneksi, "INSERT INTO kematian(id_penduduk, NIK, nama_lengkap, id_jenis_kelamin, tanggal_lahir, bulan_lahir, tahun_lahir, umur, tpt_lahir, idagama, idpekerjaan, alamat, id_kewarganegaraan, anak_ke, tanggal_kematian, bulan_kematian, tahun_kematian, pukul, idsebab_kematian, tpt_kematian, nik_ayah, nama_ayah, nik_ibu, nama_ibu, nik_saksi1, nama_saksi1, nik_saksi2, nama_saksi2, surat_pengantar, sk_dari_dokter, fc_ktp,fc_kk, fc_ijazah_SK, id_status_request) VALUES ($id_penduduk, '$nik_jenazah', '$nama_jenazah','$jenis_kelamin','$tanggal_lahir','$bulan_lahir','$tahun_lahir','$umur','$tpt_lahir','$agama','$pekerjaan','$alamat','$kewarganegaraan','$anak_ke','$tanggal_kematian','$bulan_kematian','$tahun_kematian','$waktu_kematian','$sebab_kematian','$tpt_kematian','$nik_ayah','$nama_ayah','$nik_ibu','$nama_ibu','$nik_saksi1','$nama_saksi1','$nik_saksi2','$nama_saksi2','$nama','$nama2','$nama3','$nama4','$nama5',1)");
	




	if($queryInsert){
      echo '
           <script>
             alert("Data Ditambahkan");
             window.location = "index.php"
           </script>
         ';

    }else{
      echo var_dump($koneksi);
    }
    mysqli_close($koneksi);
  }

?>