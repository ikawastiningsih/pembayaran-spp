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

<title>Data Pegawai</title>

<body onload="window.print()">
    
    <div class="panel panel-default"">
        <div class="panel-body">
            <div class="row-table-bordered">
           <table>
            <tr>
            <td>
                <img src="../gambar/logo.png" class="img-responsive pull-left" style="max-height:150px;display:inline">
                <div class="col-md-8">
                <font size="6"><b><p class="text-center"> SMK Jayakarta</p></font>
                <font size="3"><b><p class="text-center">Jl. Bunga Rampai XI Gg I No. 47  RT.9/RW.4, Malaka Jaya, Duren Sawit, Kota Jakarta Timur 13460</p></font>
                <b><p class="text-center">Phone : (021) 860-6936</p></b>
            </div>
        </div>
        <hr class="style2">
        <?php
            
            include '../config/koneksi.php';
            
            error_reporting(0);
            $id_pegawai = $_GET['id_pegawai'];
            $query1 = "SELECT * FROM pegawai";
            $tampil1 = mysqli_query($konek, $query1)or die(mysqli_error($konek));
            $no =1;
        ?>
<body>
<h4><center>DATA PEGAWAI</h4>
    <br>
<table class="table1">
  <tr>
    <th class="bg-info"><center><font size="2px">No</th>
    <th class="bg-info"><center><font size="2px">Nama Pegawai</th>
    <th class="bg-info"><center><font size="2px">Jenis Kelamin</th>
    <th class="bg-info"><center><font size="2px">Tempat Lahir</th>
    <th class="bg-info"><center><font size="2px">Tanggal Lahir</th>
    <th class="bg-info"><center><font size="2px">Agama</th>
    <th class="bg-info"><center><font size="2px">Alamat</th>
    <th class="bg-info"><center><font size="2px">Status</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($tampil1)) { ?>
    <tr>
        <td><center><font size="2px"><?php echo $no++; ?></td>
        <td><center><font size="2px"><?php echo $row['nama_pegawai']; ?></td>
        <td><center><font size="2px"><?php echo $row['jk_pegawai']; ?></td>
        <td><center><font size="2px"><?php echo $row['tempatlahir_pegawai']; ?></td>  
        <td><center><font size="2px"><?php echo $row['tanggallahir_pegawai']; ?></td>
        <td><center><font size="2px"><?php echo $row['agama_pegawai']; ?></td>
        <td><center><font size="2px"><?php echo $row['alamat_pegawai']; ?></td>
        <td><center><font size="2px"><?php echo $row['level']; ?></td>
    </tr>
<?php }
?>
</table>
<br>
<br>
</body>
</html>