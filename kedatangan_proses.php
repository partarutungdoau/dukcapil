 <?php
require 'koneksi.php';
session_start();

$UploadDir = 'files/';

  if(isset($_POST['selanjutnya'])){
    $koneksi = mysqli_connect('localhost', 'root', '', 'dukcapil');


   $id_penduduk = $_GET['id_penduduk'];
    $jenis_permohonan = trim(mysqli_real_escape_string($koneksi, $_POST['jenis_permohonan']));
    $alamat_asal = trim(mysqli_real_escape_string($koneksi, $_POST['alamat_asal']));
    $alasan_pindah = trim(mysqli_real_escape_string($koneksi, $_POST['alasan_pindah']));
    $tgl_datang = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_datang']));
    $jlh_anggota_keluarga = trim(mysqli_real_escape_string($koneksi, $_POST['jlh_anggota_keluarga']));
    $no_KK =  trim(mysqli_real_escape_string($koneksi, $_POST['no_KK']));
    $jenis_kepindahan =  trim(mysqli_real_escape_string($koneksi,$_POST['jenis_kepindahan']));
    $klasifikasi_perpindahan = trim(mysqli_real_escape_string($koneksi, $_POST['klasifikasi_perpindahan']));
    $no_pindah = trim(mysqli_real_escape_string($koneksi, $_POST['no_pindah']));
   $alamat_tujuan =trim(mysqli_real_escape_string($koneksi, $_POST['alamat_tujuan']));


    $nama = $_FILES['surat_pengantar']['name'];
  $nama2 = $_FILES['fc_ktp']['name'];
  $nama3 = $_FILES['fc_kk']['name'];
  $nama4 = $_FILES['foto_berwarna']['name'];


  $lokasi = $_FILES['surat_pengantar']['tmp_name'];
  $lokasi2 = $_FILES['fc_ktp']['tmp_name'];
  $lokasi3 = $_FILES['fc_kk']['tmp_name'];
  $lokasi4 = $_FILES['foto_berwarna']['tmp_name'];


  move_uploaded_file($lokasi, "files/".$nama);
  move_uploaded_file($lokasi2, "files/".$nama2);
  move_uploaded_file($lokasi3, "files/".$nama3);
  move_uploaded_file($lokasi4, "files/".$nama4);



   
  
 $queryInsert = mysqli_query($koneksi, "INSERT INTO kedatangan(id_penduduk,jenis_permohonan_id,alamat_asal,alasan_pindah_id,alamat_tujuan,klasifikasi_perpindahan,jenis_kepindahan_id,tgl_datang,no_pindah,jlh_anggota_keluarga,no_KK,surat_pengantar,fc_ktp,fc_kk,foto_berwarna,id_status_request) VALUES ('$id_penduduk','$jenis_permohonan','$alamat_asal','$alasan_pindah','$alamat_tujuan','$klasifikasi_perpindahan','$jenis_kepindahan','$tgl_datang','$no_pindah','$jlh_anggota_keluarga','$no_KK','$nama','$nama2','$nama3','nama4',1)");

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