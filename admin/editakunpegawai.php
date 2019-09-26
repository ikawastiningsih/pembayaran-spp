<?php

error_reporting(0);

include '../config/koneksi.php';

$id_pegawai = $_GET['id_pegawai'];

$tampilkan  	= "SELECT id_pegawai, nama_pegawai, jk_pegawai, tempatlahir_pegawai, tanggallahir_pegawai, agama_pegawai, alamat_pegawai, nohp_pegawai, username, password FROM pegawai WHERE id_pegawai = '$id_pegawai'";
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
		<label class="col-sm-3">Jenis Kelamin</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="jk_pegawai" name="jk_pegawai">
                <option><?php echo $data['jk_pegawai'];?></option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
             </select> 
	</div>	
	<div class="form-group">
		<label class="col-sm-3">Tempat Lahir</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="tempatlahir_pegawai" type="text" value="<?php echo $data['tempatlahir_pegawai']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Tanggal Lahir</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
		<input class="form-control input-md" class="input-group date" name="tanggallahir_pegawai" type="date" value="<?php echo $data['tanggallahir_pegawai']; ?>"required>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Agama</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="agama_pegawai" name="agama_pegawai" required>
                <option><?php echo $data['agama_pegawai'];?></option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Kong Hu Cu</option>
            </select>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Alamat</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="alamat_pegawai" type="text" value="<?php echo $data['alamat_pegawai']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">No Telepon</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="nohp_pegawai" type="text" value="<?php echo $data['nohp_pegawai']; ?>" required></label>
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
		<label class="col-sm-3">Level</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="level" name="level" required>
                <option><?php echo $data['level'];?></option>
                <option value = "tatausaha">Tata Usaha</option>
                <option value = "admin">Admin</option>
                <option value = "kepalasekolah">Kepala Sekolah</option>
            </select>
	</div>
	<div class="form-group">
        <label class="col-sm-3"></label>
        <label class="col-sm-1"></label>
        <div class="col-sm-8" align="Right">
          <button class="btn btn-primary">Edit</button>
         </div>
    </div>