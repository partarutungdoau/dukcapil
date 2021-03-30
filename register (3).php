			<?php
				include 'koneksi.php';
			?>

			<!DOCTYPE html>
			<html lang="en">
				<head>
					<meta charset="utf-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<title>Daftar | Capil Andaliman</title>

					<link rel="icon" type="image/png" href="img/.png">
					<link rel="stylesheet" href="css/febi.css">

					<!-- Bootstrap-->
					<link rel="stylesheet" href="css/animate.css">
					<link rel="stylesheet" href="css/font-awesome.css">
					<link rel="stylesheet" href="css/bootstrap.min.css" >
					<link rel="stylesheet" href="css/jquery.bxslider.css">
				</head>
				<body>
					<!-- Header-->
					
			<body background="img/background.jpg" style="background-size:cover;">
					<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
						<div class="form">

			 			<div class="first-row">
								<a href="index.php"><img src="img/anda.jpg" alt="login" class="icon-login"></a>
								<h2 class="first-login">DAFTAR AKUN</h2>
						  </div>
						  <div class="regisForm" >
								<form method="post"> 
									<div class="input-group">
											<input type="text" name="nik" class="form-control" placeholder="nik" required>
											<span class="input-group-addon">
									  		<span class="fa fa-user fa-fw"></span>
											</span>
									</div>
									<div class="input-group">
											<input type="password" name="password" class="form-control" placeholder="Password">
											<span class="input-group-addon">
											<span class="fa fa-key fa-fw"></span>
											</span>
								    </div>
									<div class="input-group">
											<input type="text" name="no_KK" class="form-control" placeholder="no.kk">
											<span class="input-group-addon">
											 <span class="fa fa-home fa-fw"></span>
											</span>
								    </div>
									 
								    <div class="input-group">
									 		<input type="email" name="email" class="form-control" placeholder="Email">
									 		<span class="input-group-addon">
											 <span class="fa fa-envelope fa-fw"></span>
									 		</span>
								    </div>
								    
								    <div class="input-group">
											<input type="text" name="nama" class="form-control" placeholder="nama">
											<span class="input-group-addon">
											<span class="fa fa-phone fa-fw"></span>
											</span>
								    </div>
								    <div class="input-group">
											<input type="number" name="no_Hp" class="form-control" placeholder="hp">
											<span class="input-group-addon">
											<span class="fa fa-phone fa-fw"></span>
											</span>
								    </div>
								    <div class="input-group">
											<select class="form-control" name="jenis_kelamin">
											<option value="">-Pilih Jenis Kelamin-</option>
													<?php $ambil=$koneksi->query("SELECT * FROM jenis_kelamin"); ?>
														<?php while($pecah = $ambil->fetch_assoc()){ 
														echo '<option value = "'. $pecah['idjenis_kelamin'].'">'.$pecah['jenis_kelamin'].'</option>';	
													}?>
											</select>	
											<span class="input-group-addon">
											<span class="fa fa-phone fa-fw"></span>
											</span>
								    </div>
								    <div class="input-group">
											<input type="text" name="tmpt_lahir" class="form-control" placeholder="tempat_lahir">
											<span class="input-group-addon">
											<span class="fa fa-phone fa-fw"></span>
											</span>
								    </div>
								    <div class="input-group">
											<input type="date" name="tgl_lahir" class="form-control" placeholder="tanggal_lahir">
											<span class="input-group-addon">
											<span class="fa fa-phone fa-fw"></span>
											</span>	
								    </div>
								    <div class="input-group">
											<select class="form-control" name="status_penduduk">
											<option value="">-Pilih Status Penduduk-</option>
													<?php $ambil=$koneksi->query("SELECT * FROM status_penduduk"); ?>
														<?php while($pecah = $ambil->fetch_assoc()){ 
														echo '<option value = "'. $pecah['	idstatus_penduduk'].'">'.$pecah['status_penduduk'].'</option>';	
													}?>
											</select>	


											<span class="input-group-addon">
											<span class="fa fa-phone fa-fw"></span>
											</span>
								    </div>


								    <div class="input-group">
										<select class="form-control" name="provinsi" id="provinsi">
											<option value=""> Pilih Provinsi</option>
										</select>	
										<span class="input-group-addon">
										<span class="fa fa-phone fa-fw"></span>
										</span>
								    </div>


								    <div class="input-group">
										<select class="form-control" name="kabupaten" id="kabupaten">
											<option value=""></option>
										</select>
											<span class="input-group-addon">
											<span class="fa fa-phone fa-fw"></span>
											</span>
								    </div>




								    <div class="input-group">
										<select class="form-control" name="kecamatan" id="kecamatan">
											<option value=""></option>
										</select>
											<span class="input-group-addon">
											<span class="fa fa-phone fa-fw"></span>
											</span>
								    </div>	

		




								    <div class="input-group">
											<select class="form-control" name="kelurahan" id="kelurahan">
												<option value=""></option>
											</select>
											<span class="input-group-addon">
											<span class="fa fa-phone fa-fw"></span>

											</span>
								    </div>
								    <div class="input-group">
											<input type="text" name="alamat" class="form-control" placeholder="alamat">
											<span class="input-group-addon">
											<span class="fa fa-phone fa-fw"></span>
											</span>
								    </div>
								  <br>
								<button type="submit" class="btn btn-lg login-btn" name="daftar">DAFTAR</button>
							</form>
						  </div>
					</div>


					<script src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
	          	$.ajax({
	                type: 'POST',
	                // url: "get_jeniskelamin.php",
	              	url: "get_provinsi.php",
	              	cache: false, 
	              	success: function(msg){
	                  $("#provinsi").html(msg);
	                }
	            });

	          	$("#provinsi").change(function(){
	          	var provinsi = $("#provinsi").val();
		          	$.ajax({
		          		type: 'POST',
		              	url: "get_kabupaten.php",
		              	data: {provinsi: provinsi},
		              	cache: false,
		              	success: function(msg){
		                  $("#kabupaten").html(msg);
		                }
		            });
	            });

	            $("#kabupaten").change(function(){
	          	var kabupaten = $("#kabupaten").val();
		          	$.ajax({
		          		type: 'POST',
		              	url: "get_kecamatan.php",
		              	data: {kabupaten: kabupaten},
		              	cache: false,
		              	success: function(msg){
		                  $("#kecamatan").html(msg);
		                }
		            });
	            });

	            $("#kecamatan").change(function(){
	          	var kecamatan = $("#kecamatan").val();
		          	$.ajax({
		          		type: 'POST',
		              	url: "get_kelurahan.php",
		              	data: {kecamatan: kecamatan},
		              	cache: false,
		              	success: function(msg){
		                  $("#kelurahan").html(msg);
		                }
		            });
	            });
	         });
		</script>

				</div>

			<?php
										//jika ada tombol daftar(tombol daftar ditekan)
										if (isset($_POST["daftar"]))
										 {
											//mengambil nama email,password, alamat, telp/Hp
											$nik = $_POST["nik"];
											$password = $_POST["password"];
											$no_KK = $_POST["no_KK"];
											$email = $_POST["email"];
											
											$nama = $_POST["nama"];
											$no_hp = $_POST["no_Hp"];
											 //$jenis_kelamin = $_POST["jenis_kelamin"];
											$tmpt_lahir = $_POST["tmpt_lahir"];
											$tgl_lahir = $_POST["tgl_lahir"];
											// $provinsi = $_POST["provinsi"];
											// $kabupaten = $_POST["kabupaten"];
											$jekel = explode("|", $_POST['jenis_kelamin']);
											$status = explode("|", $_POST['status_penduduk']);
											$provinsi = $_POST['provinsi'];
											$kabupaten = $_POST['kabupaten'];
											$kecamatan = $_POST['kecamatan'];
											$kelurahan = $_POST['kelurahan'];
											$alamat = $_POST["alamat"];	


											//cek apakan email sudah digunakan
											$ambil = $koneksi->query("SELECT * FROM penduduk WHERE email = '$email' ");
											$yangcocok = $ambil->num_rows;
											if ($yangcocok==1) 
											{
												echo "<script>alert('Pendaftaran Gagal, Karena email sudah digunakan');</script>";
												echo "<script>location='daftar.php';</script>";
											}
											else
											{
												//kita melakukan Query insert ke pelanggan
												$koneksi->query("INSERT INTO penduduk(nik,password,no_KK,email,nama,no_hp,idjenis_kelamin,tmpt_lahir,tgl_lahir,idstatus_penduduk,id_prov,id_kab,id_kec,id_kel,alamat) VALUES ('$nik', '$password', '$no_KK','$email','$nama', '$no_hp', '$jekel[0]', '$tmpt_lahir', '$tgl_lahir', '$status[0]', '$provinsi', '$kabupaten','$kecamatan' ,'$kelurahan', '$alamat')");

												echo "<script>alert('Pendaftaran anda sukses, Silahkan Login');</script>";
												echo "<script>location='login.php';</script>";
												//echo "var_dump($koneksi)";
											}

										}
									?>



				
			</body>
			</html>