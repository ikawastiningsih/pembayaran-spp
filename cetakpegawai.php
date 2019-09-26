<title>Data Pegawai</title>

<body onload="window.print()">
    <div class="panel panel-default"">
        <div class="panel-body">
            <div class="row-table-bordered">
                <div class="col-md-2">
                    <img src="gambar/user.png" class="img-responsive pull-left" style="max-height:150px;display:inline">
                </div>
                <div class="col-md-12">
                    <font size="10"><b><p class="text-center">Data Pegawai SMK Jayakarta</p></font>
                    <font size="3"><b><p class="text-center">l. Bunga Rampai XI Gg I No. 47  RT.9/RW.4, Malaka Jaya, Duren Sawit, Kota Jakarta Timur 13460</p></font>
                    <b><p class="text-center">Phone : (021) 860-6936</p></b>
                </div>
                <style type="text/css">
                  hr.style2 {
                    border-top: 3px double #8c8b8b;
                    }
                </style>
            </div>
        </div>
        <hr class="style2">
        <?php
            
            include 'config/koneksi.php';
            
            error_reporting(0);
            $id_pegawai = $_GET['id_pegawai'];
            $query1 = "SELECT * FROM pegawai";
            $tampil1 = mysqli_query($konek, $query1)or die(mysqli_error($konek));
            $no =1;
        ?>
<body>
<h4><center>DATA PEGAWAI</h4>
    <br>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <tr>
    <th class="bg-info"><center>No</th>
    <th class="bg-info"><center>Nama Pegawai</th>
    <th class="bg-info"><center>Jenis Kelamin</th>
    <th class="bg-info"><center>Tempat Lahir</th>
    <th class="bg-info"><center>Tanggal Lahir</th>
    <th class="bg-info"><center>Agama</th>
    <th class="bg-info"><center>Alamat</th>
    <th class="bg-info"><center>Status</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($tampil1)) { ?>
    <tr>
        <td><center><?php echo $no++; ?></td>
        <td><center><?php echo $row['nama_pegawai']; ?></td>
        <td><center><?php echo $row['jk_pegawai']; ?></td>
        <td><center><?php echo $row['tempatlahir_pegawai']; ?></td>  
        <td><center><?php echo $row['tanggallahir_pegawai']; ?></td>
        <td><center><?php echo $row['agama_pegawai']; ?></td>
        <td><center><?php echo $row['alamat_pegawai']; ?></td>
        <td><center><?php echo $row['level']; ?></td>
    </tr>
<?php }
?>
</table>
<br>
<br>
</body>
</html>