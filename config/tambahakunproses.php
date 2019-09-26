<?php

	include 'koneksi.php';

	$nama_pegawai					= $_POST["nama_pegawai"];
	$jk_pegawai						= $_POST["jk_pegawai"];
	$tempatlahir_pegawai			= $_POST["tempatlahir_pegawai"];
	$tanggallahir_pegawai			= $_POST["tanggallahir_pegawai"];
	$agama_pegawai					= $_POST["agama_pegawai"];
	$alamat_pegawai					= $_POST["alamat_pegawai"];
	$nohp_pegawai					= $_POST["nohp_pegawai"];
	$username						= $_POST["username"];
	$password 						= md5($_POST['password']);
	$level							= $_POST["level"];



	$tambah	= "INSERT INTO pegawai VALUES ('', '$nama_pegawai', '$jk_pegawai', '$tempatlahir_pegawai','$tanggallahir_pegawai','$agama_pegawai', '$alamat_pegawai','$nohp_pegawai', '$username', '$password', '$level')";

	$masuk = mysqli_query($konek,$tambah)or die(mysqli_error($konek));

if ($masuk){
	echo "<br><br><br><strong><center><i>Data Berhasil Di Simpan!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/homeadmin.php?konten=datapegawai">';  
}
else
 {
 
 	echo 'GAGAL';
 }

?>