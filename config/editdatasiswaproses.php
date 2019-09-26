<?php

include 'koneksi.php';

	$id_siswa        				= $_POST['id_siswa'];
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

	$edit 	= "UPDATE datasiswa SET nis='$nis', nisn='$nisn', tahunajaran='$tahunajaran', nama_siswa='$nama_siswa', jk_siswa='$jk_siswa',kelas='$kelas', tempatlahir_siswa='$tempatlahir_siswa', tanggallahir_siswa='$tanggallahir_siswa', notelp_siswa='$notelp_siswa', alamat_siswa='$alamat_siswa', agama_siswa='$agama_siswa', namaayah_siswa='$namaayah_siswa', namaibu_siswa='$namaibu_siswa', no_un='$no_un', no_ijazah='$no_ijazah', total_spp='$total_spp' WHERE id_siswa='$id_siswa'";
	$editsiswa	= mysqli_query($konek, $edit)or die(mysqli_error());

	if ($editsiswa)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=home">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Maaf, Data tidak berhasil diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>