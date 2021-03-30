<?php
	//mendapatkan id dari url
	$id_perceraian = $_GET["id"];

	$get = $connect->query("SELECT * FROM perceraian INNER JOIN status_request ON perceraian.id_status_request=status_request.id_status INNER JOIN penduduk ON perceraian.id_penduduk=penduduk.id_penduduk WHERE id_perceraian = '$id_perceraian'");
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


<b class="judul">Detail Permohonan Akta Perceraian</b>
<br>
<div class="table-responsive">
  <table class="table table-striped">
    <tbody>
      <tr>
        <td></td>
        <td colspan="2"><b>Data Suami</b></td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class="atribut" width="20%">NIK Suami</td>
        <td class="content"><?php echo $detail_akta['nik_suami']; ?></td>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
        </td>
        <td>Nama Lengkap Suami</td>
        <td><?php echo $detail_akta['nama_lengkap_suami']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td>Tempat Lahir Suami</td>
        <td><?php echo $detail_akta['tpt_lahir_suami']; ?></td>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
        </td>
        <td>Tanggal Lahir Suami</td>
        <td><?php echo $detail_akta['tgl_lahir_suami']; ?></td>
        </td>
      </tr>
      <hr>
      <tr>
        <td></td>
        <td colspan="2"><b>Data Istri </b></td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td>NIK Istri</td>
        <td><?php echo $detail_akta['nik_istri']; ?> </td>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
        </td>
        <td>Nama Lengkap Istri</td>
        <td><?php echo $detail_akta['nama_lengkap_istri']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td>Tempat Lahir Istri</td>
        <td><?php echo $detail_akta['tpt_lahir_istri']; ?></td>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
        </td>
        <td>Tanggal Lahir Istri</td>
        <td><?php echo $detail_akta['tgl_lahir_istri']; ?></td>
        </td>
      </tr>
      <tr>
        <td colspan="3"></td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">No Akta Perkawinan</td>
        <td class=" "><?php echo $detail_akta['no_akta_perkawinan']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Nomor Putusan Pengadilan</td>
        <td class=" "><?php echo $detail_akta['no_putusan_pengadilan']; ?></td>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Tempat Lembaga Peradilan</td>
        <td class=" "><?php echo $detail_akta['tpt_lembaga_peradilan']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Nama Lembaga Peradilan</td>
        <td class=" "><?php echo $detail_akta['nama_lembaga_peradilan']; ?></td>
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
        <td class=" ">Surat Putusan Pengadilan</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['surat_putusan_pengadilan']; ?></a></td>
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
        $connect->query("UPDATE perceraian SET id_status_request = '3' WHERE perceraian.id_perceraian ='$_GET[id]' ");
        echo "<script> alert('Berhasil Menerima);</script>";
        echo "<script> location='index.php?halaman=akta_perceraian'</script>";
    }
    ?>
    <?php
        if (isset($_POST['terima']))
    {
        $connect->query("UPDATE perceraian SET id_status_request = '2' WHERE perceraian.id_perceraian ='$_GET[id]' ");
        echo "<script> alert('Berhasil Menolak);</script>";
        echo "<script> location='index.php?halaman=akta_perceraian'</script>";
    }
    ?>
    <?php
        if (isset($_POST['cetak']))
    {
        $connect->query("UPDATE perceraian SET id_status_request = '4' WHERE perceraian.id_perceraian ='$_GET[id]' ");
        echo "<script> alert('Status Permintaan Berhasil Diubah);</script>";
        echo "<script> location='index.php?halaman=akta_perceraian'</script>";
    }
    ?>
</div>  