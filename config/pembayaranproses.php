<?php

include 'koneksi.php';

$id_siswa 		= $_POST['id_siswa'];
$nis 			= $_POST["nis"];
$bulan  		= $_POST["bulan"];
$total  		= $_POST["total"];
$nama 			= $_POST["nama_siswa"];
$kelas  		= $_POST["kelas"];
$tahun  		= $_POST["tahunajaran"];
$tahun2			= date('Y');
$tanggal		= date('Y-m-d');


 
if($bulan=='juli')
{
	$bayar 			= "INSERT INTO spp_bulanan VALUES ('','$id_siswa','$nis','$tahun','$nama','$kelas','$total','$tanggal','','','','','','','','','','','','','','','','','','','','','','')";
	$updatebayaran 	= mysqli_query($konek, $bayar) or die(mysqli_error($konek));

	$bayar2 			= "INSERT INTO master_spp VALUES ('', '$id_siswa', '$nis','$tahun','$tahun2','$nama','$kelas','$bulan', '$total','$tanggal')";
	$updatebayaran2 	= mysqli_query($konek, $bayar2) or die(mysqli_error($konek));

	if ($updatebayaran)
	{
		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
	    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=pembayaran">';
	}
	else {
		print"
	    		<script>
	    			alert(\"Maaf, Data tidak berhasil diubah!\");
	    			history.back(-1);
	    		</script>";
	}
}
elseif ($bulan=='agustus') 
/*{
	/*$cek = mysqli_num_rows(mysqli_query($konek,"SELECT * FROM spp_bulanan WHERE nis='$nis' or bulan='$bulan'"));
    if ($cek > 0){
    echo "<script>window.alert('Data sudah terisi')</script>";
    } */

    /*$cekdata="SELECT agustus FROM spp_bulanan WHERE nis='$nis' or agustus='$bulan'";
	$ada=mysqli_query($konek, $cekdata) or die(mysqli_error($konek));
	if( mysqli_num_rows($ada) > 0)
		{
    		echo "<script>
	    			alert(\"Maaf, Data tidak berhasil diubah!\");
	    			history.back(-1);
	    		</script>";
    	}*/
     {
	$bayar 			= "UPDATE spp_bulanan SET nis='$nis', tglagus ='$tanggal', agustus='$total' WHERE nis='$nis' AND tahunajaran= '$tahun'";
	$updatebayaran 	= mysqli_query($konek, $bayar) or die(mysqli_error($konek));

$bayar2 			= "INSERT INTO master_spp VALUES ('', '$id_siswa', '$nis','$tahun','$tahun2','$nama','$kelas','$bulan', '$total','$tanggal')";
	$updatebayaran2 	= mysqli_query($konek, $bayar2) or die(mysqli_error($konek));


	if ($updatebayaran)
	{
		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
	    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=pembayaran">';
	}
	else {
		print"
	    		<script>
	    			alert(\"Maaf, Data tidak berhasil diubah!\");
	    			history.back(-1);
	    		</script>";
	}
}

elseif ($bulan=='september') 
{
	$bayar 			= "UPDATE spp_bulanan SET nis='$nis', tglsep ='$tanggal', september='$total' WHERE nis='$nis' AND tahunajaran= '$tahun'";
	$updatebayaran 	= mysqli_query($konek, $bayar) or die(mysqli_error($konek));

$bayar2 			= "INSERT INTO master_spp VALUES ('', '$id_siswa', '$nis','$tahun','$tahun2','$nama','$kelas','$bulan', '$total','$tanggal')";
	$updatebayaran2 	= mysqli_query($konek, $bayar2) or die(mysqli_error($konek));


	if ($updatebayaran)
	{
		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
	    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=pembayaran">';
	}
	else {
		print"
	    		<script>
	    			alert(\"Maaf, Data tidak berhasil diubah!\");
	    			history.back(-1);
	    		</script>";
	}
}

elseif ($bulan=='oktober') 
{
	$bayar 			= "UPDATE spp_bulanan SET nis='$nis', tglokt ='$tanggal', oktober='$total' WHERE nis='$nis' AND tahunajaran= '$tahun'";
	$updatebayaran 	= mysqli_query($konek, $bayar) or die(mysqli_error($konek));

	$bayar2 			= "INSERT INTO master_spp VALUES ('', '$id_siswa', '$nis','$tahun','$tahun2','$nama','$kelas','$bulan', '$total','$tanggal')";
	$updatebayaran2 	= mysqli_query($konek, $bayar2) or die(mysqli_error($konek));

	if ($updatebayaran)
	{
		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
	    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=pembayaran">';
	}
	else {
		print"
	    		<script>
	    			alert(\"Maaf, Data tidak berhasil diubah!\");
	    			history.back(-1);
	    		</script>";
	}
}

elseif ($bulan=='november') 
{
	$bayar 			= "UPDATE spp_bulanan SET nis='$nis', tglnov ='$tanggal', november='$total' WHERE nis='$nis' AND tahunajaran= '$tahun'";
	$updatebayaran 	= mysqli_query($konek, $bayar) or die(mysqli_error($konek));

	$bayar2 			= "INSERT INTO master_spp VALUES ('', '$id_siswa', '$nis','$tahun','$tahun2','$nama','$kelas','$bulan', '$total','$tanggal')";
	$updatebayaran2 	= mysqli_query($konek, $bayar2) or die(mysqli_error($konek));


	if ($updatebayaran)
	{
		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
	    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=pembayaran">';
	}
	else {
		print"
	    		<script>
	    			alert(\"Maaf, Data tidak berhasil diubah!\");
	    			history.back(-1);
	    		</script>";
	}
}
elseif ($bulan=='desember') 
{
	$bayar 			= "UPDATE spp_bulanan SET nis='$nis', tgldes ='$tanggal', desember='$total' WHERE nis='$nis' AND tahunajaran= '$tahun'";
	$updatebayaran 	= mysqli_query($konek, $bayar) or die(mysqli_error($konek));

	$bayar2 			= "INSERT INTO master_spp VALUES ('', '$id_siswa', '$nis','$tahun','$tahun2','$nama','$kelas','$bulan', '$total','$tanggal')";
	$updatebayaran2 	= mysqli_query($konek, $bayar2) or die(mysqli_error($konek));

	if ($updatebayaran)
	{
		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
	    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=pembayaran">';
	}
	else {
		print"
	    		<script>
	    			alert(\"Maaf, Data tidak berhasil diubah!\");
	    			history.back(-1);
	    		</script>";
	}
}
elseif($bulan=='januari')
{
	$bayar 			= "UPDATE spp_bulanan SET nis='$nis', tgljan ='$tanggal', januari='$total' WHERE nis='$nis' AND tahunajaran= '$tahun'";
	$updatebayaran 	= mysqli_query($konek, $bayar) or die(mysqli_error($konek));

	$bayar2 			= "INSERT INTO master_spp VALUES ('', '$id_siswa', '$nis','$tahun','$tahun2','$nama','$kelas','$bulan', '$total','$tanggal')";
	$updatebayaran2 	= mysqli_query($konek, $bayar2) or die(mysqli_error($konek));

	if ($updatebayaran)
	{
		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
	    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=pembayaran">';
	}
	else {
		print"
	    		<script>
	    			alert(\"Maaf, Data tidak berhasil diubah!\");
	    			history.back(-1);
	    		</script>";
	}
}
elseif ($bulan=='februari') 
{
	$bayar 			= "UPDATE spp_bulanan SET nis='$nis', tglfeb ='$tanggal', februari='$total' WHERE nis='$nis' AND tahunajaran= '$tahun'";
	$updatebayaran 	= mysqli_query($konek, $bayar) or die(mysqli_error($konek));

$bayar2 			= "INSERT INTO master_spp VALUES ('', '$id_siswa', '$nis','$tahun','$tahun2','$nama','$kelas','$bulan', '$total','$tanggal')";
	$updatebayaran2 	= mysqli_query($konek, $bayar2) or die(mysqli_error($konek));

	if ($updatebayaran)
	{
		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
	    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=pembayaran">';
	}
	else {
		print"
	    		<script>
	    			alert(\"Maaf, Data tidak berhasil diubah!\");
	    			history.back(-1);
	    		</script>";
	}
}

elseif ($bulan=='maret') 
{
	$bayar 			= "UPDATE spp_bulanan SET nis='$nis', tglmar ='$tanggal', maret='$total' WHERE nis='$nis' AND tahunajaran='$tahun'";
	$updatebayaran 	= mysqli_query($konek, $bayar) or die(mysqli_error($konek));

	$bayar2 			= "INSERT INTO master_spp VALUES ('', '$id_siswa', '$nis','$tahun','$tahun2','$nama','$kelas','$bulan', '$total','$tanggal')";
	$updatebayaran2 	= mysqli_query($konek, $bayar2) or die(mysqli_error($konek));
	
	if ($updatebayaran)
	{
		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
	    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=pembayaran">';
	}
	else {
		print"
	    		<script>
	    			alert(\"Maaf, Data tidak berhasil diubah!\");
	    			history.back(-1);
	    		</script>";
	}
}

elseif ($bulan=='april') 
{
	$bayar 			= "UPDATE spp_bulanan SET nis='$nis', tglapr ='$tanggal',april='$total' WHERE nis='$nis' AND tahunajaran='$tahun'";
	$updatebayaran 	= mysqli_query($konek, $bayar) or die(mysqli_error($konek));

$bayar2 			= "INSERT INTO master_spp VALUES ('', '$id_siswa', '$nis','$tahun','$tahun2','$nama','$kelas','$bulan', '$total','$tanggal')";
	$updatebayaran2 	= mysqli_query($konek, $bayar2) or die(mysqli_error($konek));

	if ($updatebayaran)
	{
		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
	    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=pembayaran">';
	}
	else {
		print"
	    		<script>
	    			alert(\"Maaf, Data tidak berhasil diubah!\");
	    			history.back(-1);
	    		</script>";
	}
}

elseif ($bulan=='mei') 
{
	$bayar 			= "UPDATE spp_bulanan SET nis='$nis', tglmei ='$tanggal',mei='$total' WHERE nis='$nis' AND tahunajaran='$tahun'";
	$updatebayaran 	= mysqli_query($konek, $bayar) or die(mysqli_error($konek));

$bayar2 			= "INSERT INTO master_spp VALUES ('', '$id_siswa', '$nis','$tahun','$tahun2','$nama','$kelas','$bulan', '$total','$tanggal')";
	$updatebayaran2 	= mysqli_query($konek, $bayar2) or die(mysqli_error($konek));
	if ($updatebayaran)
	{
		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
	    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=pembayaran">';
	}
	else {
		print"
	    		<script>
	    			alert(\"Maaf, Data tidak berhasil diubah!\");
	    			history.back(-1);
	    		</script>";
	}
}

elseif ($bulan=='juni') 
{
	$bayar 			= "UPDATE spp_bulanan SET nis='$nis', tgljun ='$tanggal',juni='$total' WHERE nis='$nis' AND tahunajaran='$tahun'";
	$updatebayaran 	= mysqli_query($konek, $bayar) or die(mysqli_error($konek));

	$bayar2 			= "INSERT INTO master_spp VALUES ('', '$id_siswa', '$nis','$tahun','$tahun2','$nama','$kelas','$bulan', '$total','$tanggal')";
	$updatebayaran2 	= mysqli_query($konek, $bayar2) or die(mysqli_error($konek));

	if ($updatebayaran)
	{
		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
	    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=pembayaran">';
	}
	else {
		print"
	    		<script>
	    			alert(\"Maaf, Data tidak berhasil diubah!\");
	    			history.back(-1);
	    		</script>";
	}
}
?>