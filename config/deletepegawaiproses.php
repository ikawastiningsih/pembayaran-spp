<?php

	include 'koneksi.php';

	$id_pegawai = $_GET ['id_pegawai'];

	$hapus 	 = "DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/homeadmin.php?konten=datapegawai'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Tidak Berhasil Dihapus!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>