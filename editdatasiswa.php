<?php

error_reporting(0);

include 'config/koneksi.php';

$id_siswa = $_GET['id_siswa'];

$tampilkan  	= "SELECT id_siswa, nis, nisn, tahunajaran, nama_siswa, jk_siswa, kelas, tempatlahir_siswa, tanggallahir_siswa, notelp_siswa, alamat_siswa, agama_siswa, namaayah_siswa, namaibu_siswa, no_un, no_ijazah, total_spp FROM datasiswa WHERE id_siswa = '$id_siswa'";
$hasil   		= mysqli_query($konek, $tampilkan)or die(mysql_error());
$data    		= mysqli_fetch_array($hasil);


?>
<br>
<form class="form-horizontal" action="config/editdatasiswaproses.php" method="POST">
	<ol class="breadcrumb">
      <li class="active"><b>EDIT DATA SISWA</b></li>
       </ol>
    <input type="hidden" name="id_siswa" value="<?php echo $id_siswa ?>">
    <div class="form-group">
		<label class="col-sm-3">Nomer Induk Siswa</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="nis" type="text" value="<?php echo $data['nis']; ?>" required></label>
	</div>
    <div class="form-group">
		<label class="col-sm-3">Nomer Induk Siswa Nasional</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="nisn" type="text" value="<?php echo $data['nisn']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Tahun Ajaran Masuk</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
		<select class="form-control" name="tahunajaran" id="tahun" required>
		<option><?php echo $data['tahunajaran'];?></option>
          <?php
          $ta = "SELECT * FROM tahun_ajaran";
          $queryta = mysqli_query($konek,$ta);
          while ($tampilta = mysqli_fetch_array($queryta)) { ?>
          <option value="<?php echo $tampilta['tahunajaran'] ?>"><?php echo $tampilta["tahunajaran"] ?>
          </option>
          <?php
          }
          ?>
         </select>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Nama</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="nama_siswa" type="text" value="<?php echo $data['nama_siswa']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Jenis Kelamin</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="jk_siswa" name="jk_siswa">
                <option><?php echo $data['jk_siswa'];?></option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
             </select> 
	</div>	
	<div class="form-group">
		<label class="col-sm-3">Kelas</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="kelas" type="text" value="<?php echo $data['kelas']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Tempat Lahir</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="tempatlahir_siswa" type="text" value="<?php echo $data['tempatlahir_siswa']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Tanggal Lahir</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="tanggallahir_siswa" type="text" value="<?php echo $data['tanggallahir_siswa']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">No Telepon</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="notelp_siswa" type="text" value="<?php echo $data['notelp_siswa']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Alamat</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="alamat_siswa" type="text" value="<?php echo $data['alamat_siswa']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Agama</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="agama_siswa" type="text" value="<?php echo $data['agama_siswa']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Nama Ayah</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="namaayah_siswa" type="text" value="<?php echo $data['namaayah_siswa']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Nama Ibu</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="namaibu_siswa" type="text" value="<?php echo $data['namaibu_siswa']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Nomer Ujian Nasional</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="no_un" type="text" value="<?php echo $data['no_un']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Nomer Ijazah</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="no_ijazah" type="text" value="<?php echo $data['no_ijazah']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Total SPP</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="total_spp" type="text" value="<?php echo $data['total_spp']; ?>" required></label>
	</div>
	<div class="form-group">
        <label class="col-sm-3"></label>
        <label class="col-sm-1"></label>
        <div class="col-sm-8" align="Right">
          <button class="btn btn-primary">Edit</button>
         </div>
    </div>