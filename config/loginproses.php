<?php

	include "koneksi.php";

	$username  = $_POST["username"];
	$password  = md5($_POST["password"]);

	$query     ="SELECT * FROM pegawai WHERE username='$username' AND password='$password'";

	$login     = mysqli_query($konek,$query) or die(mysqli_error($konek));
	$jlhrecord = mysqli_num_rows($login);

	$data      = mysqli_fetch_array($login,MYSQLI_BOTH);

	$id_pegawai	   	   = $data['id_pegawai'];
	$nama_pegawai	   = $data['nama_pegawai'];
	$username  		   = $data['username'];
	$password  		   = $data['password'];
	$level	           = $data['level'];


if($jlhrecord > 0){

	session_start();
	
	$_SESSION['id_pegawai']		=$id_pegawai;
	$_SESSION['nama_pegawai']	=$nama_pegawai;
	$_SESSION['username']		=$username;
	$_SESSION['password']		=$password;
	$_SESSION['level']			=$level;
	$_SESSION['id_pegawai']     = session_id();

	//redirect level
		if($level == tatausaha){
			header('Location:../home.php');
			// if(!isset($_SESSION['id_pegawai'])){
				
			// }
		}
		elseif ($level == kepalasekolah){
			header('Location:../kepalasekolah/homekepsek.php');
		}
		elseif ($level == admin){
			header('Location:../admin/homeadmin.php');
		}
}

else{

	echo "<br><br><br><strong><center><i>Maaf anda gagal login. Mungkin Username atau Password yang anda masukkan salah.<br>Silahkan masukkan Username atau Password dengan benar!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../index.php">';  
}

?> 