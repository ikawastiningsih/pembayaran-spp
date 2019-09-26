<?php

	include 'koneksi.php';

	$id_ta = $_GET ['id_ta'];

	$hapus 	 = "DELETE FROM tahun_ajaran WHERE id_ta='$id_ta'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../home.php?konten=tambahta'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Tidak Berhasil Dihapus!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>