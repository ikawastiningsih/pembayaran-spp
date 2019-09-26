<?php

	include 'koneksi.php';

	$nis							= $_POST["nis"];
	$nisn							= $_POST["nisn"];
	$tahunajaran					= $_POST["tahunajaran"];
	$nama_siswa						= $_POST["nama_siswa"];
	$jk_siswa						= $_POST["jk_siswa"];
	$kelas							= $_POST["kelas"];
	$tempatlahir_siswa				= $_POST["tempatlahir_siswa"];
	$tanggallahir_siswa				= $_POST["tanggallahir_siswa"];
	$notelp_siswa					= $_POST["notelp_siswa"];
	$alamat_siswa					= $_POST["alamat_siswa"];
	$agama_siswa					= $_POST["agama_siswa"];
	$namaayah_siswa					= $_POST["namaayah_siswa"];
	$namaibu_siswa					= $_POST["namaibu_siswa"];
	$no_un							= $_POST["no_un"];
	$no_ijazah						= $_POST["no_ijazah"];
	$total_spp						= $_POST["total_spp"];

	$tambah	= "INSERT INTO datasiswa VALUES ('', '$nis', '$nisn', '$tahunajaran', '$nama_siswa', '$jk_siswa', '$kelas','$tempatlahir_siswa', '$tanggallahir_siswa', '$notelp_siswa', '$alamat_siswa', '$agama_siswa', '$namaayah_siswa', '$namaibu_siswa', '$no_un', '$no_ijazah', '$total_spp')";

	$masuk = mysqli_query($konek,$tambah)or die(mysqli_error($konek));

	//menampilkan data yang baru masuk dipaling akhir dari tabel datasiswa
	$select		= "SELECT * FROM datasiswa WHERE nis='$nis' ORDER BY id_siswa DESC LIMIT 1";
	$selectdb 	= mysqli_query($konek,$select)or die(mysqli_error($konek));
	$data 		= mysqli_fetch_array($selectdb);	

	echo "<META HTTP-EQUIV='REFRESH' CONTENT = '1; URL=../home.php?konten=tambahsiswabaru&&id_siswa=$data[id_siswa]&&nis=$data[nis]'>";

// if ($masuk){
	
// 	echo "<br><br><br><strong><center><i>Data Berhasil Di Simpan!";
	
	  
// }
// else
//  {
//  	echo 'GAGAL';
//  }

?>