<h2>Akta Perceraian</h2>
<hr>
<div >
    <form action="index.php?halaman=pencarian_pedagang" method="post" class="navbar-from navbar-right">
        <div>
            <input type="text" name="keyword" placeholder="Cari Nama.." action="index.php?halaman=pencarian_akta_perceraian">
            <button name="cari_akta_lahir" class="btn btn-default">Cari</button>
        </div>
    </form>
</div>
<div class="x_content">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">#</th>
                <th style="width: 20%">NIK Suami</th>
                <th>Nama Suami</th>
                <th>Tempat Lahir</th>
                 <th>Status Permohonan</th>
                <th style="width: 20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $nomor=1; ?>
        <?php $get=$connect->query("SELECT * FROM perceraian INNER JOIN status_request ON perceraian.id_status_request=status_request.id_status "); ?>
        <?php while($pecah = $get->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td>
                    <?php echo $pecah['nik_suami']; ?>
                </td>
                <td>
                    <?php echo $pecah['nama_lengkap_suami']; ?>
                </td>
                <td>
                    <?php echo $pecah['tpt_lahir_suami']; ?>
                </td>
                <td>
                    <?php echo $pecah['status']; ?>
                </td>
                <td>
                    <form method="POST">
                        <a href="index.php?halaman=view_akta_perceraian&id=<?php echo $pecah['id_perceraian']; ?>" class="btn btn-primary btn-xs" ><i class="fa fa-folder"></i> View </a>             
                    </form>  
                </td>
            </tr>      
            <?php $nomor++;?>
            <?php } ?>
        </tbody>
    </table>
    

</div>

