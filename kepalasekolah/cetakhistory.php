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

<title>Riwayat Pembayaran Siswa </title>



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

        $tahunajaran = $_GET['tahunajaran'];
        $nis         = $_GET['nis'];
echo 'Tahun Ajaran '.$tahunajaran; 
      
        $no = 1;
        $query1 = "SELECT id_siswa, id_spp, nis, tahunajaran, nama_siswa, kelas, juli, tgljuli, agustus, tglagus, september, tglsep, oktober, tglokt, november, tglnov, desember, tgldes, januari, tgljan, februari, tglfeb,  maret, tglmar, april, tglapr, mei, tglmei, juni, tgljun FROM spp_bulanan WHERE tahunajaran='$tahunajaran' AND nis = '$nis'";

        $tampil1 = mysqli_query($konek, $query1);


        ?>

    <body>
    <h4><center>RIWAYAT PEMBAYARAN SISWA</h4>
        <br>
            <div class = "row">

    <div class = "col-md-12">
   <table class="table-responsive" table style="table1">
       <tr>
        <th>Bulan</th>
        <th>Keterangan</th>
        <th>Tanggal Pembayaran</th>
      </tr>
      <?php
        if(!mysqli_num_rows($tampil1)) {
          echo "Tidak ada data!";

          } else {
          while($data = mysqli_fetch_array($tampil1)) { ?>
                <tr align="center">
                      <td>Juli</td>
                      <td><?php if ($data['juli']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tgljuli']; ?></td>
                    </tr>
                    <tr align="center">
                      <td>Agustus</td>
                      <td><?php if ($data['agustus']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo date ('d-m-Y', strtotime(($data['tglagus']))); ?></td>
                    </tr>
                    <tr align="center">
                      <td>September</td>
                      <td><?php if ($data['september']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tglsep']; ?></td>
                    </tr>
                    <tr align="center">
                      <td>Oktober</td>
                      <td><?php if ($data['oktober']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tglokt']; ?></td>
                    </tr>
                    <tr align="center">
                      <td>November</td>
                      <td><?php if ($data['november']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tglnov']; ?></td>
                    </tr>
                    <tr align="center">
                      <td>Desember</td>
                      <td><?php if ($data['desember']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tgldes']; ?></td>
                    </tr>
                
                    <tr align="center">
                      <td>Januari</td>
                      <td><?php if ($data['januari']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tgljan']; ?></td>
                    </tr>
                    <tr align="center">
                      <td>Februari</td>
                      <td><?php if ($data['februari']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tglfeb']; ?></td>
                    </tr>
                    <tr align="center">
                      <td>Maret</td>
                      <td><?php if ($data['maret']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tglmar']; ?></td>
                    </tr>
                    <tr align="center">
                      <td>April</td>
                      <td><?php if ($data['april']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tglapr']; ?></td>
                    </tr>
                   <tr align="center">
                      <td>Mei</td>
                      <td><?php if ($data['mei']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tglmei']; ?></td>
                    </tr>
                   <tr align="center">
                      <td>Juni</td>
                      <td><?php if ($data['juni']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tgljun']; ?></td>
                    </tr>

        <?php }
        ?>
<?php }

        ?>
      </table>
    </div>
  </div>

<br>
<br>
</body>
</html>