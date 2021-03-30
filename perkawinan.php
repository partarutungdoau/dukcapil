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
        <h2>Form Perkawinan</h2>

      </div>

      <div class="form">

     <?php
       echo '<form action="proses_perkawinan.php?id_penduduk='.$_SESSION['id_penduduk'].'" method="post" enctype="multipart/form-data">'; 
        ?>
          <h3>Data Suami</h3>
          <div class="first-row">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>NIK Suami</label>
                <input type="text" name="nik_suami" class="form-control" required/>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">
                <label for="pekerjaan">Nama Suami</label>
                <input type="text" name="nama_suami" class="form-control" required/>
                <div class="validation"></div>
              </div>
          </div>

            <div class="first-row">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Tempat Lahir Suami</label>
                <input type="text" name="tpt_lahir_suami" class="form-control" required/>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">
                <label for="pekerjaan">Tanggal Lahir Suami</label>
               <input type="date" name="tgl_lahir_suami" class="form-control" required/>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
                  <div class="form-group col-md-6">
                <label for="pekerjaan">Pekerjaan</label>
                
                <select name="pekerjaan_suami" id="pekerjaan_suami" class="form-control" required>
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
                <div class="form-group col-md-6">
                <label for="kewarganegaraan_suami">Kewarganegaraan</label>
                <select name="kewarganegaraan_suami" id="kewarganegaraan_suami" class="form-control" required>
                  <option value="">-- Pilih --</option>
                  <?php
                    $sql_kewarganegaraan_ayah = mysqli_query($koneksi, "SELECT * FROM kewarganegaraan")or die (mysqli_error($koneksi));
                    while ($data_kewarganegaraan_ayah = mysqli_fetch_array($sql_kewarganegaraan_ayah)) {
                      echo '<option value="'.$data_kewarganegaraan_ayah['idkewarganegaraan'].'">'.$data_kewarganegaraan_ayah['kewarganegaraan'].'</option>';
                    }
                  ?>

                </select>
                <div class="validation"></div>
              </div>
                            
              </div>

<br>
<h3>Data Istri</h3>
            <div class="first-row">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>NIK Istri</label>
                <input type="text" name="nik_istri" class="form-control" required/>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">
                <label for="pekerjaan">Nama Istri</label>
                <input type="text" name="nama_istri" class="form-control" required/>
                <div class="validation"></div>
              </div>
          </div>

            <div class="form-row">
             <div class="form-group col-md-6">
                <label>Tempat Lahir Istri</label>
                <input type="text" name="tpt_lahir_istri" class="form-control" required />
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">
                <label>Tanggal Lahir Istri</label>
                <input type="date" name="tgl_lahir_istri" class="form-control" required />
                <div class="validation"></div>
              </div>

            </div>
            <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="pekerjaan_istri">Pekerjaan</label>

                    <select name="pekerjaan_istri" id="pekerjaan_istri" class="form-control" required>
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
                <div class="form-group col-md-6">
                <label for="kewarganegaraan_istri">Kewarganegaraan</label>
                <select name="kewarganegaraan_istri" id="kewarganegaraan_istri" class="form-control" required>
                  <option value="">-- Pilih --</option>
                  <?php
                    $sql_kewarganegaraan_ibu = mysqli_query($koneksi, "SELECT * FROM kewarganegaraan")or die (mysqli_error($koneksi));
                    while ($data_kewarganegaraan_ibu = mysqli_fetch_array($sql_kewarganegaraan_ibu)) {
                      echo '<option value="'.$data_kewarganegaraan_ibu['idkewarganegaraan'].'">'.$data_kewarganegaraan_ibu['kewarganegaraan'].'</option>';
                    }
                  ?>

                </select>
                <div class="validation"></div>
              </div>

              
                
              </div>
              <br>
              <br>
              <h3>Data Perkawinan</h3>
            <div class="form-row">
             <div class="form-group col-md-6">
                  <label>Tanggal Pemberkatan</label>
                      <select name="tanggal_pemberkatan">
                      <option selected="selected">Pilih</option>
                      <?php
                      for($a=1; $a<=31; $a+=1){
                          echo"<option value=$a> $a </option>";
                      }
                      ?>
                      </select>

                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Bulan Pemberkatan</label>
                  <select name="bulan_pemberkatan">
                    <option selected="selected">Bulan</option>
                    <?php
                    $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                    $jlh_bln=count($bulan);
                    for($c=0; $c<$jlh_bln; $c+=1){
                        echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                    }
                    ?>
                    </select>
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<label>Tahun Pemberkatan</label>&nbsp;&nbsp;
                      <select name="tahun_pemberkatan">
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
                <label>Nama Badan Peradilan</label>
                <input type="text" name="nama_peradilan" class="form-control" required />
                <div class="validation"></div>
              </div>
            </div>

          <div class="form-row">
             <div class="form-group col-md-6">
                <label>Nomor Putusan Peradilan</label>
                <input type="text" name="no_putusan" class="form-control" required />
                <div class="validation"></div>
              </div>
              
              <div class="form-group col-md-6">
                <label>Tanggal Putusan Peradilan</label>
                <input type="date" name="tgl_putusan" class="form-control" required />
                <div class="validation"></div>
              </div>

            </div>
            <div class="form-row">
             <div class="form-group col-md-6">
                <label>Nama Pemuka Agama</label>
                <input type="text" name="nama_pemuka_agama" class="form-control" required />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                  <label>Tanggal Pelaporan</label>
                      <select name="tanggal_pendaftaran">
                      <option selected="selected">Pilih</option>
                      <?php
                      for($a=1; $a<=31; $a+=1){
                          echo"<option value=$a> $a </option>";
                      }
                      ?>
                      </select>

                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Bulan Pelaporan</label>
                  <select name="bulan_pendaftaran">
                    <option selected="selected">Bulan</option>
                    <?php
                    $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                    $jlh_bln=count($bulan);
                    for($c=0; $c<$jlh_bln; $c+=1){
                        echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                    }
                    ?>
                    </select>
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<label>Tahun Pelaporan</label> &nbsp;&nbsp;
                     <select name="tahun_pendaftaran">
                  <option selected="selected">Tahun</option>
                    <?php
                      for($i=date('Y'); $i>=date('Y')-80; $i-=1){
                      echo"<option value='$i'> $i </option>";
                      }
                    ?>
                </select>
                      <div class="validation"></div>

                 </div>
            </div>
            <div class="form-row">
             <div class="form-group col-md-6">
                <label>Agama</label>
               <select name="agama" id="agama" class="form-control" required>
                     <option value="">-- Pilih --</option>
                  <?php
                  $sql_agama = mysqli_query($koneksi, "SELECT * FROM agama")or die (mysqli_error($koneksi));
                  while ($data_agama = mysqli_fetch_array($sql_agama)) {
                    echo '<option value="'.$data_agama['idagama'].'">'.$data_agama['agama'].'</option>';
                  }
                  ?>

                  </select>
                <div class="validation"></div>
              </div>
            </div>
<br>
<br>
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
              <label>Surat Pengantar</label>
              <input type="file" name="surat_pengantar" class="form-control" required/>
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <label>Fotocopy Surat Bukti Pemberkatan Nikah</label>
              <input type="file" name="fc_surat_bukti_pemberkatan_perkawinan" class="form-control" required/>
              <div class="validation"></div>
            </div>

        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
              <label>Fotocopy KTP</label>
              <input type="file" name="fc_ktp_yg_bersangkutan" class="form-control" required/>
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
              <label>Fotocopy ijazah SK</label>
              <input type="file" name="fc_akta_kelahiran_yang_bersangkutan" class="form-control" required/>
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <label>Foto 4x6</label>
              <input type="file" name="fptp_yg_bersangkutan" class="form-control" required/>
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