<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">dukcapiltoba@gmail.com.com</a>
        <i class="fa fa-phone"></i> +62 823456677
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
 <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="index.php" class="scrollto">Anda<span>liman</span></a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">BERANDA</a></li>
        
          <li><a href="index.php#about">TENTANG</a></li>
          <li><a href="syaratinformasi.php">SYARAT INFORMASI</a></li>
          <li><a href="layanan.php">LAYANAN</a></li>
          <li><a href="Panduan1.php">PANDUAN</a></li>

           <?php 
                  $conn = mysqli_connect('localhost', 'root', '', 'dukcapil');?>
                <?php if(isset($_SESSION['id_penduduk']))
                {
                  $id_penduduk = $_SESSION['id_penduduk'];
                  $queryUser = mysqli_query($conn, "SELECT * FROM penduduk WHERE id_penduduk='$_SESSION[id_penduduk]'");
                   $arrayUser = mysqli_fetch_array($queryUser);
                  ?>
          <li><a href="riwayat.php">RIWAYAT PERMOHONAN</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
          <?php }else{ ?>
          <li><a href="login.php">LOGIN</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
      <?php } ?>
    </div>
  </header>