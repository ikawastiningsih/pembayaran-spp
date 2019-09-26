<style type="text/css">
.table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}
 
.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}
 
.table1, th, td {
    padding: 8px 20px;
    text-align: center;
}
 
.table1 tr:hover {
    background-color: #f5f5f5;
}
 
.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}

.font{
    font-color: black;  
    font-size: 12pt;

}

</style>

<html lang="en">

<title>Data Siswa Kelas X</title>



<body onload="window.print()">

    <div class="panel panel-default"">
        <div class="panel-body">
            <div class="row-table-bordered">
           <table>
            <tr>
            <td>
                <img src="gambar/logo.png" class="img-responsive pull-left" style="max-height:150px;display:inline">
                <div class="col-md-8">
                <font size="6"><b><p class="text-center"> SMK Jayakarta</p></font>
                <font size="3"><b><p class="text-center">Jl. Bunga Rampai XI Gg I No. 47  RT.9/RW.4, Malaka Jaya, Duren Sawit, Kota Jakarta Timur 13460</p></font>
                <b><p class="text-center">Phone : (021) 860-6936</p></b>
            </div>
        </div>
        <hr class="style2">
        <?php
            
            include 'config/koneksi.php';
            
            error_reporting(0);
            $query1 = "SELECT * FROM datasiswa where kelas='XII'";
            $tampil1 = mysqli_query($konek, $query1)or die(mysqli_error($konek));
            $no =1;
           
        ?>
<body>
<h4><center>DATA SISWA KELAS XII SMK JAYAKARTA</h4>
    <br>
<table class="table1">
  <tr>
    <th class="bg-info"><center><font size="2px">No</font></center></th>
    <th class="bg-info"><center><font size="2px">NIS</font></center></th>
    <th class="bg-info"><center><font size="2px">NISN</font></center></th>
    <th class="bg-info"><center><font size="2px">Tahun Ajaran</font></center></th>
    <th class="bg-info"><center><font size="2px">Nama Siswa</font></center></th>
    <th class="bg-info"><center><font size="2px">Jenis Kelamin</font></center></th>
    <th class="bg-info"><center><font size="2px">Kelas</font></center></th>
    <th class="bg-info"><center><font size="2px">Tempat Lahir</font></center></th>
    <th class="bg-info"><center><font size="2px">Tanggal Lahir</font></center></th>
    <th class="bg-info"><center><font size="2px">No. Handphone</font></center></th>
    <th class="bg-info"><center><font size="2px">Alamat</font></center></th>
    <th class="bg-info"><center><font size="2px">Agama</font></center></th>
    <th class="bg-info"><center><font size="2px">Nama Ayah</font></center></th>
    <th class="bg-info"><center><font size="2px">Nama Ibu</font></center></th>
    <th class="bg-info"><center><font size="2px">No. UN</font></center></th>
    <th class="bg-info"><center><font size="2px">No. Ijazah</font></center></th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($tampil1)) { ?>
    <tr>
        <td><center><font size="2px"><?php echo $no++; ?></td>
        <td><center><font size="2px"><?php echo $row['nis']; ?></td>
        <td><center><font size="2px"><?php echo $row['nisn']; ?></td>
        <td><center><font size="2px"><?php echo $row['tahunajaran']; ?></td>
        <td><center><font size="2px"><?php echo $row['nama_siswa']; ?></td>
        <td><center><font size="2px"><?php echo $row['jk_siswa']; ?></td>
        <td><center><font size="2px"><?php echo $row['kelas']; ?></td>
        <td><center><font size="2px"><?php echo $row['tempatlahir_siswa']; ?></td>  
        <td><center><font size="2px"><?php echo $row['tanggallahir_siswa']; ?></td>
        <td><center><font size="2px"><?php echo $row['notelp_siswa']; ?></td>
        <td><center><font size="2px"><?php echo $row['alamat_siswa']; ?></td>
        <td><center><font size="2px"><?php echo $row['agama_siswa']; ?></td>
        <td><center><font size="2px"><?php echo $row['namaayah_siswa']; ?></td>
        <td><center><font size="2px"><?php echo $row['namaibu_siswa']; ?></td>
        <td><center><font size="2px"><?php echo $row['no_un']; ?></td>
        <td><center><font size="2px"><?php echo $row['no_ijazah']; ?></td>
    </tr>
<?php }
?>
</table>
<br>
<br>
</body>
</html>