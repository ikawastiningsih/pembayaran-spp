<?php

include 'koneksi.php';

	$id_ta        				= $_POST['id_ta'];
	$tahunajaran        		= $_POST['tahunajaran'];
    $angkatan                   = $_POST["angkatan"];
    $total_spp                  = $_POST["total_spp"];

	$edit 	= "UPDATE tahun_ajaran SET angkatan = '$angkatan', tahunajaran = '$tahunajaran', total_spp = '$total_spp' WHERE id_ta='$id_ta'";
	$editta	= mysqli_query($konek, $edit)or die(mysqli_error());

	if ($editta)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=tambahta">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Maaf, Data tidak berhasil diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>