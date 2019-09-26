<?php

error_reporting(0);

include 'config/koneksi.php';


$id_siswa		= $_GET['id_siswa'];

$tampilkan    = "SELECT id_siswa, nis, nisn, tahunajaran, nama_siswa, jk_siswa, kelas, tempatlahir_siswa, tanggallahir_siswa, notelp_siswa, alamat_siswa, agama_siswa, namaayah_siswa, namaibu_siswa, no_un, no_ijazah FROM datasiswa WHERE id_siswa = '$id_siswa'";
$hasil   		= mysqli_query($konek, $tampilkan)or die(mysql_error());
$data    		= mysqli_fetch_array($hasil);

?>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Profil Siswa </a>
  </li>
</ol>
<div class="card mb-3">
  <div class="card-header">
   	<i class="fa fa-table"></i> Profil Siswa </div>
     <div class="card-body">
      <div class="form-group">
    </div>


<table class="table table-striped-bordered">
  <tr>
      <td width="200">Nomor Induk Siswa</td>
      <td width="50">:</td>
      <td><?php echo $data['nis']; ?></td>
    </tr>
   <tr>
      <td width="300">Nomor Induk Siswa Nasional</td>
      <td width="50">:</td>
      <td><?php echo $data['nisn']; ?></td>
    </tr>
     <tr>
      <td width="300">Tahun Ajaran</td>
      <td width="50">:</td>
      <td><?php echo $data['tahunajaran']; ?></td>
    </tr>
    <tr>
      <td width="200">Nama Siswa</td>
      <td width="50">:</td>
      <td><?php echo $data['nama_siswa']; ?></td>
    </tr>
    <tr>
      <td width="200">Jenis Kelamin</td>
      <td width="50">:</td>
      <td><?php echo $data['jk_siswa']; ?></td>
    </tr>
    <tr>
      <td width="300">Kelas</td>
      <td width="50">:</td>
      <td><?php echo $data['kelas']; ?></td>
    </tr>
    <tr>
      <td width="200">Tempat Lahir</td>
      <td width="50">:</td>
      <td><?php echo $data['tempatlahir_siswa']; ?></td>
    </tr>
    <tr>
      <td width="200">Tanggal Lahir</td>
      <td width="50">:</td>
      <td><?php echo $data['tanggallahir_siswa']; ?></td>
    </tr>
    <tr>
      <td width="200">Nomor Handphone</td>
      <td width="50">:</td>
      <td><?php echo $data['notelp_siswa']; ?></td>
      </tr>
    <tr>
      <td width="200">Alamat Siswa</td>
      <td width="50">:</td>
      <td><?php echo $data['alamat_siswa']; ?></td>
    </tr>
    <tr>
      <td width="200">Agama</td>
      <td width="50">:</td>
      <td><?php echo $data['agama_siswa']; ?></td>
    </tr>
   <tr>
      <td width="300">Nama Ayah</td>
      <td width="50">:</td>
      <td><?php echo $data['namaayah_siswa']; ?></td>
    </tr>
    <tr>
      <td width="300">Nama Ibu</td>
      <td width="50">:</td>
      <td><?php echo $data['namaibu_siswa']; ?></td>
    </tr>
    <tr>
      <td width="300">Nomer Ujian Nasional</td>
      <td width="50">:</td>
      <td><?php echo $data['no_un']; ?></td>
    </tr>
    <tr>
      <td width="300">Nomor Ijazah</td>
      <td width="50">:</td>
      <td><?php echo $data['no_ijazah']; ?></td>
    </tr>
  <?php 
  $no++;
  ?>
  </table>
</div>
</div>
