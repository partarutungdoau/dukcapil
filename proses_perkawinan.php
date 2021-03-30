 <?php
require 'koneksi.php';
session_start();

$UploadDir = 'files/';

  if(isset($_POST['selanjutnya'])){
    $koneksi = mysqli_connect('localhost', 'root', '', 'dukcapil');



  $id_penduduk = $_GET['id_penduduk'];
  $nik_suami = trim(mysqli_real_escape_string($koneksi, $_POST['nik_suami']));
  $nama_suami = trim(mysqli_real_escape_string($koneksi, $_POST['nama_suami']));
  $tpt_lahir_suami = trim(mysqli_real_escape_string($koneksi, $_POST['tpt_lahir_suami']));
  $tgl_lahir_suami = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_lahir_suami']));
   $kewarganegaraan_suami = trim(mysqli_real_escape_string($koneksi, $_POST['kewarganegaraan_suami']));
  $nik_istri = trim(mysqli_real_escape_string($koneksi, $_POST['nik_istri']));
  $nama_istri = trim(mysqli_real_escape_string($koneksi, $_POST['nama_istri']));
  $tpt_lahir_istri = trim(mysqli_real_escape_string($koneksi, $_POST['tpt_lahir_istri']));
  $tgl_lahir_istri = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_lahir_istri']));
  $kewarganegaraan_istri = trim(mysqli_real_escape_string($koneksi, $_POST['kewarganegaraan_istri']));


  $tanggal_pemberkatan = trim(mysqli_real_escape_string($koneksi, $_POST['tanggal_pemberkatan']));
  $bulan_pemberkatan = trim(mysqli_real_escape_string($koneksi, $_POST['bulan_pemberkatan']));
  $tahun_pemberkatan = trim(mysqli_real_escape_string($koneksi, $_POST['tahun_pemberkatan']));
  $nama_peradilan = trim(mysqli_real_escape_string($koneksi, $_POST['nama_peradilan']));
  $no_putusan = trim(mysqli_real_escape_string($koneksi, $_POST['no_putusan']));
  $tgl_putusan = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_putusan']));
  $nama_pemuka_agama = trim(mysqli_real_escape_string($koneksi, $_POST['nama_pemuka_agama']));
  $tanggal_pendaftaran = trim(mysqli_real_escape_string($koneksi, $_POST['tanggal_pendaftaran']));
  $bulan_pendaftaran = trim(mysqli_real_escape_string($koneksi, $_POST['bulan_pendaftaran']));
  $tahun_pendaftaran = trim(mysqli_real_escape_string($koneksi, $_POST['tahun_pendaftaran']));
  $agama = trim(mysqli_real_escape_string($koneksi, $_POST['agama']));

  $nik_saksi1 = trim(mysqli_real_escape_string($koneksi, $_POST['nik_saksi1']));
  $nama_saksi1 = trim(mysqli_real_escape_string($koneksi, $_POST['nama_saksi1']));
  $nik_saksi2 = trim(mysqli_real_escape_string($koneksi, $_POST['nik_saksi2']));
  $nama_saksi2 = trim(mysqli_real_escape_string($koneksi, $_POST['nama_saksi2']));

  
 $nama = $_FILES['surat_pengantar']['name'];
  $nama2 = $_FILES['fc_surat_bukti_pemberkatan_perkawinan']['name'];
  $nama3 = $_FILES['fc_kk']['name'];
  $nama4 = $_FILES['fc_ktp_yg_bersangkutan']['name'];
  $nama5 = $_FILES['fptp_yg_bersangkutan']['name'];
  $nama6 = $_FILES['fc_akta_kelahiran_yang_bersangkutan']['name'];

  $lokasi = $_FILES['surat_pengantar']['tmp_name'];
  $lokasi2 = $_FILES['fc_surat_bukti_pemberkatan_perkawinan']['tmp_name'];
  $lokasi3 = $_FILES['fc_kk']['tmp_name'];
  $lokasi4 = $_FILES['fc_ktp_yg_bersangkutan']['tmp_name'];
  $lokasi5 = $_FILES['fptp_yg_bersangkutan']['tmp_name'];
  $lokasi6 = $_FILES['fc_akta_kelahiran_yang_bersangkutan']['tmp_name'];

  move_uploaded_file($lokasi, "files/".$nama);
  move_uploaded_file($lokasi2, "files/".$nama2);
  move_uploaded_file($lokasi3, "files/".$nama3);
  move_uploaded_file($lokasi4, "files/".$nama4);
  move_uploaded_file($lokasi5, "files/".$nama5);
  move_uploaded_file($lokasi6, "files/".$nama6);



$queryInsert = mysqli_query($koneksi, "INSERT INTO perkawinan(id_penduduk,nik_suami,nama_suami,tpt_lahir_suami,tgl_lahir_suami,id_kewarganegaraan_suami,nik_istri,nama_istri,tpt_lahir_istri,tgl_lahir_istri,id_kewarganegaraan_istri,tanggal_pendaftaran,bulan_pendaftaran,tahun_pendaftaran,tanggal_pemberkatan,bulan_pemberkatan,tahun_pemberkatan,nama_badan_peradilan,no_putusan_pengadilan,tgl_putusan_pengadilan,idagama,nama_pemuka_agama,nik_saksi1,nama_saksi1,nik_saksi2,nama_saksi2,surat_pengantar,fc_surat_bukti_pemberkatan_perkawinan,fc_kk,fc_ktp_yg_bersangkutan,fptp_yg_bersangkutan,fc_akta_kelahiran_yang_bersangkutan,id_status_request) VALUES ($id_penduduk,'$nik_suami','$nama_suami','$tpt_lahir_suami','$tgl_lahir_suami','$kewarganegaraan_suami','$nik_istri','$nama_istri','$tpt_lahir_istri','$tgl_lahir_istri','$kewarganegaraan_istri','$tanggal_pendaftaran','$bulan_pendaftaran','$tahun_pendaftaran','$tanggal_pemberkatan','$bulan_pemberkatan','$tahun_pemberkatan','$nama_peradilan','$no_putusan','$tgl_putusan','$agama','$nama_pemuka_agama','$nik_saksi1','$nama_saksi1','$nik_saksi2','$nama_saksi2','$nama','$nama2','$nama3','$nama4','$nama5','$nama6',1)");

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