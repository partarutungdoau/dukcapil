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
<?php
include 'koneksi.php';
?>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
  <section id="services">
    <div class="container">
      <div class="section-header">
        <h2>Form Request Surat Kedatangan</h2>


      </div>

      <div class="form">
  
      <?php
       echo '<form action="kedatangan_proses.php?id_penduduk='.$_SESSION['id_penduduk'].'" method="post" enctype="multipart/form-data">'; 
        ?>
          <div class="first-row">



            <div class="form-row">



              <div class="form-group col-md-6">
                <label for="jenis_permohonan">Jenis Permohonan</label>
                <select name="jenis_permohonan" id="jenis_permohonan" class="form-control" required>
                  <option value="">-- Pilih --</option>
                  <?php
                  $sql_jns_permohonan = mysqli_query($koneksi, "SELECT * FROM jenis_permohonan")or die (mysqli_error($koneksi));
                  while ($data_jns_permohonan = mysqli_fetch_array($sql_jns_permohonan)) {
                    echo '<option value="'.$data_jns_permohonan['jenis_permohonan_id'].'">'.$data_jns_permohonan['jenis_permohonan'].'</option>';
                  }
                  ?>

                </select>
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
              <label>Alamat Asal</label>
              <input type="text" name="alamat_asal" class="form-control" required/>
              <div class="validation"></div>
            </div>
         </div>

          <div class="form-row">
            <div class="form-group col-md-6">

              <label>Alasan Pindah</label>
              <select name="alasan_pindah" id="alasan_pindah" class="form-control" required>
                <option value="">-- Pilih --</option>
                <?php
                $sqalasan_pindah = mysqli_query($koneksi, "SELECT * FROM alasan_pindah")or die (mysqli_error($koneksi));
                while ($datalasan_pindah = mysqli_fetch_array($sqalasan_pindah)) {
                  echo '<option value="'.$datalasan_pindah['alasan_pindah_id'].'">'.$datalasan_pindah['alasan_pindah'].'</option>';
                }
                ?>

              </select>
              <div class="validation"></div>
            </div>

            <div class="form-group col-md-6">

              <label>Tanggal Datang</label>
              <input type="date" name="tgl_datang" class="form-control" required/>
              <div class="validation"></div>
            </div></div>
            <div class="form-row">
              <div class="form-group col-md-6">
               <label>Jumlah Anggota Keluarga yg Pindah</label>
               <input type="number" name="jlh_anggota_keluarga" class="form-control" required/>
               <div class="validation"></div>
             </div>
             <div class="form-group col-md-6">
               <label>Nomor Kartu Keluarga</label>
               <input type="number" name="no_KK" class="form-control" required/>
               <div class="validation"></div>
             </div>

             

           </div>
           <div class="form-row">
            <div class="form-group col-md-6">
             <label>Jenis Kepindahan</label>
             <select name="jenis_kepindahan" id="jenis_kepindahan" class="form-control" required>
              <option value="">-- Pilih --</option>
              <?php
              $sql_jns_kepindahan = mysqli_query($koneksi, "SELECT * FROM jenis_kepindahan")or die (mysqli_error($koneksi));
              while ($data_jns_kepindahan = mysqli_fetch_array($sql_jns_kepindahan)) {
                echo '<option value="'.$data_jns_kepindahan['jenis_kepindahan_id'].'">'.$data_jns_kepindahan['jenis_kepindahan'].'</option>';
              }
              ?>

            </select>
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-6">
            <label>Klasifikasi Perpindahan</label>
            <select name="klasifikasi_perpindahan" id="klasifikasi_perpindahan" class="form-control" required>
              <option value="">-- Pilih --</option>
              <?php
              $sql_kls_kepindahan = mysqli_query($koneksi, "SELECT * FROM klasifikasi_perpindahan")or die (mysqli_error($koneksi));
              while ($data_kls_kepindahan = mysqli_fetch_array($sql_kls_kepindahan)) {
                echo '<option value="'.$data_kls_kepindahan['klasifikasi_perpindahan_id'].'">'.$data_kls_kepindahan['klasifikasi_perpindahan'].'</option>';
              }
              ?>

            </select>
            <div class="validation"></div>
          </div>



        </div>

        <div class="form-row">
          <div class="form-group col-md-6">

            <label>Nomor Pindah</label>
            <input type="text" name="no_pindah" class="form-control" required/>
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-6">
              <label>Alamat Tujuan</label>
              <input type="text" name="alamat_tujuan" class="form-control" required/>
              <div class="validation"></div>
            </div>

        </div>
        <br>
        <br>
               <h3>Data Administrasi</h3>

        <div class="form-row">
          <div class="form-group col-md-6">
              <label>Fotocopy KTP</label>
              <input type="file" name="fc_ktp" class="form-control" required/>
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <label>Fotocopy KK</label>
              <input type="file" name="fc_kk" class="form-control" required/>
              <div class="validation"></div>
            </div>

        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
              <label>Surat Pengantar</label>
              <input type="file" name="surat_pengantar" class="form-control" required/>
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <label>Foto Berwarna 3x4</label>
              <input type="file" name="foto_berwarna" class="form-control" required/>
              <div class="validation"></div>
            </div>
            </div>
            



        <br>

        <input type="submit" name="selanjutnya" value="Selanjutnya" class="btn btn-success btn-lg">
      </form>
    </div></div>
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
