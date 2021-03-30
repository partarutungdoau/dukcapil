<h2>Akta Kematian</h2>
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
                <th>Tanggal Kematian</th>
                 <th>Status Permohonan</th>
                <th style="width: 20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $nomor=1; ?>
        <?php $get=$connect->query("SELECT * FROM kematian INNER JOIN status_request ON kematian.id_status_request=status_request.id_status"); ?>
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
                <?php
                if($pecah['tanggal_kematian']=='Satu'){
                        echo "1";
                    }else if ($pecah['tanggal_kematian']=='Dua'){
                        echo "2";
                    }else if ($pecah['tanggal_kematian']=='Tiga'){
                        echo "3";
                    }else if ($pecah['tanggal_kematian']=='Empat'){
                        echo "4";
                    }else if ($pecah['tanggal_kematian']=='Lima'){
                        echo "5";
                    }else if ($pecah['tanggal_kematian']=='Enam'){
                        echo "6";
                    }else if ($pecah['tanggal_kematian']=='Tujuh'){
                        echo "7";
                    }else if ($pecah['tanggal_kematian']=='Delapan'){
                        echo "8";
                    }else if ($pecah['tanggal_kematian']=='Sembilan'){
                        echo "9";
                    }else if ($pecah['tanggal_kematian']=='Sepuluh'){
                        echo "10";
                    }else if ($pecah['tanggal_kematian']=='Sebelas'){
                        echo "11";
                    }else if ($pecah['tanggal_kematian']=='Dua Belas'){
                        echo "12";
                    }else if ($pecah['tanggal_kematian']=='Tiga Belas'){
                        echo "13";
                    }else if ($pecah['tanggal_kematian']=='Empta Belas'){
                        echo "14";
                    }else if ($pecah['tanggal_kematian']=='Lima Belas'){
                        echo "15";
                    }else if ($pecah['tanggal_kematian']=='Enam Belas'){
                        echo "16";
                    }else if ($pecah['tanggal_kematian']=='Tujuh Belas'){
                        echo "17";
                    }else if ($pecah['tanggal_kematian']=='Delapan Belas'){
                        echo "18";
                    }else if ($pecah['tanggal_kematian']=='Sembilan Belas'){
                        echo "19";
                    }else if ($pecah['tanggal_kematian']=='Dua Puluh'){
                        echo "20";
                    }else if ($pecah['tanggal_kematian']=='Dua Puluh Satu'){
                        echo "21";
                    }else if ($pecah['tanggal_kematian']=='Dua Puluh Dua'){
                        echo "22";
                    }else if ($pecah['tanggal_kematian']=='Dua Puluh Tiga'){
                        echo "23";
                    }else if ($pecah['tanggal_kematian']=='Dua Puluh Empat'){
                        echo "24";
                    }else if ($pecah['tanggal_kematian']=='Dua Puluh Lima'){
                        echo "25";
                    }else if ($pecah['tanggal_kematian']=='Dua Puluh Enam'){
                        echo "26";
                    }else if ($pecah['tanggal_kematian']=='Dua Puluh Tujuh'){
                        echo "27";
                    }else if ($pecah['tanggal_kematian']=='Dua Puluh Delapan'){
                        echo "28";
                    }else if ($pecah['tanggal_kematian']=='Dua Puluh Sembilan'){
                        echo "29";
                    }else if ($pecah['tanggal_kematian']=='Tiga Puluh'){
                        echo "30";
                    }else if ($pecah['tanggal_kematian']=='Tiga Puluh Satu'){
                        echo "31";
                    }else{
                        echo "error date";
                    }
                    ?>
                    &nbsp<?php echo $pecah['bulan_kematian']; ?>&nbsp<?php echo $pecah['tahun_kematian']; ?>
                </td>
                <td>
                    <?php echo $pecah['status']; ?>
                </td>
                <td>
                    <form method="POST">
                        <a href="index.php?halaman=view_akta_kematian&id=<?php echo $pecah['id_kematian']; ?>" class="btn btn-primary btn-xs" ><i class="fa fa-folder"></i> View </a>
                </td>
            </tr>      
            <?php $nomor++;?>
            <?php } ?>
        </tbody>
    </table>
    

</div>

