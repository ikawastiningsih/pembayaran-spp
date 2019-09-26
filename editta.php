<?php
/*
error_reporting(0);*/

include 'config/koneksi.php';

$id_ta = $_GET['id_ta'];

$tampilkan  	= "SELECT id_ta, tahunajaran , total_spp, angkatan FROM tahun_ajaran WHERE id_ta = '$id_ta'";
$hasil   		= mysqli_query($konek, $tampilkan)or die(mysqli_error($konek));
$data    		= mysqli_fetch_array($hasil);

?>
<br>
<form class="form-horizontal" action="config/edittaprosess.php" method="POST">
	<ol class="breadcrumb">
      <li class="active"><b>EDIT TAHUN AJARAN</b></li>
       </ol>
    <input type="hidden" name="id_ta" value="<?php echo $id_ta ?>">
    <div class="form-group">
		<label class="col-sm-3">Tahun Ajaran</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="tahunajaran" type="text" value="<?php echo $data['tahunajaran']; ?>"></label>
	</div>
  <div class="form-group">
    <label class="col-sm-3">Angkatan</label>
    <label class="col-sm-1">:</label>
    <label class="col-sm-4"><input class="form-control" name="angkatan" type="text" value="<?php echo $data['angkatan']; ?>"></label>
  </div>
  <div class="form-group">
    <label class="col-sm-3">Total SPP</label>
    <label class="col-sm-1">:</label>
    <label class="col-sm-4"><input class="form-control" name="total_spp" type="text" value="<?php echo $data['total_spp']; ?>"></label>
  </div>
	<div class="form-group">
     <label class="col-sm-3"></label>
     <label class="col-sm-1"></label>
     <div class="col-sm-8" align="Right">
     <button class="btn btn-success">Tambah</button>
    </div>
</form>