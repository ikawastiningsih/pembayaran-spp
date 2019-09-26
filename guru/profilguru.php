<?php

error_reporting(0);

include '../config/koneksi.php';


$id_pegawai		= $_SESSION['id_pegawai'];

$tampilkan  	= "SELECT id_pegawai, nama_pegawai, jk_pegawai, nohp_pegawai, alamat_pegawai, username, password FROM pegawai WHERE id_pegawai = '$id_pegawai'";
$hasil   		= mysqli_query($konek, $tampilkan)or die(mysql_error());
$data    		= mysqli_fetch_array($hasil);

?>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Profil Saya </a>
  </li>
</ol>
<div class="card mb-3">
  <div class="card-header">
   	<i class="fa fa-table"></i> Profil Saya </div>
     <div class="card-body">
      <div class="form-group">
      	 <div class="col-sm-1" align="Right">
         	<a href="homeguru.php?konten=editakunguru"> <button class="btn btn-success">Edit Profile</button></a>
         </div>
    </div>



<table class="table table-striped-bordered">
    
    <tr>
      <td width="200">Nama</td>
      <td width="50">:</td>
      <td><?php echo $data['nama_pegawai']; ?></td>
    </tr>
    <tr>
      <td width="200">Jenis Kelamin</td>
      <td width="50">:</td>
      <td><?php echo $data['jk_pegawai']; ?></td>
    </tr>
    <tr>
      <td width="200">Nomor Handphone</td>
      <td width="50">:</td>
      <td><?php echo $data['nohp_pegawai']; ?></td>
      </tr>
    <tr>
      <td width="200">Alamat</td>
      <td width="50">:</td>
      <td><?php echo $data['alamat_pegawai']; ?></td>
    </tr>
    <tr>
      <td width="200">Username</td>
      <td width="50">:</td>
      <td><?php echo $data['username']; ?></td>
    </tr>
    <tr>
      <td width="200">Password</td>
      <td width="50">:</td>
      <td><?php echo $data['password']; ?></td>
    </tr>
  </table>
</div>
</div>
