 <?php 
session_start();
  $conn = mysqli_connect('localhost', 'root', '', 'dukcapil');
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

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <?php include('header.php');
    ?>

  <section id="intro">

    <div class="intro-content">
      <h3>SELAMAT<span> DATANG</span><br>AKSES PELAYANAN ADMINISTRASI KEPENDUDUKAN ONLINE KABUPATEN TOBA</h3>
      <div>
        <a href="#about" class="btn-get-started scrollto">Masuk</a>
        <a href="#services" class="btn-projects scrollto">Pelajari</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/a.png" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Tentang Kami</h2>
            <h3>Andaliman Toba</h3>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Andministrasi Kependudukan Online Mandiri Kabupaten Toba (Andaliman Toba)</li>
              <li><i class="ion-android-checkmark-circle"></i> Merupakan sebuah kanal pelayanan yang memberikan akses langsung kepadapenduduk khususnya warga Toba untuk mengajukan pelayanan administrasi Kependudukannya. Melalui aplikasi ini penduduk dapat mengajukan permohonan layanan, penjadwalan pelayanan, dan memonitor pelayanan yang diajukannya.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
   <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Layanan</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="requestkk.php">Pencetakan Kartu Keluarga</a></h4>
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

      </div>
    </section>
   <!-- #testimonials -->

    <!--==========================
      Call To Action Section
    ============================-->
    <!-- <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section> --><!-- #call-to-action -->

    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>S</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/kadis.jpg" alt=""></div>
              <div class="details">
                <h4>Drs Bonar M,butar Butar</h4>
                <span>Kepala Dinas</span>
                <!-- <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div> -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-2.jpg" alt=""></div>
              <div class="details">
                <h4>Sarah Jhinson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-3.jpg" alt=""></div>
              <div class="details">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <div class="details">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Hubungi Kami</h2>
          <p>Pemerintah Provinsi Sumatera Utara Dinas Kependudukan dan Pencatatan Sipil Kabupaten Toba</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Jl. Mulia Raja No.26, Balige, Kabupaten Toba Samosir, Sumatera Utara 22312</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+62 854675876978</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">@dukcapiltobagmail.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container mb-4">
        <iframe src="https://www.google.com/search?safe=strict&sxsrf=ALeKk01tz-bQUn8RSK0w0Nrd0AsJkKRhJg:1597769967282&q=dukcapil+toba&npsic=0&rflfq=1&rlha=0&rllag=2379135,99106256,8458&tbm=lcl&ved=2ahUKEwiWlNT6nKXrAhVimeYKHfszBZAQtgN6BAgLEAQ&rldoc=1#rlfi=hd:;si:501698341902147626,l,Cg1kdWtjYXBpbCB0b2JhWhkKCGR1a2NhcGlsIg1kdWtjYXBpbCB0b2Jh,y,06Tt_NtBDSw;mv:[[4.6389776,99.35776580000001],[1.5190317,97.87922619999999]]" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
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
