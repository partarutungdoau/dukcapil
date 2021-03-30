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
                <th style="width: 15%">Nama Suami</th>
                <th style="width: 15%">Nama Istri</th>
                <th>Tanggal Pendaftaran</th>
                 <th>Status Permohonan</th>
                <th style="width: 20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $nomor=1; ?>
        <?php $get=$connect->query("SELECT * FROM perkawinan INNER JOIN status_request ON perkawinan.id_status_request=status_request.id_status"); ?>
        <?php while($pecah = $get->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td>
                    <?php echo $pecah['nama_suami']; ?>
                </td>
                <td>
                    <?php echo $pecah['nama_istri']; ?>
                </td>
                <td>
                <?php
                    if($pecah['tanggal_pendaftaran']=='Satu'){
                        echo "1";
                    }else if ($pecah['tanggal_pendaftaran']=='Dua'){
                        echo "2";
                    }else if ($pecah['tanggal_pendaftaran']=='Tiga'){
                        echo "3";
                    }else if ($pecah['tanggal_pendaftaran']=='Empat'){
                        echo "4";
                    }else if ($pecah['tanggal_pendaftaran']=='Lima'){
                        echo "5";
                    }else if ($pecah['tanggal_pendaftaran']=='Enam'){
                        echo "6";
                    }else if ($pecah['tanggal_pendaftaran']=='Tujuh'){
                        echo "7";
                    }else if ($pecah['tanggal_pendaftaran']=='Delapan'){
                        echo "8";
                    }else if ($pecah['tanggal_pendaftaran']=='Sembilan'){
                        echo "9";
                    }else if ($pecah['tanggal_pendaftaran']=='Sepuluh'){
                        echo "10";
                    }else if ($pecah['tanggal_pendaftaran']=='Sebelas'){
                        echo "11";
                    }else if ($pecah['tanggal_pendaftaran']=='Dua Belas'){
                        echo "12";
                    }else if ($pecah['tanggal_pendaftaran']=='Tiga Belas'){
                        echo "13";
                    }else if ($pecah['tanggal_pendaftaran']=='Empta Belas'){
                        echo "14";
                    }else if ($pecah['tanggal_pendaftaran']=='Lima Belas'){
                        echo "15";
                    }else if ($pecah['tanggal_pendaftaran']=='Enam Belas'){
                        echo "16";
                    }else if ($pecah['tanggal_pendaftaran']=='Tujuh Belas'){
                        echo "17";
                    }else if ($pecah['tanggal_pendaftaran']=='Delapan Belas'){
                        echo "18";
                    }else if ($pecah['tanggal_pendaftaran']=='Sembilan Belas'){
                        echo "19";
                    }else if ($pecah['tanggal_pendaftaran']=='Dua Puluh'){
                        echo "20";
                    }else if ($pecah['tanggal_pendaftaran']=='Dua Puluh Satu'){
                        echo "21";
                    }else if ($pecah['tanggal_pendaftaran']=='Dua Puluh Dua'){
                        echo "22";
                    }else if ($pecah['tanggal_pendaftaran']=='Dua Puluh Tiga'){
                        echo "23";
                    }else if ($pecah['tanggal_pendaftaran']=='Dua Puluh Empat'){
                        echo "24";
                    }else if ($pecah['tanggal_pendaftaran']=='Dua Puluh Lima'){
                        echo "25";
                    }else if ($pecah['tanggal_pendaftaran']=='Dua Puluh Enam'){
                        echo "26";
                    }else if ($pecah['tanggal_pendaftaran']=='Dua Puluh Tujuh'){
                        echo "27";
                    }else if ($pecah['tanggal_pendaftaran']=='Dua Puluh Delapan'){
                        echo "28";
                    }else if ($pecah['tanggal_pendaftaran']=='Dua Puluh Sembilan'){
                        echo "29";
                    }else if ($pecah['tanggal_pendaftaran']=='Tiga Puluh'){
                        echo "30";
                    }else if ($pecah['tanggal_pendaftaran']=='Tiga Puluh Satu'){
                        echo "31";
                    }else{
                        echo "error date";
                    }
                    ?>
                    <?php echo $pecah['bulan_pendaftaran']; ?>&nbsp<?php echo $pecah['tahun_pendaftaran']; ?>
                </td>
                <td>
                    <?php echo $pecah['status']; ?>
                </td>
                <td>
                    <form method="POST">
                        <a href="index.php?halaman=view_akta_kawin&id=<?php echo $pecah['id_perkawinan']; ?>" class="btn btn-primary btn-xs" ><i class="fa fa-folder"></i> View </a>
                        
                    </form> 
                </td>
            </tr>      
            <?php $nomor++;?>
            <?php } ?>
        </tbody>
    </table>
    

</div>

