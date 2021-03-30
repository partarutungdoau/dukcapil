<?php 
session_start();
  $conn = mysqli_connect('localhost', 'root', '', 'andaliman_toba2');

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
        <h2>Form Kartu Keluarga</h2>

      </div>

      <div class="form">

        <?php
       echo '<form action="proses_kartu_keluarga.php?id_penduduk='.$_SESSION['id_penduduk'].'" method="post" enctype="multipart/form-data">'; 
        ?>

          <div class="first-row">


            <div class="form-row">
              <div class="form-group col-md-6">

                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" required/>
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="pekerjaan">Pekerjaan</label>
                
                <select name="pekerjaan" id="pekerjaan" class="form-control" required>
                  <option value="">-- Pilih --</option>
                  <?php
                  $sql_pekerjaan = mysqli_query($koneksi, "SELECT * FROM pekerjaan")or die (mysqli_error($koneksi));
                  while ($data_pekerjaan = mysqli_fetch_array($sql_pekerjaan)) {
                    echo '<option value="'.$data_pekerjaan['idpekerjaan'].'">'.$data_pekerjaan['pekerjaan'].'</option>';
                  }
                  ?>

                </select>
                <div class="validation"></div>
              </div>
            </div>

            <div class="form-row">

              <div class="form-group col-md-6">

                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                  <option value="">-- Pilih --</option>
                  <?php
                  $sql_jns_kelamin = mysqli_query($koneksi, "SELECT * FROM jenis_kelamin")or die (mysqli_error($koneksi));
                  while ($data_jns_kelamin = mysqli_fetch_array($sql_jns_kelamin)) {
                    echo '<option value="'.$data_jns_kelamin['idjenis_kelamin'].'">'.$data_jns_kelamin['jenis_kelamin'].'</option>';
                  }
                  ?>

                </select>
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">

                <label for="agama">Agama</label>
                <select name="agama" id="agama" class="form-control" required>
                  <option value="">-- Pilih --</option>
                  <?php
                  $sql_agama = mysqli_query($koneksi, "SELECT * FROM agama")or die (mysqli_error($koneksi));
                  while ($data_agama= mysqli_fetch_array($sql_agama)) {
                    echo '<option value="'.$data_agama['idagama'].'">'.$data_agama['agama'].'</option>';
                  }
                  ?>

                </select>
                <div class="validation"></div>
              </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
                <label>Tempat Lahir</label>
                <input type="text" name="tpt_lahir" class="form-control" required />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <label>Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" required />
                <div class="validation"></div>
              </div>

              
            </div>
            

             <div class="form-row">
              <div class="form-group col-md-6">
                <label for="kewarganegaraan">Kewarganegaraan</label>
                <select name="kewarganegaraan" id="kewarganegaraan" class="form-control" required>
                  <option value="">-- Pilih --</option>
                  <?php
                    $sql_kewarganegaraan = mysqli_query($koneksi, "SELECT * FROM kewarganegaraan")or die (mysqli_error($koneksi));
                    while ($data_kewarganegaraan = mysqli_fetch_array($sql_kewarganegaraan)) {
                      echo '<option value="'.$data_kewarganegaraan['idkewarganegaraan'].'">'.$data_kewarganegaraan['kewarganegaraan'].'</option>';
                    }
                  ?>

                </select>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">
                <label>Nomor Akta Kelahiran</label>
                <input type="text" name="no_akta_lahir" class="form-control" required />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>Golongan Darah</label>
               <select name="gol_darah" id="gol_darah" class="form-control" required>
                     <option value="">-- Pilih --</option>
                  <?php
                  $sql_gol_darah = mysqli_query($koneksi, "SELECT * FROM gol_darah")or die (mysqli_error($koneksi));
                  while ($data_gol_darah = mysqli_fetch_array($sql_gol_darah)) {
                    echo '<option value="'.$data_gol_darah['idgol_darah'].'">'.$data_gol_darah['golongan_darah'].'</option>';
                  }
                  ?>

                  </select>
                <div class="validation"></div>
              </div>

                <div class="form-group col-md-6">

                <label for="status_perkawinan">Status Perkawinan</label>
                <select name="status_perkawinan" id="status_perkawinan" class="form-control" required>
                  <option value="">-- Pilih --</option>
                  <?php
                  $sql_status_perkawinan = mysqli_query($koneksi, "SELECT * FROM sts_perkawinan")or die (mysqli_error($koneksi));
                  while ($data_status_perkawinan= mysqli_fetch_array($sql_status_perkawinan)) {
                    echo '<option value="'.$data_status_perkawinan['idsts_perkawinan'].'">'.$data_status_perkawinan['status_perkawinan'].'</option>';
                  }
                  ?>

                </select>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Tanggal Perkawinan</label>
                <input type="date" name="tgl_perkawinan" class="form-control" required />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <label>Nomor Akta Perkawinan</label>
                <input type="text" name="nomor_akta_perkawinan" class="form-control" required />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Status Hubungan Keluarga</label>
                <input type="text" name="status_hubungan_keluarga" class="form-control" required />
                <div class="validation"></div>
              </div>
               <div class="form-group col-md-6">

                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control" required>
                  <option value="">-- Pilih --</option>
                  <?php
                  $sql_pendidikan_terakhir = mysqli_query($koneksi, "SELECT * FROM pendidikan_terakhir")or die (mysqli_error($koneksi));
                  while ($data_pendidikan_terakhir = mysqli_fetch_array($sql_pendidikan_terakhir)) {
                    echo '<option value="'.$data_pendidikan_terakhir['idpendidikan_terakhir'].'">'.$data_pendidikan_terakhir['pendidikan'].'</option>';
                  }
                  ?>

                </select>
                <div class="validation"></div>
              </div>
              
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>No Telepon</label>
                <input type="number" name="no_telepon" class="form-control" required />
                <div class="validation"></div>
              </div>
                <div class="form-group col-md-6">
                <label>Jumlah Anggota Keluarga</label>
                <input type="number" name="jlh_anggota_keluarga" class="form-control" required />
                <div class="validation"></div>
              </div>
              
            </div>
            <div class="form-row">
              
              <div class="form-group col-md-6">
                <label>Alamat lengkap</label>
                <input type="text" name="alamat_lengkap" class="form-control" required />
                <div class="validation"></div>
              </div>
            </div>

              <br>
        <br>
        <h3>Data Administrasi</h3>

        <div class="form-row">
          <div class="form-group col-md-6">

              <label>Surat Pengantar</label>
              <input type="file" name="surat_pengantar" class="form-control" required/>
              <div class="validation"></div>
            </div>
          </div>
          <div class="form-row">
          <div class="form-group col-md-6">
              <label>Fotocopy Akta Kelahiran</label>
              <input type="file" name="fc_akta_kelahiran" class="form-control" required/>
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <label>Fotocopy Akta Nikah</label>
              <input type="file" name="fc_akta_nikah" class="form-control" required/>
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