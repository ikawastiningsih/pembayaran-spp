<?php

include'config/koneksi.php';

?>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#"> Rekap Pembayaran SPP </a>
  </li>
</ol>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Rekap Pembayaran SPP </div>
     <div class="card-body">
  <div class="table-responsive">
   <form action="" method="POST">
    <thead>
    <tbody>
    <tr>
    <td>
    <select name="bln" class="form-control">
      <option>--Pilih--</option>
      <option value="01">Januari</option>
      <option value="02">Februari</option>
      <option value="03">Maret</option>
      <option value="04">April</option>
      <option value="05">Mei</option>
      <option value="06">Juni</option>
      <option value="07">Juli</option>
      <option value="08">Agustus</option>
      <option value="09">September</option>
      <option value="10">Oktober</option>
      <option value="11">November</option>
      <option value="12">Desember</option>
    </select>
    </td>
    <br>
    <td>
    <select name="thn" class="form-control">
      <?php
        $mulai= date('Y') - 50;
        for($i = $mulai;$i<$mulai + 120;$i++){
        $sel = $i == date('Y') ? ' selected="selected"' : '';
        echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
      }
      ?>
    </select>
    </td>
    <br>
      <td align="center"><button type="submit" class="btn btn-info btn-block" name="cari">Pilih</button></td>
      </tr>
      <br>
      <br>
      </div>

    <?php

    if(isset($_POST['cari'])){

      $bln = $_POST['bln'];
      $thn = $_POST['thn'];
                    
    ?>


   <script>

   window.location = 'home.php?konten=rekapbulanan&&bln=<?php echo $bln; ?>&&thn=<?php echo $thn; ?>';

   </script> 


 <?php
   }
                    
 ?>

      <?php
        if(isset($_GET['bln'])&& isset($_GET['thn'])){
                   
        ?>

      <table class="table table-bordered" id="" width="100%" cellspacing="0">
      <thead>
      <tbody>
      <tr>
      <th class="bg-info"><center>No</center></th>
      <th class="bg-info"><center>NIS</center></th>
      <th class="bg-info"><center>Tahun Ajaran</center></th>
      <th class="bg-info"><center>Tahun</center></th>
      <th class="bg-info"><center>Nama Siswa</center></th>
      <th class="bg-info"><center>Kelas</center></th>
      <th class="bg-info"><center>Bulan</center></th>
      <th class="bg-info"><center>Tanggal Pembayaran</center></th>
      </tr>

        <?php

        $bln = $_GET['bln'];
        $thn = $_GET['thn'];

        include 'config/koneksi.php'; 

        $no = 1;
        $query1 = "SELECT * FROM master_spp where month(tgl_pembayaran) = '$bln' and year(tgl_pembayaran) = '$thn'";

        $tampil1 = mysqli_query($konek, $query1);


        ?>


        <?php
        if(!mysqli_num_rows($tampil1)) {
          echo "Tidak ada data!";

          } else {
          while($row = mysqli_fetch_array($tampil1)) { ?>
          <tr>
          <td><center><?php echo $no++; ?></center></td>
          <td><center><?php echo $row['nis']; ?></center></td>
          <td><center><?php echo $row['tahunajaran']; ?></center></td>
          <td><center><?php echo $row['tahun']; ?></center></td>
          <td><center><?php echo $row['nama_siswa']; ?></center></td>
          <td><center><?php echo $row['kelas']; ?></center></td>
          <td><center><?php echo $row['bulan']; ?></center></td>
          <td><center><?php echo date ('d-m-Y', strtotime(($row ['tgl_pembayaran']))); ?></center></td>
          </tr>


        <?php }

        ?>
                
        <a href="cetakbulanan.php?print=1&bln=<?php echo $_GET['bln'];?>&thn=<?php echo $_GET['thn']; ?>" target ="_blank" role="button" class="btn btn-primary pull-right" style="margin-right:16px;margin-bottom:10px;width:150px"><span class="fa fa-print"></span> Cetak Report</a>

        <?php }
         ?>

        </tbody>
        <?php

        $bln = $_GET['bln'];
        $thn = $_GET['thn'];
        $sum = "SELECT SUM(total) as tot FROM master_spp where month(tgl_pembayaran) = '$bln' and year(tgl_pembayaran) = '$thn'";
        $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
        $row1 = mysqli_fetch_array($tampil3);

        ?>

      <tr>
      <td colspan="7">Total Pemasukan : </td>
      <td><?php echo 'Rp.'. number_format($row1['tot']); ?></td>

        <?php }
        ?>

        </tbody>
       
      </thead>
      </table>
      </tbody>
      </thead>
      </table>
    </form>
    </tr>
  </thead>
</table>
</tbody>
</thead>
</table>
</form>
</div>
</div>
</div>
