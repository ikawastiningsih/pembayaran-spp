<?php

error_reporting(0);

include 'config/koneksi.php';


$id_siswa             = $_GET['id_siswa'];
$nis		              = $_GET['nis'];
$tahunajaran          = $_GET['tahunajaran'];
$total_spp            = $_GET["total_spp"];
$tahun2               = date('Y');
$nama_siswa           = $_GET['nama_siswa'];
$kelas                = $_GET['kelas'];
$tanggal              = date('Y-m-d');

$tampilkan    = "SELECT id_siswa, nis, nisn, tahunajaran, nama_siswa, jk_siswa, kelas, tempatlahir_siswa, tanggallahir_siswa, notelp_siswa, alamat_siswa, agama_siswa, namaayah_siswa, namaibu_siswa, no_un, no_ijazah, total_spp FROM datasiswa WHERE id_siswa = '$id_siswa'";
$hasil   		= mysqli_query($konek, $tampilkan)or die(mysqli_error($konek));
$data    		= mysqli_fetch_array($hasil);


?>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Data Siswa Baru </a>
  </li>
</ol>
<div class="card mb-3">
  <div class="card-header">
   	<i class="fa fa-table"></i> Data Siswa Baru </div>
     <div class="card-body">
      <div class="form-group">
    </div>



<table class="table table-striped-bordered">
  <input type="hidden" name="id_siswa" value="<?php echo $id_siswa ?>">
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
      <td width="300">Tahun Ajaran Masuk</td>
      <td width="50">:</td>
      <td><?php $tahunajaran=$data['tahunajaran']; echo $tahunajaran; ?></td>
    </tr>
   <tr>
      <td width="200">Total</td>
      <td width="50">:</td>
      <td><?php $total_spp=$data['total_spp']; echo $total_spp; ?></td>
    </tr>
    <tr>
      <td width="200">Nama Siswa</td>
      <td width="50">:</td>
      <td><?php $nama_siswa=$data['nama_siswa']; echo $nama_siswa; ?></td>
    </tr>
    <tr>
      <td width="200">Jenis Kelamin</td>
      <td width="50">:</td>
      <td><?php echo $data['jk_siswa']; ?></td>
    </tr>
    <tr>
      <td width="300">Kelas</td>
      <td width="50">:</td>
      <td><?php $kelas=$data['kelas']; echo $kelas; ?></td>
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
  </table>
</div>
</div>

<?php
  
  //menyimpan data ke tabel spp_bulanan
  $query      = "INSERT INTO spp_bulanan VALUES ('','$id_siswa','$nis','$tahunajaran','$nama_siswa','$kelas','$total_spp','$tanggal','','','','','','','','','','', '','','','','','','','','','','','')";
  $simpan     = mysqli_query($konek,$query)or die(mysqli_error($konek));

  $bayar2       = "INSERT INTO master_spp VALUES ('', '$id_siswa', '$nis','$tahunajaran', '$tahun2','$nama_siswa','$kelas','juli', '$total_spp', '$tanggal')";
  $updatebayaran2   = mysqli_query($konek, $bayar2) or die(mysqli_error($konek));
?>