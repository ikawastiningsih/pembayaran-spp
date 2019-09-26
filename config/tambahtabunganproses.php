<?php

	include 'koneksi.php';

	$id_siswa						= $_POST["id_siswa"];
	$nis							= $_POST["nis"];
	$nama_siswa						= $_POST["nama_siswa"];
	$kelas							= $_POST["kelas"];
	$jumlah							= $_POST["jumlah"];
	$tanggal_transaksi				= date('d-m-Y');
	
	switch($_REQUEST['tabungan']) {

    case 'tambah':
                
	$tambah	= "INSERT INTO tabungan VALUES ('', '$id_siswa', '$nis', '$nama_siswa', '$kelas', '$jumlah', '','$tanggal_transaksi')";

	$masuk = mysqli_query($konek,$tambah)or die(mysqli_error($konek));
	break;
}
	switch($_REQUEST['tabungan']) {

    case 'kurang':
                
	$tambah	= "INSERT INTO tabungan VALUES ('', '$id_siswa', '$nis', '$nama_siswa', '$kelas','','$jumlah', '$tanggal_transaksi')";

	$masuk = mysqli_query($konek,$tambah)or die(mysqli_error($konek));
	break;
}


	if ($masuk){
	echo "<br><br><br><strong><center><i>Data Berhasil Di Simpan!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php">';  
}
else
 {
 
 	echo 'GAGAL';
 }

?>