<?php
	//mendapatkan id dari url
	$id_kelahiran = $_GET["id"];

	$get = $connect->query("SELECT * FROM kelahiran INNER JOIN jenis_kelamin ON kelahiran.jenis_kelamin=jenis_kelamin.idjenis_kelamin INNER JOIN status_request ON kelahiran.id_status_request=status_request.id_status INNER JOIN penduduk ON kelahiran.id_penduduk=penduduk.id_penduduk  WHERE id_kelahiran = '$id_kelahiran'");
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


<b class="judul">Detail Permohonan Akta Kelahiran</b>
<br>
<div class="table-responsive">
  <table class="table table-striped">
    <tbody>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class="atribut" width="20%">Nomor Induk Kependudukan</td>
        <td class="content"><?php echo $detail_akta['no_kk']; ?></td>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
        </td>
        <td>Nama Lengkap</td>
        <td><?php echo $detail_akta['nama_lengkap_bayi']; ?></td>
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
        if($detail_akta['tanggal']=='Satu'){
            echo "1";
        }else if ($detail_akta['tanggal']=='Dua'){
            echo "2";
        }else if ($detail_akta['tanggal']=='Tiga'){
            echo "3";
        }else if ($detail_akta['tanggal']=='Empat'){
            echo "4";
        }else if ($detail_akta['tanggal']=='Lima'){
            echo "5";
        }else if ($detail_akta['tanggal']=='Enam'){
            echo "6";
        }else if ($detail_akta['tanggal']=='Tujuh'){
            echo "7";
        }else if ($detail_akta['tanggal']=='Delapan'){
            echo "8";
        }else if ($detail_akta['tanggal']=='Sembilan'){
            echo "9";
        }else if ($detail_akta['tanggal']=='Sepuluh'){
            echo "10";
        }else if ($detail_akta['tanggal']=='Sebelas'){
            echo "11";
        }else if ($detail_akta['tanggal']=='Dua Belas'){
            echo "12";
        }else if ($detail_akta['tanggal']=='Tiga Belas'){
            echo "13";
        }else if ($detail_akta['tanggal']=='Empta Belas'){
            echo "14";
        }else if ($detail_akta['tanggal']=='Lima Belas'){
            echo "15";
        }else if ($detail_akta['tanggal']=='Enam Belas'){
            echo "16";
        }else if ($detail_akta['tanggal']=='Tujuh Belas'){
            echo "17";
        }else if ($detail_akta['tanggal']=='Delapan Belas'){
            echo "18";
        }else if ($detail_akta['tanggal']=='Sembilan Belas'){
            echo "19";
        }else if ($detail_akta['tanggal']=='Dua Puluh'){
            echo "20";
        }else if ($detail_akta['tanggal']=='Dua Puluh Satu'){
            echo "21";
        }else if ($detail_akta['tanggal']=='Dua Puluh Dua'){
            echo "22";
        }else if ($detail_akta['tanggal']=='Dua Puluh Tiga'){
            echo "23";
        }else if ($detail_akta['tanggal']=='Dua Puluh Empat'){
            echo "24";
        }else if ($detail_akta['tanggal']=='Dua Puluh Lima'){
            echo "25";
        }else if ($detail_akta['tanggal']=='Dua Puluh Enam'){
            echo "26";
        }else if ($detail_akta['tanggal']=='Dua Puluh Tujuh'){
            echo "27";
        }else if ($detail_akta['tanggal']=='Dua Puluh Delapan'){
            echo "28";
        }else if ($detail_akta['tanggal']=='Dua Puluh Sembilan'){
            echo "29";
        }else if ($detail_akta['tanggal']=='Tiga Puluh'){
            echo "30";
        }else if ($detail_akta['tanggal']=='Tiga Puluh Satu'){
            echo "31";
        }else{
            echo "error date";
        }
        ?>
        &nbsp<?php echo $detail_akta['bulan']; ?>&nbsp<?php echo $detail_akta['tahun']; ?></td>
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
        <td class=" ">Email </td>
        <td class=" "><?php echo $detail_akta['email']; ?></td>
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
        <td class=" ">FC Surat Menikah</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['fc_surat_nikah']; ?></a></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Surat Kelahiran Bidan</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['surat_kelahiran_bidan']; ?></a></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">FC Kartu Keluarga Orangtua</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['fc_kk_ortu']; ?></a></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">FC KTP Saksi I</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['fc_ktp_saksi1']; ?></a></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">FC KTP Saksi II</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['fc_ktp_saksi2']; ?></a></td>
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
        $connect->query("UPDATE kelahiran SET id_status_request = '3' WHERE kelahiran.id_kelahiran ='$_GET[id]' ");
        echo "<script> alert('Berhasil Menerima);</script>";
        echo "<script> location='index.php?halaman=akta_kelahiran'</script>";
    }
    ?>
    <?php
        if (isset($_POST['terima']))
    {
        $connect->query("UPDATE kelahiran SET id_status_request = '2' WHERE kelahiran.id_kelahiran ='$_GET[id]' ");
        echo "<script> alert('Berhasil Menolak);</script>";
        echo "<script> location='index.php?halaman=akta_kelahiran'</script>";
    }
    ?>
    <?php
        if (isset($_POST['cetak']))
    {
        $connect->query("UPDATE kelahiran SET id_status_request = '4' WHERE kelahiran.id_kelahiran ='$_GET[id]' ");
        echo "<script> alert('Status Permintaan Berhasil Diubah);</script>";
        echo "<script> location='index.php?halaman=akta_kelahiran'</script>";
    }
    ?>
</div>  