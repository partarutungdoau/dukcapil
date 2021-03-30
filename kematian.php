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
        <h2>Form Kematian</h2>

      </div>

      <div class="form">
      <?php
       echo '<form action="proses_kematian.php?id_penduduk='.$_SESSION['id_penduduk'].'" method="post" enctype="multipart/form-data">'; 
        ?>
        <h3>Data Jenazah</h3>
          <div class="first-row">



          <div class="form-row">
              <div class="form-group col-md-6">

                <label>NIK Jenazah</label>
                <input type="text" name="nik_jenazah"  class="form-control" required/>
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <label>Nama Jenazah</label>
                <input type="text" name="nama_jenazah" class="form-control" required />
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
                  <label>Tanggal Lahir</label>
                      <select name="tanggal_lahir">
                      <option selected="selected">Pilih</option>
                      <?php
                      for($a=1; $a<=31; $a+=1){
                          echo"<option value=$a> $a </option>";
                      }
                      ?>
                      </select>

                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Bulan</label>
                  <select name="bulan_lahir">
                    <option selected="selected">Bulan Lahir</option>
                    <?php
                    $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                    $jlh_bln=count($bulan);
                    for($c=0; $c<$jlh_bln; $c+=1){
                        echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                    }
                    ?>
                    </select>
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<label>Tahun Lahir</label>
                      <select name="tahun_lahir">
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
                <label>Umur</label>
                <input type="number" name="umur" class="form-control" required />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <label>Tempat Lahir</label>
                <input type="text" name="tpt_lahir" class="form-control" required />
                <div class="validation"></div>
              </div>
              
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                  <label>Tanggal Kematian</label>
                      <select name="tanggal_kematian">
                      <br>
                      <option selected="selected">Pilih</option>
                      <?php
                      for($a=1; $a<=31; $a+=1){
                          echo"<option value=$a> $a </option>";
                      }
                      ?>
                      </select>

            &nbsp;&nbsp; <label>Bulan Kematian</label>
                  <select name="bulan_kematian">
                    <option selected="selected">Bulan</option>
                    <?php
                    $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                    $jlh_bln=count($bulan);
                    for($c=0; $c<$jlh_bln; $c+=1){
                        echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                    }
                    ?>
                    </select>
                  &nbsp; &nbsp;<label>Tahun Kematian</label>
                     <select name="tahun_kematian">
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
                <label>Waktu Kematiian</label>
                <input type="time" name="waktu_kematian" class="form-control" required />
                <div class="validation"></div>
              </div>
              
            </div>


            <div class="form-row">
              <div class="form-group col-md-6">

                <label for="agama">Agama</label>
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
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" required />
                <div class="validation"></div>
              </div>
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
              </div>  

            <div class="form-row">
               <div class="form-group col-md-6">
                <label>Anak Ke</label>
                <input type="number" name="anak_ke" class="form-control" required />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="sebab_kematian">Sebab Kematian</label>
                <select name="sebab_kematian" id="sebab_kematian" class="form-control" required>
                  <option value="">-- Pilih --</option>
                  <?php
                    $sql_sebab_kematian = mysqli_query($koneksi, "SELECT * FROM sebab_kematian")or die (mysqli_error($koneksi));
                    while ($data_sebab_kematian = mysqli_fetch_array($sql_sebab_kematian)) {
                      echo '<option value="'.$data_sebab_kematian['idsebab_kematian'].'">'.$data_sebab_kematian['sebab_kematian'].'</option>';
                    }
                  ?>

                </select>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
            
              <div class="form-group col-md-6">
                <label>Tempat Kematian</label>
                <input type="text" name="tempat_kematian" class="form-control" required />
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
              <div class="form-group col-md-6">

                <label>NIK Ibu</label>
                <input type="text" name="nik_ibu" class="form-control" required/>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">

                <label>Nama Ibu</label>
                <input type="text" name="nama_ibu" class="form-control" required/>
                <div class="validation"></div>
              </div></div>
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
              <label>Surat Keterangan dari Dokter</label>
              <input type="file" name="sk_dari_dokter" class="form-control" required/>
              <div class="validation"></div>
            </div>

        </div>
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
              <label>Fotocopy ijazah SK</label>
              <input type="file" name="fc_ijazah_SK" class="form-control" required/>
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