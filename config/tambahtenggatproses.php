<?php

	include 'koneksi.php';

	$bulan								= $_POST["bulan"];
	$awal								= $_POST["awal"];
	$akhir								= $_POST["akhir"];

	$tambah	= "INSERT INTO tenggat VALUES ('', '$bulan','$awal', '$akhir')";

	$masuk = mysqli_query($konek,$tambah)or die(mysqli_error($konek));

if ($masuk){
	echo "<br><br><br><strong><center><i>Data Berhasil Di Simpan!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=tambahtanggal">';  
}
else
 {
 	echo 'GAGAL';
 }

?>