<?php
	//mendapatkan id dari url
	$id_kematian = $_GET["id"];

	$get = $connect->query("SELECT * FROM kematian INNER JOIN jenis_kelamin ON kematian.id_jenis_kelamin=jenis_kelamin.idjenis_kelamin INNER JOIN status_request ON kematian.id_status_request=status_request.id_status INNER JOIN penduduk ON kematian.id_penduduk=penduduk.id_penduduk WHERE id_kematian = '$id_kematian'");
	$detail_akta =$get->fetch_assoc();

	// echo "<pre>";
	// print_r($detail_akta);
	// echo "<pre>";
?>
<style type="text/css">
    table{
        font-size: 17px;
    }
    .judul{
        font-size: 25px;
    }
</style>


<b class="judul">Detail Permohonan Akta Kematian</b>
<br>
<div class="table-responsive">
  <table class="table table-striped">
    <tbody>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class="atribut" width="20%">Nomor Induk Kependudukan</td>
        <td class="content"><?php echo $detail_akta['NIK']; ?></td>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
        </td>
        <td>Nama Lengkap</td>
        <td><?php echo $detail_akta['nama_lengkap']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td>Jenis Kelamin</td>
        <td><?php echo $detail_akta['jenis_kelamin']; ?></td>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
        </td>
        <td>Anak Ke-</td>
        <td><?php echo $detail_akta['anak_ke']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td>Tempat Lahir</td>
        <td><?php echo $detail_akta['tpt_lahir']; ?> </td>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center "></td>
        <td>Tanggal Lahir</td>
        <td><?php 
        if($detail_akta['tanggal_lahir']=='Satu'){
            echo "1";
        }else if ($detail_akta['tanggal_lahir']=='Dua'){
            echo "2";
        }else if ($detail_akta['tanggal_lahir']=='Tiga'){
            echo "3";
        }else if ($detail_akta['tanggal_lahir']=='Empat'){
            echo "4";
        }else if ($detail_akta['tanggal_lahir']=='Lima'){
            echo "5";
        }else if ($detail_akta['tanggal_lahir']=='Enam'){
            echo "6";
        }else if ($detail_akta['tanggal_lahir']=='Tujuh'){
            echo "7";
        }else if ($detail_akta['tanggal_lahir']=='Delapan'){
            echo "8";
        }else if ($detail_akta['tanggal_lahir']=='Sembilan'){
            echo "9";
        }else if ($detail_akta['tanggal_lahir']=='Sepuluh'){
            echo "10";
        }else if ($detail_akta['tanggal_lahir']=='Sebelas'){
            echo "11";
        }else if ($detail_akta['tanggal_lahir']=='Dua Belas'){
            echo "12";
        }else if ($detail_akta['tanggal_lahir']=='Tiga Belas'){
            echo "13";
        }else if ($detail_akta['tanggal_lahir']=='Empta Belas'){
            echo "14";
        }else if ($detail_akta['tanggal_lahir']=='Lima Belas'){
            echo "15";
        }else if ($detail_akta['tanggal_lahir']=='Enam Belas'){
            echo "16";
        }else if ($detail_akta['tanggal_lahir']=='Tujuh Belas'){
            echo "17";
        }else if ($detail_akta['tanggal_lahir']=='Delapan Belas'){
            echo "18";
        }else if ($detail_akta['tanggal_lahir']=='Sembilan Belas'){
            echo "19";
        }else if ($detail_akta['tanggal_lahir']=='Dua Puluh'){
            echo "20";
        }else if ($detail_akta['tanggal_lahir']=='Dua Puluh Satu'){
            echo "21";
        }else if ($detail_akta['tanggal_lahir']=='Dua Puluh Dua'){
            echo "22";
        }else if ($detail_akta['tanggal_lahir']=='Dua Puluh Tiga'){
            echo "23";
        }else if ($detail_akta['tanggal_lahir']=='Dua Puluh Empat'){
            echo "24";
        }else if ($detail_akta['tanggal_lahir']=='Dua Puluh Lima'){
            echo "25";
        }else if ($detail_akta['tanggal_lahir']=='Dua Puluh Enam'){
            echo "26";
        }else if ($detail_akta['tanggal_lahir']=='Dua Puluh Tujuh'){
            echo "27";
        }else if ($detail_akta['tanggal_lahir']=='Dua Puluh Delapan'){
            echo "28";
        }else if ($detail_akta['tanggal_lahir']=='Dua Puluh Sembilan'){
            echo "29";
        }else if ($detail_akta['tanggal_lahir']=='Tiga Puluh'){
            echo "30";
        }else if ($detail_akta['tanggal_lahir']=='Tiga Puluh Satu'){
            echo "31";
        }else{
            echo "error date";
        }
        ?>
        &nbsp<?php echo $detail_akta['bulan_lahir']; ?>&nbsp<?php echo $detail_akta['tahun_lahir']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Nama Ayah</td>
        <td class=" "><?php echo $detail_akta['nama_ayah']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Pekerjaan Ayah</td>
        <td class=" "><?php echo $detail_akta['nama_ayah']; ?></td>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Nama Ibu</td>
        <td class=" "><?php echo $detail_akta['nama_ibu']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Pekerjaan Ibu</td>
        <td class=" ">-</td>
        </td>
      </tr>

      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Status Permohonan</td>
        <td class=" "><?php echo $detail_akta['status']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Email </td>
        <td class=" "><?php echo $detail_akta['email']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Surat Pengantar</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['surat_pengantar']; ?></a></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Surat Keterangan Dari Dokter</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['sk_dari_dokter']; ?></a></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">FC KTP/td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['fc_ktp']; ?></a></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">FC Kartu Keluarga I</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['fc_kk']; ?></a></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">FC Izajah SK</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['fc_ijazah_sk']; ?></a></td>
        </td>
      </tr>
    </tbody>
  </table>

  <form method="POST">
    <?php 
        if($detail_akta['id_status_request']=='2'){ ?>
            <button class="btn btn-danger" name="tolak"><i class="fa fa-trash-o"></i> Batalkan</button>
            <button class="btn btn-success" name="cetak"><i class="fa fa-pencil"></i> Ubah Status Dikirim</button>
    <?php
        }
        else if($detail_akta['id_status_request']=='1'){ ?>
            <button class="btn btn-success" name="terima"><i class="fa fa-pencil"></i> Terima</button>
            <button class="btn btn-danger" name="tolak"><i class="fa fa-trash-o"></i> Tolak</button>
    <?php
        }
    ?>
  </form>


    <?php
        if (isset($_POST['tolak']))
    {
        $connect->query("UPDATE kematian SET id_status_request = '3' WHERE kematian.id_kematian ='$_GET[id]' ");
        echo "<script> alert('Berhasil Menerima);</script>";
        echo "<script> location='index.php?halaman=akta_kematian'</script>";
    }
    ?>
    <?php
        if (isset($_POST['terima']))
    {
        $connect->query("UPDATE kematian SET id_status_request = '2' WHERE kematian.id_kematian ='$_GET[id]' ");
        echo "<script> alert('Berhasil Menolak);</script>";
        echo "<script> location='index.php?halaman=akta_kematian'</script>";
    }
    ?>
    <?php
        if (isset($_POST['cetak']))
    {
        $connect->query("UPDATE kematian SET id_status_request = '4' WHERE kematian.id_kematian ='$_GET[id]' ");
        echo "<script> alert('Status Permintaan Berhasil Diubah);</script>";
        echo "<script> location='index.php?halaman=akta_kematian'</script>";
    }
    ?>
</div>  