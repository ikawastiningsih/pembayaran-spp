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

<title>Rekap Bulanan </title>



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

        $bln = $_GET['bln'];
        $thn = $_GET['thn'];

        include 'config/koneksi.php'; 

        $no = 1;
        $query1 = "SELECT * FROM master_spp where month(tgl_pembayaran) = '$bln' and year(tgl_pembayaran) = '$thn'";

        $tampil1 = mysqli_query($konek, $query1);


        ?>

    <body>
    <h4><center>REKAPITULASI BULANAN SMK JAYAKARTA</h4>
        <br>
            <div class = "row">

    <div class = "col-md-12">
   <table class="table1">
      <th class="bg-info"><center><font size="2px">No</font></center></th>
      <th class="bg-info"><center><font size="2px">NIS</font></center></th>
      <th class="bg-info"><center><font size="2px">Tahun Ajaran</font></center></th>
      <th class="bg-info"><center><font size="2px">Nama Siswa</font></center></th>
      <th class="bg-info"><center><font size="2px">Kelas</font></center></th>
      <th class="bg-info"><center><font size="2px">Bulan</font></center></th>
      <th class="bg-info"><center><font size="2px">Tanggal Pembayaran</font></center></th>
      <?php
      while($row = mysqli_fetch_array($tampil1)) { ?>
        <tr>
          <td><center><?php echo $no++; ?></center></td>
          <td><center><?php echo $row['nis']; ?></center></td>
          <td><center><?php echo $row['tahunajaran']; ?></center></td>
          <td><center><?php echo $row['nama_siswa']; ?></center></td>
          <td><center><?php echo $row['kelas']; ?></center></td>
          <td><center><?php echo $row['bulan']; ?></center></td>
          <td><center><?php echo date ('Y-m-d', strtotime(($row ['tgl_pembayaran']))); ?></center></td>
        </tr>
        <?php }
        ?>

      </table>
    </div>
  </div>

<br>
<br>
</body>
</html>