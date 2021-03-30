 <?php
require 'koneksi.php';
session_start();

$UploadDir = 'files/';

  if(isset($_POST['selanjutnya'])){
    $koneksi = mysqli_connect('localhost', 'root', '', 'dukcapil');



  $id_penduduk = $_GET['id_penduduk'];
  $nomor_kk = trim(mysqli_real_escape_string($koneksi, $_POST['no_kk']));
  $nama_kepala_keluarga = trim(mysqli_real_escape_string($koneksi, $_POST['nama_kepala_keluarga']));
  $nama_lengkap_bayi = trim(mysqli_real_escape_string($koneksi, $_POST['nama_lengkap_bayi']));
  $jenis_kelamin =  trim(mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']));
  $tempat_dilahirkan =  trim(mysqli_real_escape_string($koneksi, $_POST['tempat_dilahirkan']));
  $tpt_lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tpt_lahir']));
  $hari = trim(mysqli_real_escape_string($koneksi, $_POST['hari']));
  $tanggal = trim(mysqli_real_escape_string($koneksi, $_POST['tanggal']));
  $bulan = trim(mysqli_real_escape_string($koneksi, $_POST['bulan']));
  $tahun = trim(mysqli_real_escape_string($koneksi, $_POST['tahun']));
  $pukul = trim(mysqli_real_escape_string($koneksi, $_POST['pukul']));
  $berat = trim(mysqli_real_escape_string($koneksi, $_POST['berat']));
  $panjang = trim(mysqli_real_escape_string($koneksi, $_POST['panjang']));
  $anak_ke = trim(mysqli_real_escape_string($koneksi, $_POST['anak_ke']));


  $nik_ayah = trim(mysqli_real_escape_string($koneksi, $_POST['nik_ayah']));
  $nama_ayah = trim(mysqli_real_escape_string($koneksi, $_POST['nama_ayah']));
  $pekerjaan_ayah =  trim(mysqli_real_escape_string($koneksi, $_POST['pekerjaan_ayah']));
  $nik_ibu = trim(mysqli_real_escape_string($koneksi, $_POST['nik_ibu']));
  $nama_ibu = trim(mysqli_real_escape_string($koneksi, $_POST['nama_ibu']));
  $pekerjaan_ibu =  trim(mysqli_real_escape_string($koneksi, $_POST['pekerjaan_ibu']));
  $alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));

  $nik_saksi1 = trim(mysqli_real_escape_string($koneksi, $_POST['nik_saksi1']));
  $nama_saksi1 = trim(mysqli_real_escape_string($koneksi, $_POST['nama_saksi1']));
  $nik_saksi2 = trim(mysqli_real_escape_string($koneksi, $_POST['nik_saksi2']));
  $nama_saksi2 = trim(mysqli_real_escape_string($koneksi, $_POST['nama_saksi2']));
  
 $nama = $_FILES['fc_surat_nikah']['name'];
  $nama2 = $_FILES['surat_kelahiran_bidan']['name'];
  $nama3 = $_FILES['fc_kk_ortu']['name'];
  $nama4 = $_FILES['fc_ktp_saksi1']['name'];
  $nama5 = $_FILES['fc_ktp_saksi2']['name'];

  $lokasi = $_FILES['fc_surat_nikah']['tmp_name'];
  $lokasi2 = $_FILES['surat_kelahiran_bidan']['tmp_name'];
  $lokasi3 = $_FILES['fc_kk_ortu']['tmp_name'];
  $lokasi4 = $_FILES['fc_ktp_saksi1']['tmp_name'];
  $lokasi5 = $_FILES['fc_ktp_saksi2']['tmp_name'];
  move_uploaded_file($lokasi, "files/".$nama);
  move_uploaded_file($lokasi2, "files/".$nama2);
  move_uploaded_file($lokasi3, "files/".$nama3);
  move_uploaded_file($lokasi4, "files/".$nama4);



$queryInsert = mysqli_query($koneksi, "INSERT INTO kelahiran(id_penduduk,no_kk,nama_kepala_keluarga,nama_lengkap_bayi,jenis_kelamin,id_tempat_dilahirkan,tpt_lahir,hari,pukul,tanggal,bulan,tahun,berat,panjang,anak_ke,nik_ayah,nama_ayah,id_pekerjaan_ayah,nik_ibu,nama_ibu,id_pekerjaan_ibu,alamat,nik_saksi1,nama_saksi_1,nik_saksi2,nama_saksi2,fc_surat_nikah,surat_kelahiran_bidan,fc_kk_ortu,fc_ktp_saksi1,fc_ktp_saksi2,id_status_request) VALUES ('$id_penduduk','$nomor_kk','$nama_kepala_keluarga','$nama_lengkap_bayi','$jenis_kelamin','$tempat_dilahirkan','$tpt_lahir','$hari','$pukul','$tanggal','$bulan','$tahun','$berat','$panjang','$anak_ke','$nik_ayah','$nama_ayah','$pekerjaan_ayah','$nik_ibu','$nama_ibu','$pekerjaan_ibu','$alamat','$nik_saksi1','$nama_saksi1','$nik_saksi2','$nama_saksi2','$nama','$nama2','$nama3','$nama4','$nama5',1)");

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