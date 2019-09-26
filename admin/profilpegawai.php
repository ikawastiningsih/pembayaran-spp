<?php

error_reporting(0);

include '../config/koneksi.php';


$id_pegawai		= $_GET['id_pegawai'];

$tampilkan    = "SELECT id_pegawai, nama_pegawai, jk_pegawai, tempatlahir_pegawai, tanggallahir_pegawai, agama_pegawai, alamat_pegawai, nohp_pegawai, username, password, level FROM pegawai WHERE id_pegawai = '$id_pegawai'";
$hasil   		= mysqli_query($konek, $tampilkan)or die(mysql_error());
$data    		= mysqli_fetch_array($hasil);

?>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Profil Pegawai </a>
  </li>
</ol>
<div class="card mb-3">
  <div class="card-header">
   	<i class="fa fa-table"></i> Profil Pegawai </div>
     <div class="card-body">
      <div class="form-group">
    </div>


<table class="table table-striped-bordered">
    <tr>
      <td width="200">Nama Pegawai</td>
      <td width="50">:</td>
      <td><?php echo $data['nama_pegawai']; ?></td>
    </tr>
    <tr>
      <td width="200">Jenis Kelamin</td>
      <td width="50">:</td>
      <td><?php echo $data['jk_pegawai']; ?></td>
    </tr>
    <tr>
      <td width="200">Tempat Lahir</td>
      <td width="50">:</td>
      <td><?php echo $data['tempatlahir_pegawai']; ?></td>
    </tr>
    <tr>
      <td width="200">Tanggal Lahir</td>
      <td width="50">:</td>
      <td><?php echo $data['tanggallahir_pegawai']; ?></td>
    </tr>
    <tr>
      <td width="200">Agama</td>
      <td width="50">:</td>
      <td><?php echo $data['agama_pegawai']; ?></td>
    </tr>
    <tr>
      <td width="200">Alamat</td>
      <td width="50">:</td>
      <td><?php echo $data['alamat_pegawai']; ?></td>
    </tr>
    <tr>
      <td width="200">Nomer Handphone</td>
      <td width="50">:</td>
      <td><?php echo $data['nohp_pegawai']; ?></td>
    </tr>
    <tr>
      <td width="200">Alamat Siswa</td>
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
    <tr>
      <td width="200">Level</td>
      <td width="50">:</td>
      <td><?php echo $data['level']; ?></td>
    </tr>
  <?php 
  $no++;
  ?>
  </table>
</div>
</div>
