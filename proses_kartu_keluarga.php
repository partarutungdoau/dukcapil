	<?php
require 'koneksi.php';
session_start();

 if(isset($_POST['selanjutnya'])){
    $koneksi = mysqli_connect('localhost', 'root', '', 'dukcapil');

   $id_penduduk = $_GET['id_penduduk']; 
  $nama_lengkap = trim(mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']));
  $pekerjaan = trim(mysqli_real_escape_string($koneksi, $_POST['pekerjaan']));
  $jenis_kelamin = trim(mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']));
  $agama = trim(mysqli_real_escape_string($koneksi, $_POST['agama']));
  $tgl_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']));
  $tpt_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tpt_lahir']));
  $kewarganegaraan = trim(mysqli_real_escape_string($koneksi, $_POST['kewarganegaraan']));
  $no_akta_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['no_akta_lahir']));
  $gol_darah = trim(mysqli_real_escape_string($koneksi, $_POST['gol_darah']));
  $status_perkawinan = trim(mysqli_real_escape_string($koneksi, $_POST['status_perkawinan']));
  $tgl_perkawinan = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_perkawinan']));
  $nomor_akta_perkawinan = trim(mysqli_real_escape_string($koneksi, $_POST['nomor_akta_perkawinan']));
  $status_hubungan_keluarga = trim(mysqli_real_escape_string($koneksi, $_POST['status_hubungan_keluarga']));
  $pendidikan_terakhir = trim(mysqli_real_escape_string($koneksi, $_POST['pendidikan_terakhir']));
  $no_telepon = trim(mysqli_real_escape_string($koneksi, $_POST['no_telepon']));
  $jlh_anggota_keluarga = trim(mysqli_real_escape_string($koneksi, $_POST['jlh_anggota_keluarga']));
  $alamat_lengkap = trim(mysqli_real_escape_string($koneksi, $_POST['alamat_lengkap']));

 $nama = $_FILES['surat_pengantar']['name'];
  $nama2 = $_FILES['fc_akta_nikah']['name'];
  $nama3 = $_FILES['fc_akta_kelahiran']['name'];
 $lokasi = $_FILES['surat_pengantar']['tmp_name'];
  $lokasi2 = $_FILES['fc_akta_nikah']['tmp_name'];
  $lokasi3 = $_FILES['fc_akta_kelahiran']['tmp_name'];
  move_uploaded_file($lokasi, "files/".$nama);
  move_uploaded_file($lokasi2, "files/".$nama2);
  move_uploaded_file($lokasi3, "files/".$nama3);

$queryInsert = mysqli_query($koneksi,  "INSERT INTO kartu_keluarga(id_penduduk,nama_lengkap,idjenis_kelamin,pekerjaan,
    tempat_lahir,tanggal_lahir,id_kewarganegaraan,no_akta_kelahiran,idagama,id_gol_darah,idsts_perkawinan,tgl_perkawinan,no_akta_perkawinan,status_hubungan_keluarga,pendidikan_terakhir,no_telp,alamat_lengkap,jlh_anggota_keluarga,surat_pengantar,fc_akta_nikah,fc_akta_kelahiran,id_status_request) VALUES ('$id_penduduk','$nama_lengkap','$jenis_kelamin','$pekerjaan','$tpt_lahir','$tgl_lahir','$kewarganegaraan','$no_akta_lahir','$agama','$gol_darah','$status_perkawinan','$tgl_perkawinan','$nomor_akta_perkawinan','$status_hubungan_keluarga','$pendidikan_terakhir','$no_telepon','$alamat_lengkap','$jlh_anggota_keluarga','$nama','$nama2','$nama3',1)");
	




	if($queryInsert){
      echo '
           <script>
             alert("Data Ditambahkan");
            window.location = "index.php";
           </script>
         ';
    }else{
     echo var_dump($koneksi);
    }
    mysqli_close($koneksi);
  }

?>