<?php
	
	include 'koneksi.php';

	$query = "UPDATE datasiswa SET kelas='XII' WHERE kelas = 'XI'";

		$editkelas	= mysqli_query($konek, $query)or die(mysqli_error($konek));

		if ($editkelas)
	    {
	    	echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
	    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=sebelas">';
	    }
		else {
	    	print"
	    		<script>
	    			alert(\"Maaf, Data tidak berhasil diubah!\");
	    			history.back(-1);
	    		</script>";
	    }

?>