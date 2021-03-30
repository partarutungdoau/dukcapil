<h2>Akta Kelahiran</h2>
<hr>
<div >
    <form action="index.php?halaman=pencarian_pedagang" method="post" class="navbar-from navbar-right">
        <div>
            <input type="text" name="keyword" placeholder="Cari Nama.." action="index.php?halaman=pencarian_akta_Kelahiran">
            <button name="cari_akta_lahir" class="btn btn-default">Cari</button>
        </div>
    </form>
</div>
<div class="x_content">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">#</th>
                <th style="width: 20%">NIK</th>
                <th>Nama Lengkap</th>
                <th>Tempat Lahir</th>
                 <th>Status Permohonan</th>
                <th style="width: 20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $nomor=1; ?>
        <?php $get=$connect->query("SELECT * FROM kelahiran INNER JOIN status_request ON kelahiran.id_status_request=status_request.id_status WHERE id_status_request='2'"); ?>
        <?php while($pecah = $get->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td>
                    <?php echo $pecah['no_kk']; ?>
                </td>
                <td>
                    <?php echo $pecah['nama_lengkap_bayi']; ?>
                </td>
                <td>
                    <?php echo $pecah['tpt_lahir']; ?>
                </td>
                <td>
                    <?php echo $pecah['status']; ?>
                </td>
                <td>
                    <form method="POST">
                        <a href="index.php?halaman=view_akta_kelahiran&id=<?php echo $pecah['id_kelahiran']; ?>" class="btn btn-primary btn-xs" ><i class="fa fa-folder"></i> View </a>
                        <?php
                        if($pecah['id_status_request']=='1'){ ?>
                        <button class="btn btn-success" name="terima"><i class="fa fa-pencil"></i> Terima</button>
                        <button class="btn btn-danger" name="tolak"><i class="fa fa-trash-o"></i> Tolak</button>
                        <?php
                            }
                        ?>   
                    </form>    
                </td>
            </tr>      
            <?php $nomor++;?>
            <?php } ?>
        </tbody>
    </table>
    <?php
    if(isset($_POST['terima']))
    {
        $connect->query("UPDATE kelahiran SET id_status_request='2' WHERE kelahiran.id_kelahiran='$_GET[id]'");

        echo "<script> alert('Berhasil Diterima);</script>";
        echo "<script> location='../index.php?halaman=akta_kelahiran'</script>";
    }
    ?>
    <?php
    if(isset($_POST['tolak']))
    {
        $connect->query("UPDATE kelahiran SET id_status_request='3' WHERE kelahiran.kelahiran='$_GET[id]'");

        echo "<script> alert('Berhasil Ditolak);</script>";
        echo "<script> location='../index.php?halaman=akta_kelahiran'</script>";
    }
    ?>

</div>