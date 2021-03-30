<!--  <?php 
session_start();
  $conn = mysqli_connect('localhost', 'root', '', 'dukcapil');

  if (!isset($_SESSION['id_penduduk']) OR empty($_SESSION['id_penduduk'])) {

  }
?> -->
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

  <?php include('header.php');
    ?>

   <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Layanan</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="kartu_keluarga.php">Pencetakan Kartu Keluarga</a></h4>
              <p class="description"></p>
            </div>
          </div>

           <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="kedatangan.php">Pencetakan Surat Penduduk Datang</a></h4>
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
              <h4 class="title"><a href="kematian.php">Akta Kematian</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="perkawinan.php">Pencetakan Surat Perkawinan</a></h4>
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

      </div>
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
