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

  </head>

  <body id="body">
<?php include('header.php');
    ?>

  <section id="services">
    <div class="container">
      <div class="section-header">
        <h2>Form Request Perceraian</h2>
        <h4>Data Suami Perceraian</h4>

      </div>

      <div class="form">
        <?php
       echo '<form action="proses_perceraian.php?id_penduduk='.$_SESSION['id_penduduk'].'" method="post" enctype="multipart/form-data">'; 
        ?>

          <div class="first-row">



            <div class="form-row">
              <div class="form-group col-md-6">

                <label>NIK</label>
                <input type="text" name="nik_suami" class="form-control" required/>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">

                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap_suami" class="form-control" required/>
                <div class="validation"></div>
              </div></div>

              <div class="form-row">
                <div class="form-group col-md-6">

                  <label>Tempat Lahir</label>
                  <input type="text" name="tpt_lahir_suami" class="form-control" required/>
                  <div class="validation"></div>
                </div>

                <div class="form-group col-md-6">

                  <label>Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir_suami" class="form-control" required/>
                  <div class="validation"></div>
                </div></div>
                <div class="form-row">
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
              <h4>Data Istri Perceraian</h4><br>
                         <div class="form-row">
              <div class="form-group col-md-6">

                <label>NIK</label>
                <input type="text" name="nik_istri" class="form-control" required/>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">

                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap_istri" class="form-control" required/>
                <div class="validation"></div>
              </div></div>

              <div class="form-row">
                <div class="form-group col-md-6">

                  <label>Tempat Lahir</label>
                  <input type="text" name="tpt_lahir_istri" class="form-control" required/>
                  <div class="validation"></div>
                </div>

                <div class="form-group col-md-6">

                  <label>Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir_istri" class="form-control" required/>
                  <div class="validation"></div>
                </div></div>
                <div class="form-row">
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
          <h4>Data Pengajuan Perceraian</h4>
           <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="yg_mengajukan_perceraian">Yang Mengajukan Perceraian</label>

                    <select name="yg_mengajukan_perceraian" id="yg_mengajukan_perceraian" class="form-control" required>
                     <option value="">-- Pilih --</option>
                  <?php
                  $sql_yg_mengajukan_perceraian = mysqli_query($koneksi, "SELECT * FROM yg_mengajukan_perceraian")or die (mysqli_error($koneksi));
                  while ($data_yg_mengajukan_perceraian = mysqli_fetch_array($sql_yg_mengajukan_perceraian)) {
                    echo '<option value="'.$data_yg_mengajukan_perceraian['idyg_mengajukan_perceraian'].'">'.$data_yg_mengajukan_perceraian['yg_mengajukan_perceraian'].'</option>';
                  }
                  ?>

                  </select>
                  <div class="validation"></div>
                </div>

                <div class="form-group col-md-6">

                  <label>Nomor Akta Perkawinan</label>
                  <input type="text" name="no_akta_perkawinan" class="form-control" required/>
                  <div class="validation"></div>
                </div>
                
              </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="sebab_percerai">Sebab Perceraian</label>

                    <select name="sebab_perceraian" id="sebab_perceraian" class="form-control" required>
                     <option value="">-- Pilih --</option>
                  <?php
                  $sql_sebab_perceraian = mysqli_query($koneksi, "SELECT * FROM sebab_perceraian")or die (mysqli_error($koneksi));
                  while ($data_sebab_perceraian = mysqli_fetch_array($sql_sebab_perceraian)) {
                    echo '<option value="'.$data_sebab_perceraian['idsebab_perceraian'].'">'.$data_sebab_perceraian['sebab_perceraian'].'</option>';
                  }
                  ?>

                  </select>
                  <div class="validation"></div>
                </div>

                <div class="form-group col-md-6">

                  <label>Nomor Putusan Pengadilan</label>
                  <input type="text" name="no_putusan_pengadilan" class="form-control" required/>
                  <div class="validation"></div>
                </div>
                
              </div>

              <div class="form-row">
              <div class="form-group col-md-6">
                  <label>Tanggal Putusan Pengadilan</label>
                      <select name="tanggal_putusan_pengadilan">
                      <option selected="selected">Pilih</option>
                      <?php
                      for($a=1; $a<=31; $a+=1){
                          echo"<option value=$a> $a </option>";
                      }
                      ?>
                      </select>

                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Bulan Putusan Pengadilan</label>
                  <select name="bulan_putusan_pengadilan">
                    <option selected="selected">Bulan</option>
                    <?php
                    $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                    $jlh_bln=count($bulan);
                    for($c=0; $c<$jlh_bln; $c+=1){
                        echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                    }
                    ?>
                    </select>
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<label>Tahun Putusan Pengadilan</label>
                      <select name="tahun_putusan_pengadilan">
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
                  <label>Tanggal Perkawinan</label>
                      <select name="tanggal_perkawinan">
                      <option selected="selected">Pilih</option>
                      <?php
                      for($a=1; $a<=31; $a+=1){
                          echo"<option value=$a> $a </option>";
                      }
                      ?>
                      </select>

                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Bulan Perkawinan</label>
                  <select name="bulan_perkawinan">
                    <option selected="selected">Bulan</option>
                    <?php
                    $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                    $jlh_bln=count($bulan);
                    for($c=0; $c<$jlh_bln; $c+=1){
                        echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                    }
                    ?>
                    </select>
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<label>Tahun Perkawinan</label>
                      <select name="tahun_perkawinan">
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

                <label>Nama Lembaga Peradilan</label>
                <input type="text" name="nama_lembaga_peradilan" class="form-control" required/>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">

                <label>Tempat Lembaga Peradilan</label>
                <input type="text" name="tpt_lembaga_peradilan" class="form-control" required/>
                <div class="validation"></div>
              </div></div>

              <div class="form-row">
              <div class="form-group col-md-6">
                    <label for="tingkat_peradilan">Tingkat Peradilan</label>

                    <select name="tingkat_peradilan" id="tingkat_peradilan" class="form-control" required>
                     <option value="">-- Pilih --</option>
                  <?php
                  $sql_tingkat_peradilan = mysqli_query($koneksi, "SELECT * FROM tgkt_peradilan_perkara")or die (mysqli_error($koneksi));
                  while ($data_tingkat_peradilan = mysqli_fetch_array($sql_tingkat_peradilan)) {
                    echo '<option value="'.$data_tingkat_peradilan['idtgkt_peradilan_perkara'].'">'.$data_tingkat_peradilan['tgkt_peradilan_perkara'].'</option>';
                  }
                  ?>

                  </select>
                  <div class="validation"></div>
                </div></div>
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

            <label>Surat Putusan Pengadilan</label>
            <input type="file" name="surat_putusan_pengadilan" class="form-control" required/>
            <div class="validation"></div>
          </div>
        </div>




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
