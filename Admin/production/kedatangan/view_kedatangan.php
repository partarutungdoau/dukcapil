<?php
	//mendapatkan id dari url
	$id_kedatangan = $_GET["id"];

	$get = $connect->query("SELECT * FROM kedatangan INNER JOIN Klasifikasi_perpindahan ON kedatangan.Klasifikasi_perpindahan=Klasifikasi_perpindahan.Klasifikasi_perpindahan_id INNER JOIN jenis_permohonan ON kedatangan.jenis_permohonan_id=jenis_permohonan.jenis_permohonan_id INNER JOIN alasan_pindah ON kedatangan.alasan_pindah_id=alasan_pindah.alasan_pindah_id INNER JOIN status_request ON kedatangan.id_status_request=status_request.id_status  INNER JOIN penduduk ON kedatangan.id_penduduk=penduduk.id_penduduk WHERE id_kedatangan = '$id_kedatangan'");
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


<b class="judul">Detail Permohonan Akta Kedatangan</b>
<br>
<div class="table-responsive">
  <table class="table table-striped">
    <tbody>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class="atribut" width="20%">Jenis Permohonan</td>
        <td class="content"><?php echo $detail_akta['jenis_permohonan']; ?></td>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
        </td>
        <td>Alamat Asal</td>
        <td><?php echo $detail_akta['alamat_asal']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td>Alasan Pindah</td>
        <td><?php echo $detail_akta['alasan_pindah']; ?></td>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
        </td>
        <td>Alamat Tujuan</td>
        <td><?php echo $detail_akta['alamat_tujuan']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td>Klasifikasi Perpindahan</td>
        <td><?php echo $detail_akta['klasifikasi_perpindahan']; ?> </td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Tanggal Datang<td>
        <td class=" "><?php echo $detail_akta['tgl_datang']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">No Pindah</td>
        <td class=" "><?php echo $detail_akta['no_pindah']; ?></td>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Jumlah Anggota Keluarga</td>
        <td class=" "><?php echo $detail_akta['jlh_anggota_keluarga']; ?></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">No. KK</td>
        <td class=" "><?php echo $detail_akta['no_KK']; ?></td>
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
        <td class=" ">Surat Pengantar</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['surat_pengantar']; ?></a></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">FC KTP</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['fc_ktp']; ?></a></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">FC KK</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['fc_kk']; ?></a></td>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
        </td>
        <td class=" ">Foto Berwarna</td>
        <td class=" "><a href="cetak_akta_kelahiran/periksa_fc_akta_nikah.php?id=<?php echo $detail_akta['id_kelahiran']?>"><?php echo $detail_akta['foto_berwarna']; ?></a></td>
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
        $connect->query("UPDATE kedatangan SET id_status_request = '3' WHERE kedatangan.id_kedatangan ='$_GET[id]' ");
        echo "<script> alert('Berhasil Menerima);</script>";
        echo "<script> location='index.php?halaman=kedatangan'</script>";
    }
    ?>
    <?php
        if (isset($_POST['terima']))
    {
        $connect->query("UPDATE kedatangan SET id_status_request = '2' WHERE kedatangan.id_kedatangan ='$_GET[id]' ");
        echo "<script> alert('Berhasil Menolak);</script>";
        echo "<script> location='index.php?halaman=kedatangan'</script>";
    }
    ?>
    <?php
        if (isset($_POST['cetak']))
    {
        $connect->query("UPDATE kedatangan SET id_status_request = '4' WHERE kedatangan.id_kedatangan ='$_GET[id]' ");
        echo "<script> alert('Status Permintaan Berhasil Diubah);</script>";
        echo "<script> location='index.php?halaman=kedatangan'</script>";
    }
    ?>
</div>  