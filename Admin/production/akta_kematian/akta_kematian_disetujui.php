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
        <?php $get=$connect->query("SELECT * FROM kematian INNER JOIN status_request ON kematian.id_status_request=status_request.id_status WHERE id_status_request='2'"); ?>
        <?php while($pecah = $get->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td>
                    <?php echo $pecah['NIK']; ?>
                </td>
                <td>
                    <?php echo $pecah['nama_lengkap']; ?>
                </td>
                <td>
                    <?php echo $pecah['tanggal_kematian']; ?>&nbsp<?php echo $pecah['bulan_kematian']; ?>&nbsp<?php echo $pecah['tahun_kematian']; ?>
                </td>
                <td>
                    <?php echo $pecah['status']; ?>
                </td>
                <td>
                    <form method="POST">
                        <a href="index.php?halaman=view_akta_kematian&id=<?php echo $pecah['id_kematian']; ?>" class="btn btn-primary btn-xs" ><i class="fa fa-folder"></i> View </a>   
                    </form>    
                </td>
            </tr>      
            <?php $nomor++;?>
            <?php } ?>
        </tbody>
    </table>
    

</div>

