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
        <h2>Form Request Akta kelahiran</h2>
        <h3>Data Bayi</h3>

      </div>

      <div class="form">
        <?php
       echo '<form action="proses_kelahiran.php?id_penduduk='.$_SESSION['id_penduduk'].'" method="post" enctype="multipart/form-data">'; 
        ?>

        <div class="form-row">
                  <div class="form-group col-md-6">
                 <label>No Kartu Keluarga</label>
                  <input type="number" name="no_kk" class="form-control" required/>
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                 <label>Nama Kepala Keluarga</label>
                  <input type="text" name="nama_kepala_keluarga" class="form-control" required/>
                  <div class="validation"></div>
                </div>

             
              </div>

          <div class="first-row">



            <div class="form-row">
              <div class="form-group col-md-6">

                <label>Nama Lengkap Bayi</label>
                <input type="text" name="nama_lengkap_bayi" class="form-control" required/>
                <div class="validation"></div>
              </div>

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
              </div></div>

              <div class="form-row">
                  <div class="form-group col-md-6">
                 <label for="tempal_dilahirkan">Tempat Dilahirkan</label>
                  <select name="tempat_dilahirkan" id="tempat_dilahirkan" class="form-control" required>
                  <option value="">-- Pilih --</option>
                  <?php
                    $sql_tempat_dilahirkan = mysqli_query($koneksi, "SELECT * FROM tempat_dilahirkan")or die (mysqli_error($koneksi));
                    while ($data_tempat_dilahirkan = mysqli_fetch_array($sql_tempat_dilahirkan)) {
                      echo '<option value="'.$data_tempat_dilahirkan['idtempat_dilahirkan'].'">'.$data_tempat_dilahirkan['tempat_dilahirkan'].'</option>';
                    }
                  ?>

                </select>
                  <div class="validation"></div>
                </div>
                
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">

                  <label>Tempat Lahir</label>
                  <input type="text" name="tpt_lahir" class="form-control" required/>
                  <div class="validation"></div>
                </div>

                <div class="form-group col-md-6">

                  <label>Hari</label>
                  <input type="text" name="hari" class="form-control" required/>
                  <div class="validation"></div>
                </div></div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                  <label>Tanggal</label>
                      <select name="tanggal">
                      <option selected="selected">Pilih</option>
                      <?php
                      for($a=1; $a<=31; $a+=1){
                          echo"<option value=$a> $a </option>";
                      }
                      ?>
                      </select>

                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Bulan</label>
                  <select name="bulan">
                    <option selected="selected">Bulan</option>
                    <?php
                    $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                    $jlh_bln=count($bulan);
                    for($c=0; $c<$jlh_bln; $c+=1){
                        echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                    }
                    ?>
                    </select>
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<label>Tahun</label>
                        <select name="tahun">
                  <option selected="selected">Tahun</option>
                    <?php
                      for($i=date('Y'); $i>=date('Y')-80; $i-=1){
                      echo"<option value='$i'> $i </option>";
                      }
                    ?>
                </select>
                      <div class="validation"></div>

                 </div>
                <div class="form-group col-md-6">
                 <label>Pukul</label>
                  <input type="time" name="pukul" class="form-control" required/>
                  <div class="validation"></div>
                </div>   
                
              </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                 <label>Berat Bayi</label>
                  <input type="text" name="berat" class="form-control" required/>
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                 <label>Panjang Bayi</label>
                  <input type="text" name="panjang" class="form-control" required/>
                  <div class="validation"></div>
                </div>
              </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                 <label>Anak Ke</label>
                  <input type="number" name="anak_ke" class="form-control" required/>
                  <div class="validation"></div>
                </div>
              </div>
              <br>
              <br>
              <h3>Data Ayah dan Ibu</h3>
          <div class="form-row">
              <div class="form-group col-md-6">

                <label>NIK Ayah</label>
                <input type="text" name="nik_ayah" class="form-control" required/>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">

                <label>Nama Ayah</label>
                <input type="text" name="nama_ayah" class="form-control" required/>
                <div class="validation"></div>
              </div></div>

            <div class="form-row">
              <div class="form-group col-md-6">Pekerjaan Ayah</label>
                  <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control" required>
                  <option value="">-- Pilih --</option>
                  <?php
                    $sql_pekerjaan_ayah = mysqli_query($koneksi, "SELECT * FROM pekerjaan")or die (mysqli_error($koneksi));
                    while ($data_pekerjaan_ayah = mysqli_fetch_array($sql_pekerjaan_ayah)) {
                      echo '<option value="'.$data_pekerjaan_ayah['idpekerjaan'].'">'.$data_pekerjaan_ayah['pekerjaan'].'</option>';
                    }
                  ?>

                </select>
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <label>NIK Ibu</label>
                  <input type="text" name="nik_ibu" class="form-control" required/>
                  <div class="validation"></div>
                </div>
              </div>

                <div class="form-row">

                <div class="form-group col-md-6">
                  <label>Nama Ibu</label>
                  <input type="text" name="nama_ibu" class="form-control" required/>
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">Pekerjaan Ibu</label>
                  <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control" required>
                  <option value="">-- Pilih --</option>
                  <?php
                    $sql_pekerjaan_ibu = mysqli_query($koneksi, "SELECT * FROM pekerjaan")or die (mysqli_error($koneksi));
                    while ($data_pekerjaan_ibu= mysqli_fetch_array($sql_pekerjaan_ibu)) {
                      echo '<option value="'.$data_pekerjaan_ayah['idpekerjaan'].'">'.$data_pekerjaan_ibu['pekerjaan'].'</option>';
                    }
                  ?>
                </select>
                  <div class="validation"></div>
                </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">

                  <label>Alamat Orang tua</label>
                  <input type="text" name="alamat" class="form-control" required/>
                  <div class="validation"></div>
                </div>
                </div>
                <br>
              <br>
              <!-- <h3>Data Pelapor</h3>
              <div class="form-row">
              <div class="form-group col-md-6">

                <label>NIK Pelapor</label>
                <input type="text" name="nik_pelapor" class="form-control" required/>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">

                <label>Nama Pelapor</label>
                <input type="text" name="nama_pelapor" class="form-control" required/>
                <div class="validation"></div>
              </div></div>

              <div class="form-row">
              <div class="form-group col-md-6">

                <label>Alamat Pelapor</label>
                <input type="text" name="nik_pelapor" class="form-control" required/>
                <div class="validation"></div>
              </div>

          </div> -->

<h3>Data Saksi</h3>
              <div class="form-row">
              <div class="form-group col-md-6">

                <label>NIK Saksi 1</label>
                <input type="text" name="nik_saksi1" class="form-control" required/>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">

                <label>Nama Saksi 1</label>
                <input type="text" name="nama_saksi1" class="form-control" required/>
                <div class="validation"></div>
              </div></div>

              <div class="form-row">
             
                <div class="form-group col-md-6">

                <label>NIK Saksi 2</label>
                <input type="text" name="nik_saksi2" class="form-control" required/>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">

                <label>Nama Saksi 2</label>
                <input type="text" name="nama_saksi2" class="form-control" required/>
                <div class="validation"></div>
              </div>
          </div>
<br>
<br>
          <h3>Data Administrasi</h3>

        <div class="form-row">
          <div class="form-group col-md-6">
              <label>fotocopy Surat Nikah</label>
              <input type="file" name="fc_surat_nikah" class="form-control" required/>
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <label>Surat Kelahiran Bidan</label>
              <input type="file" name="surat_kelahiran_bidan" class="form-control" required/>
              <div class="validation"></div>
            </div>

        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
              <label>Fotocopy KK Orang tua</label>
              <input type="file" name="fc_kk_ortu" class="form-control" required/>
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <label>Fotocopy KTP saksi 1</label>
              <input type="file" name="fc_ktp_saksi1" class="form-control" required/>
              <div class="validation"></div>
            </div>

        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
              <label>Fotocopy KTP saksi 2</label>
              <input type="file" name="fc_ktp_saksi2" class="form-control" required/>
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
