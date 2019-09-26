<?php

	include 'koneksi.php';

	$total_spp							= $_POST["total_spp"];
	

	$tambah	= "INSERT INTO spp_master VALUES ('', '$total_spp')";

	$masuk = mysqli_query($konek,$tambah)or die(mysqli_error($konek));

if ($masuk){
	echo "<br><br><br><strong><center><i>Data Berhasil Di Simpan!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=tambahspp">';  
}
else
 {
 	echo 'GAGAL';
 }

?>