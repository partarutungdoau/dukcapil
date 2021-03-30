<?php 
  session_start();
  require('../koneksi.php');
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
				$jekel = $_POST['jenis_kelamin'];
				$status = $_POST['status_penduduk'];
				$kelurahan =  $_POST['kelurahan'];
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
					$koneksi->query("INSERT INTO penduduk(nik,password,no_KK,email,nama,no_hp,idjenis_kelamin,tmpt_lahir,tgl_lahir,idstatus_penduduk,idDesa_kel,alamat) VALUES ('$nik', '$password', '$no_KK','$email','$nama', '$no_hp', '$jekel', '$tmpt_lahir', '$tgl_lahir', '$status', '$kelurahan', '$alamat')");

					echo "<script>window.location='login.php';</script>";

				}

			}
		?>