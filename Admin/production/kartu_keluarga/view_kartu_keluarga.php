<?php
	//mendapatkan id dari url
	$id_kk = $_GET["id"];

	$get = $connect->query("SELECT * FROM kartu_keluarga  INNER JOIN pekerjaan ON kartu_keluarga.pekerjaan=pekerjaan.idpekerjaan INNER JOIN jenis_kelamin ON kartu_keluarga.idjenis_kelamin=jenis_kelamin.idjenis_kelamin  INNER JOIN penduduk ON kartu_keluarga.id_penduduk=penduduk.id_penduduk  INNER JOIN status_request ON kartu_keluarga.id_status_request=status_request.id_status WHERE id_kk = '$id_kk'");
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


<b class="judul">Detail Permohonan Kartu Keluarga</b>
<br>
<div class="table-responsive">
  <table class="table table-striped">
    <tbody>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class="atribut" width="20%">Nomor Kartu Keluarga</td>
        <td class="content"><?php echo $detail_akta['id_kk']; ?></td>
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
        <td>Pekerjaan</td>
        <td><?php echo $detail_akta['pekerjaan']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Jumlah Anggota Keluarga</td>
        <td class=" "><?php echo $detail_akta['jlh_anggota_keluarga']; ?></td>
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
        <td class=" ">FC Akta Kelahiran</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['fc_akta_kelahiran']; ?></a></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">FC Akta Nikah</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['fc_akta_nikah']; ?></a></td>
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
        $connect->query("UPDATE kartu_keluarga SET id_status_request = '3' WHERE kartu_keluarga.id_kk ='$_GET[id]' ");
        echo "<script> alert('Berhasil Menerima);</script>";
        echo "<script> location='index.php?halaman=kartu_keluarga'</script>";
    }
    ?>
    <?php
        if (isset($_POST['terima']))
    {
        $connect->query("UPDATE kartu_keluarga SET id_status_request = '2' WHERE kartu_keluarga.id_kk ='$_GET[id]' ");
        echo "<script> alert('Berhasil Menolak);</script>";
        echo "<script> location='index.php?halaman=kartu_keluarga'</script>";
    }
    ?>
    <?php
        if (isset($_POST['cetak']))
    {
        $connect->query("UPDATE kartu_keluarga SET id_status_request = '4' WHERE kartu_keluarga.id_kk ='$_GET[id]' ");
        echo "<script> alert('Status Permintaan Berhasil Diubah);</script>";
        echo "<script> location='index.php?halaman=kartu_keluarga'</script>";
    }
    ?>
</div>  