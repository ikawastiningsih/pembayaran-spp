<?php
	include "config/koneksi.php";
	
	$tahun  = $_GET["tahunajaran"];

	$edit    = "SELECT total_spp FROM tahun_ajaran WHERE tahunajaran='$tahun'";
	$hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
	$data    = mysqli_fetch_array($hasil);  
	$total   = $data['total_spp'];
	
	
	echo $total;
	
	
?>