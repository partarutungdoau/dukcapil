<h2>Permohonan Kartu Keluarga</h2>
<div class="x_content">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">#</th>
                <th style="width: 15%">Nama Kepala Keluarga</th>
                <th style="width: 12%">NIK</th>
                 <th style="width: 12%">No. KK</th>
                <th style="width: 15%">Jenis Kelamin</th>
                <th>Alamat</th>
                <th style="width: 30%">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $nomor=1; ?>
        <?php $get=$connect->query("SELECT * FROM kartu_keluarga INNER JOIN penduduk on kartu_keluarga.id_penduduk=penduduk.id_penduduk INNER JOIN jenis_kelamin on kartu_keluarga.idjenis_kelamin=jenis_kelamin.idjenis_kelamin ORDER BY nama_lengkap ASC"); ?>
        <?php while($pecah = $get->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama_lengkap']; ?></td>
                <td><?php echo $pecah['nik']; ?></td>
                <td><?php echo $pecah['no_KK']; ?></td>
                <td><?php echo $pecah['jenis_kelamin']; ?></td>
                <td><?php echo $pecah['alamat']; ?></td>
                <td>
                   <a href="index.php?halaman=hapus_produk&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-success btn-xs"><i></i> Terima </a>
                   <a href="index.php?halaman=detail_produk&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-primary btn-xs" ><i class="fa fa-folder"></i> View </a>
                    <a href="index.php?halaman=hapus_produk&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Tolak </a>
                </td>
            </tr>      
            <?php $nomor++;?>
            <?php } ?>
        </tbody>
    </table>
    <!-- <a href="index.php?halaman=tambah_produk" class="btn btn-success btn-xs"><i class="fa fa-folder"></i>Tambah Produk</a> -->
    <!-- end project list -->

</div>