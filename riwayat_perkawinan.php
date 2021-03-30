  <?php 
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
        <h3 align="center" class="mt-3">Riwayat Kematian</h3>
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>NIK Suami</th>
                <th>Nama Suami</th>
                <th>NIK Istri</th>
                <th>Nama Istri</th>
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
                $ambil = mysqli_query($conn, "SELECT * FROM perkawinan  inner join status_request m on id_status_request = id_status WHERE id_penduduk='$_SESSION[id_penduduk]'");
                while($pecah = $ambil->fetch_assoc()){
                ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $pecah["nik_suami"]; ?></td>
                  <td><?php echo $pecah["nama_suami"]; ?></td>
                  <td><?php echo $pecah["nik_istri"]; ?></td>
                  <td><?php echo $pecah["nama_istri"]; ?></td>
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
          <a href="perkawinan.php" class="btn btn-primary">Request KK</a>

         
      </section><!-- #services -->
   <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>Andaliman Toba</strong> Dinas Kependudukan Dan Pencatatan Sipil Kabupaten Toba
        </div>
        <!-- <div class="credits">
          
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
          
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> -->
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
