<?php

	include 'koneksi.php';

	$tahunajaran							= $_POST["tahunajaran"];
	$angkatan								= $_POST["angkatan"];
	$total_spp								= $_POST["total_spp"];

	$tambah	= "INSERT INTO tahun_ajaran VALUES ('', '$angkatan','$tahunajaran', '$total_spp')";

	$masuk = mysqli_query($konek,$tambah)or die(mysqli_error($konek));

if ($masuk){
	echo "<br><br><br><strong><center><i>Data Berhasil Di Simpan!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=tambahta">';  
}
else
 {
 	echo 'GAGAL';
 }

?>