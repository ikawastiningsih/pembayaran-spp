<?php

error_reporting(0);

include '../config/koneksi.php';

$id_pegawai = $_GET['id_pegawai'];

$tampilkan  	= "SELECT id_pegawai, nama_pegawai, nohp_pegawai, alamat_pegawai, username, password FROM pegawai WHERE id_pegawai = '$id_pegawai'";
$hasil   		= mysqli_query($konek, $tampilkan)or die(mysql_error());
$data    		= mysqli_fetch_array($hasil);


?>
<br>
<form class="form-horizontal" action="../config/editakunpegawaiproses.php" method="POST">
	<ol class="breadcrumb">
      <li class="active"><b>EDIT AKUN PEGAWAI</b></li>
       </ol>
    <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai ?>">
	<div class="form-group">
		<label class="col-sm-3">Nama</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="nama_pegawai" type="text" value="<?php echo $data['nama_pegawai']; ?>" required></label>
	</div>

	<div class="form-group">
		<label class="col-sm-3">No Telepon</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="nohp_pegawai" type="text" value="<?php echo $data['nohp_pegawai']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Alamat</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="alamat_pegawai" type="text" value="<?php echo $data['alamat_pegawai']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Username</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="username" type="text" value="<?php echo $data['username']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Password</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="password" type="text" value="<?php echo $data['password']; ?>" required></label>
	</div>

	<div class="form-group">
        <label class="col-sm-3"></label>
        <label class="col-sm-1"></label>
        <div class="col-sm-8" align="Right">
          <button class="btn btn-primary">Edit</button>
         </div>
    </div>