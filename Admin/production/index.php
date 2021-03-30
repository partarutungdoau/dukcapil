<?php
    session_start();
    $connect = new mysqli("localhost","root","","dukcapil");

    if (!isset($_SESSION['operator'])){
        echo "<script>alert('Anda Harus Login ')</script>";
        echo "<script>location='login.php'</script>";
        header('location:login.php');
        exit();
    }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Andaliman Toba | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <link rel="icon" type="image/jpg" href="images/andaliman logo.png">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><span>Andaliman Toba</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['operator']['nama']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                  <li><a href=""><i class="fa fa-users"></i> Home<span></a>
                  <li><a><i class="fa fa-sitemap"></i> Layanan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="index.php?halaman=akta_kelahiran"> Permohonan Akta Kelahiran</a>
                        </li>
                        <li><a href="index.php?halaman=kartu_keluarga"> Permohonan Kartu Keluarga</a>
                        </li>
                        <li><a href="index.php?halaman=akta_kawin"> Permohonan Akta Perkawinan</a>
                        </li>
                        <li><a href="index.php?halaman=akta_perceraian"> Permohonan Akta Perceraian</a>
                        </li>
                        <li><a href="index.php?halaman=akta_kematian"> Permohonan Akta Kematian</a>
                        </li>
                        <li><a href="index.php?halaman=kedatangan"> Permohonan Pindah Datang</a>
                        </li>
                    </ul>
                  </li>
                  <li><a href="index.php?halaman=transaksi"><i class="fa fa-users"></i> Penduduk<span></a>
                  </li>         
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/img.jpg" alt=""><?php echo $_SESSION['operator']['nama']; ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->
        

        

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div id="page-inner">
              <?php
              if (isset($_GET['halaman'])) 
              {
                if($_GET['halaman']=="penduduk")
                {
                  include 'list_penduduk.php';
                }else if($_GET['halaman']=="kedatangan")
                {
                  include 'kedatangan/kedatangan.php';
                }else if($_GET['halaman']=="view_kedatangan")
                {
                  include 'kedatangan/view_kedatangan.php';
                }else if($_GET['halaman']=="Kartu_Keluarga")
                {
                  include 'permohonan_KartuKeluarga.php';
                }else if($_GET['halaman']=="akta_kelahiran")
                {
                  include 'akta_kelahiran.php';
                }else if($_GET['halaman']=="akta_kelahiran_disetujui")
                {
                  include 'cetak_akta_kelahiran/akta_kelahiran_disetujui.php';
                }else if($_GET['halaman']=="akta_kelahiran_ditolak")
                {
                  include 'cetak_akta_kelahiran/akta_kelahiran_ditolak.php';
                }else if($_GET['halaman']=="akta_kelahiran_selesai")
                {
                  include 'cetak_akta_kelahiran/akta_kelahiran_selesai.php';
                }
                else if($_GET['halaman']=="view_akta_kelahiran")
                {
                  include 'cetak_akta_kelahiran/view_akta_kelahiran.php';
                }else if($_GET['halaman']=="akta_kematian")
                {
                  include 'akta_kematian/akta_kematian.php';
                }else if($_GET['halaman']=="view_akta_kematian")
                {
                  include 'akta_kematian/view_akta_kematian.php';
                }else if($_GET['halaman']=="akta_kematian_disetujui")
                {
                  include 'akta_kematian/akta_kematian_disetujui.php';
                }else if($_GET['halaman']=="akta_kematian_ditolak")
                {
                  include 'akta_kematian/akta_kematian_ditolak.php';
                }else if($_GET['halaman']=="akta_kematian_selesai")
                {
                  include 'akta_kematian/akta_kematian_selesai.php';
                }else if($_GET['halaman']=="akta_kawin")
                {
                  include 'akta_pernikahan/akta_pernikahan.php';
                }else if($_GET['halaman']=="akta_kawin_disetujui")
                {
                  include 'akta_pernikahan/akta_pernikahan_disetujui.php';
                }else if($_GET['halaman']=="akta_kawin_diolak")
                {
                  include 'akta_pernikahan/akta_pernikahan_ditolak.php';
                }else if($_GET['halaman']=="akta_kawin_selesai")
                {
                  include 'akta_pernikahan/akta_pernikahan_selesai.php';
                }else if($_GET['halaman']=="view_akta_kawin")
                {
                  include 'akta_pernikahan/view_akta_kawin.php';
                }else if($_GET['halaman']=="akta_perceraian")
                {
                  include 'akta_perceraian/akta_perceraian.php';
                }else if($_GET['halaman']=="akta_perceraian_disetujui")
                {
                  include 'akta_perceraian/akta_perceraian_disetujui.php';
                }else if($_GET['halaman']=="akta_perceraian_ditolak")
                {
                  include 'akta_perceraian/akta_perceraian_ditolak.php';
                }else if($_GET['halaman']=="akta_perceraian_selesai")
                {
                  include 'akta_perceraian/akta_perceraian_selesai.php';
                }else if($_GET['halaman']=="view_akta_perceraian")
                {
                  include 'akta_perceraian/view_akta_perceraian.php';
                }else if($_GET['halaman']=="kartu_keluarga")
                {
                  include 'kartu_keluarga/kartu_keluarga.php';
                }else if($_GET['halaman']=="kartu_keluarga_disetujui")
                {
                  include 'kartu_keluarga/kartu_keluarga_disetujui.php';
                }else if($_GET['halaman']=="kartu_keluarga_ditolak")
                {
                  include 'kartu_keluarga/kartu_keluarga_ditolak.php';
                }else if($_GET['halaman']=="view_kartu_keluarga")
                {
                  include 'kartu_keluarga/view_kartu_keluarga.php';
                }else if($_GET['halaman']=="send_email_kelahiran")
                {
                  include 'form_send_email_kelahiran.php';
                }else if($_GET['halaman']=="send_email_kematian")
                {
                  include 'form_send_email_kematian.php';
                }else if($_GET['halaman']=="send_email_perkawinan")
                {
                  include 'form_send_email_perkawinan.php';
                }else if($_GET['halaman']=="send_email_perceraian")
                {
                  include 'form_send_email_perceraian.php';
                }else if($_GET['halaman']=="send_email_kartu_keluarga")
                {
                  include 'form_send_email_kartu_keluarga.php';
                }else if($_GET['halaman']=="send_email_kedatangan")
                {
                  include 'form_send_email_kedatangan.php';
                }
              }else
              {
               include 'home.php';
              }
              ?>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>