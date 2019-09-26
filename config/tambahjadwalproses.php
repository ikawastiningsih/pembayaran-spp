<?php

	include 'koneksi.php';

	$nama_pegawai					= $_POST["nama_pegawai"];
	$mata_pelajaran					= $_POST["mata_pelajaran"];
	$kelas_mengajar					= $_POST["kelas_mengajar"];
	$hari_mengajar					= $_POST["hari_mengajar"];
	$waktu_mengajar					= $_POST["waktu_mengajar"];


	$tambah	= "INSERT INTO jadwalguru VALUES ('', '$id_pegawai', '$nama_pegawai', '$mata_pelajaran', '$kelas_mengajar', '$hari_mengajar', '$waktu_mengajar')";

	$masuk = mysqli_query($konek,$tambah)or die(mysqli_error($konek));

if ($masuk){
	echo "<br><br><br><strong><center><i>Data Berhasil Di Simpan!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=jadwalguru">';  
}
else
 {
 
 	echo 'GAGAL';
 }

?>