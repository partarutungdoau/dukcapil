<?php

include 'koneksi.php';

session_start();
  $conn = mysqli_connect('localhost', 'root', '', 'dukcapil');

  if (!isset($_SESSION['id_penduduk']) OR empty($_SESSION['id_penduduk'])) {

    echo "<script>alert('Silahkan Login Terlebih Dahulu');</script>";
    echo "<script>location='layanan.php';</script>";


  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Andaliman Toba</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/a.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="body">

  <?php
   include('header.php');
   include 'koneksi.php';

    ?>

   <div class="container">
        <h3 align="center" class="mt-3">Riwayat Request Kedatangan</h3>
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Alamat Asal</th>
                <th>Alamat Tujuan</th>
                <th>Tanggal Datang</th>
                <th>No. KK</th>
                <th>Status</th>
                <!-- <th>Foto</th> -->
              </tr>  
            </thead>
            <tbody>
               <?php
                $nomor = 1;
                if(isset($_SESSION['id_penduduk']))
                {
                $iduser = $_SESSION['id_penduduk'];
                $ambil = mysqli_query($conn, "SELECT * FROM Kedatangan  inner join status_request m on id_status_request = id_status WHERE id_penduduk='$_SESSION[id_penduduk]'");
                while($pecah = $ambil->fetch_assoc()){
                ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $pecah["alamat_asal"]; ?></td>
                  <td><?php echo $pecah["alamat_tujuan"]; ?></td>
                  <td><?php echo $pecah["tgl_datang"]; ?></td>
                  <td><?php echo $pecah["no_KK"]; ?></td>
                  <td>
                    <?php echo $pecah["status"]; ?>
                  </td>
                </tr>
             <?php $nomor++; ?>
          <?php  }
          ?>
          <?php  }
          ?>
            </tbody>
          </table>
          <a href="kedatangan.php" class="btn btn-primary">Request KK</a>

        <!-- <?php
          $query_jumlah = "SELECT count(*) AS jumlah FROM tbl_mahasiswa";
          $dewan1 = $db1->prepare($query_jumlah);
          $dewan1->execute();
          $res1 = $dewan1->get_result();
          $row = $res1->fetch_assoc();
          $total_records = $row['jumlah'];
        ?> -->
        <p>Total baris : <?php echo $total_records; ?></p>
        <!-- <nav class="mb-5">
          <ul class="pagination justify-content-end">
            <?php
              $jumlah_page = ceil($total_records / $limit);
              $jumlah_number = 1; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
              $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
              $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;
              
              if($page == 1){
                echo '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
                echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
              } else {
                $link_prev = ($page > 1)? $page - 1 : 1;
                echo '<li class="page-item"><a class="page-link" href="mahasiswa.php?page=1">First</a></li>';
                echo '<li class="page-item"><a class="page-link" href="mahasiswa.php?page='.$link_prev.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
              }

              for($i = $start_number; $i <= $end_number; $i++){
                $link_active = ($page == $i)? ' active' : '';
                echo '<li class="page-item '.$link_active.'"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
              }

              if($page == $jumlah_page){
                echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
              } else {
                $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
                echo '<li class="page-item"><a class="page-link" href="mahasiswa.php?page='.$link_next.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
                echo '<li class="page-item"><a class="page-link" href="mahasiswa.php?page='.$jumlah_page.'">Last</a></li>';
              }
            ?>
          </ul>
        </nav> -->

      </div>
    </div>
 
   <!-- <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Layanan</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="riwayatkk.php">Riwayat Kartu Keluarga</a></h4>
              <p class="description"></p>
            </div>
          </div>

           <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Pencetakan Surat Penduduk Datang</a></h4>
              <p class="description"></p>
            </div>
           </div>

        
          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="kelahiran.php">Akta Lahir</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="requestkematian.php">Akta Kematian</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="requestperkawinan.php">Pencetakan Surat Perkawinan</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="perceraian.php">Pencetakan Surat Perceraian</a></h4>
              <p class="description"></p>
            </div>
          </div>

         
        </div>

      </div> -->
    </section><!-- #services -->
 <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Andaliman Toba</strong> Dinas Kependudukan Dan Pencatatan Sipil Kabupaten Toba
      </div>
 
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
