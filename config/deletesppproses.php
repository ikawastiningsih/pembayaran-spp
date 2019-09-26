<?php

	include 'koneksi.php';

	$id_sppmaster = $_GET ['id_sppmaster'];

	$hapus 	 = "DELETE FROM spp_master WHERE id_sppmaster='$id_sppmaster'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	  echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../home.php?konten=tambahspp'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Tidak Berhasil Dihapus!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>