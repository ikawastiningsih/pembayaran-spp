 <?php

	include 'koneksi.php';

    $id_pegawai               = $_POST['id_pegawai'];
	$nama_pegawai             = $_POST['nama_pegawai'];
    $jk_pegawai               = $_POST['jk_pegawai'];
    $tempatlahir_pegawai      = $_POST['tempatlahir_pegawai'];
    $tanggallahir_pegawai     = $_POST['tanggallahir_pegawai'];
    $agama_pegawai            = $_POST['agama_pegawai'];
    $alamat_pegawai           = $_POST['alamat_pegawai'];
    $nohp_pegawai             = $_POST['nohp_pegawai'];
	$username 		          = $_POST['username'];
	$password	 	          = $_POST['password'];


	$edit 	    = "UPDATE pegawai SET nama_pegawai='$nama_pegawai', jk_pegawai='$jk_pegawai', tempatlahir_pegawai='$tempatlahir_pegawai', tanggallahir_pegawai='$tanggallahir_pegawai', agama_pegawai='$agama_pegawai', alamat_pegawai='$alamat_pegawai', nohp_pegawai='$nohp_pegawai', username='$username', password='$password' WHERE id_pegawai='$id_pegawai'";
	$editakun	= mysqli_query($konek, $edit)or die(mysqli_error());

	if ($editakun)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/homeadmin.php?konten=datapegawai">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Maaf, Data tidak berhasil diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>