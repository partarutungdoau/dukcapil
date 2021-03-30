 <?php
require 'koneksi.php';
session_start();

$UploadDir = 'files/';

  if(isset($_POST['selanjutnya'])){
    $koneksi = mysqli_connect('localhost', 'root', '', 'dukcapil');



  $id_penduduk = $_GET['id_penduduk'];
  $nik_suami = trim(mysqli_real_escape_string($koneksi, $_POST['nik_suami']));
  $nama_lengkap_suami = trim(mysqli_real_escape_string($koneksi, $_POST['nama_lengkap_suami']));
  $tpt_lahir_suami = trim(mysqli_real_escape_string($koneksi, $_POST['tpt_lahir_suami']));
  $tgl_lahir_suami = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_lahir_suami']));
  $kewarganegaraan_suami = trim(mysqli_real_escape_string($koneksi, $_POST['kewarganegaraan_suami']));

  $nik_istri = trim(mysqli_real_escape_string($koneksi, $_POST['nik_istri']));
  $nama_lengkap_istri = trim(mysqli_real_escape_string($koneksi, $_POST['nama_lengkap_istri']));
  $tpt_lahir_istri = trim(mysqli_real_escape_string($koneksi, $_POST['tpt_lahir_istri']));
  $tgl_lahir_istri = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_lahir_istri'])); 
  $kewarganegaraan_istri = trim(mysqli_real_escape_string($koneksi, $_POST['kewarganegaraan_istri']));


  $yg_mengajukan_perceraian = trim(mysqli_real_escape_string($koneksi, $_POST['yg_mengajukan_perceraian']));
  $no_akta_perkawinan = trim(mysqli_real_escape_string($koneksi, $_POST['no_akta_perkawinan']));
  $tanggal_perkawinan = trim(mysqli_real_escape_string($koneksi, $_POST['tanggal_perkawinan']));
  $bulan_perkawinan = trim(mysqli_real_escape_string($koneksi, $_POST['bulan_perkawinan']));
  $tahun_perkawinan = trim(mysqli_real_escape_string($koneksi, $_POST['tahun_perkawinan']));
  $no_putusan_pengadilan = trim(mysqli_real_escape_string($koneksi, $_POST['no_putusan_pengadilan']));
  $tanggal_putusan_pengadilan = trim(mysqli_real_escape_string($koneksi, $_POST['tanggal_putusan_pengadilan']));
  $bulan_putusan_pengadilan = trim(mysqli_real_escape_string($koneksi, $_POST['bulan_putusan_pengadilan']));
  $tahun_putusan_pengadilan = trim(mysqli_real_escape_string($koneksi, $_POST['tahun_putusan_pengadilan']));
  $tingkat_peradilan = trim(mysqli_real_escape_string($koneksi, $_POST['tingkat_peradilan']));
  $tpt_lembaga_peradilan = trim(mysqli_real_escape_string($koneksi, $_POST['tpt_lembaga_peradilan']));
  $nama_lembaga_peradilan = trim(mysqli_real_escape_string($koneksi, $_POST['nama_lembaga_peradilan']));

  $sebab_perceraian = trim(mysqli_real_escape_string($koneksi, $_POST['sebab_perceraian']));
 
  $nik_saksi1 = trim(mysqli_real_escape_string($koneksi, $_POST['nik_saksi1']));
  $nama_saksi1 = trim(mysqli_real_escape_string($koneksi, $_POST['nama_saksi1']));
  $nik_saksi2 = trim(mysqli_real_escape_string($koneksi, $_POST['nik_saksi2']));
  $nama_saksi2 = trim(mysqli_real_escape_string($koneksi, $_POST['nama_saksi2']));
  
   $nama = $_FILES['surat_pengantar']['name'];
  $nama2 = $_FILES['surat_putusan_pengadilan']['name'];

 $lokasi = $_FILES['surat_pengantar']['tmp_name'];
  $lokasi2 = $_FILES['surat_putusan_pengadilan']['tmp_name'];

  move_uploaded_file($lokasi, "files/".$nama);
  move_uploaded_file($lokasi2, "files/".$nama2);

$queryInsert = mysqli_query($koneksi, "INSERT INTO perceraian(id_penduduk,nik_suami,nama_lengkap_suami,tpt_lahir_suami,tgl_lahir_suami,id_kewarganegaraan_suami,nik_istri,nama_lengkap_istri,tpt_lahir_istri,tgl_lahir_istri,id_kewarganegaraan_istri, yg_mengajukan_perceraian,no_akta_perkawinan,tanggal_perkawinan,bulan_perkawinan,tahun_perkawinan,no_putusan_pengadilan,tanggal_putusan_pengadilan,bulan_putusan_pengadilan,tahun_putusan_pengadilan,id_tingkat_peradilan,tpt_lembaga_peradilan,nama_lembaga_peradilan,sebab_cerai,nik_saksi1,nama_saksi1,nik_saksi2,nama_saksi2,surat_pengantar,surat_putusan_pengadilan,id_status_request) VALUES ('$id_penduduk','$nik_suami','$nama_lengkap_suami','$tpt_lahir_suami','$tgl_lahir_suami','$kewarganegaraan_suami','$nik_istri','$nama_lengkap_istri','$tpt_lahir_istri','$tgl_lahir_istri','$kewarganegaraan_istri','$yg_mengajukan_perceraian','$no_akta_perkawinan','$tanggal_perkawinan','$bulan_perkawinan','$tahun_perkawinan','$no_putusan_pengadilan','$tanggal_putusan_pengadilan','$bulan_putusan_pengadilan','$tahun_putusan_pengadilan','$tingkat_peradilan','$tpt_lembaga_peradilan','$nama_lembaga_peradilan','$sebab_perceraian','$nik_saksi1','$nama_saksi1','$nik_saksi2','$nama_saksi2','$nama','$nama2',1)");

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