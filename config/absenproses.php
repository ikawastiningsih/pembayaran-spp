<?php
	
	include 'koneksi.php';

	date_default_timezone_set('Asia/Jakarta');

	$id_pegawai  		 = $_POST['id_pegawai'];
	$nama_pegawai		 = $_POST['nama_pegawai'];
	$tanggal_absensi	 = date("Y-m-d");
	$jam_absensi		 = date("H:i:s");	

	$query		= "INSERT INTO absensi VALUES ('','$id_pegawai','$nama_pegawai','$tanggal_absensi','$jam_absensi')";
	$insert 	= mysqli_query($konek,$query)or die(mysqli_error($konek));

if ($insert){
	echo "<br><br><br><strong><center><i>Anda Berhasil Absen!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../guru/homeguru.php">';  
}
else
 {
 
 	echo 'GAGAL';
 }

?>
?>