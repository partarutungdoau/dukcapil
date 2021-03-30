<?php
	include 'koneksi.php';
	$kecamatan = $_POST['kecamatan'];

	echo "<option value=''>Pilih Kelurahan</option>";

	$query = "SELECT * FROM desa_kel WHERE id_kec=? ORDER BY nama ASC";
	$dewan1 = $koneksi->prepare($query);
	$dewan1->bind_param("i", $kecamatan);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_kel'] . "'>" . $row['nama'] . "</option>";
	}
?>