<?php

	include 'koneksi.php';

	$id_siswa = $_GET ['id_siswa'];

	$hapus 	 = "DELETE FROM datasiswa WHERE id_siswa='$id_siswa'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../home.php'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Tidak Berhasil Dihapus!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>