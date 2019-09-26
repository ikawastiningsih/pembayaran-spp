<?php

error_reporting(0);
include 'config/koneksi.php';

?>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#"> Tabungan </a>
  </li>
</ol>
<div class="card mb-3">
  <div class="card-header">
   	<i class="fa fa-table"></i> Tabungan Siswa </div>
     <div class="card-body">
      <div class="form-group">
	  </div>     
	 
<form class="form-horizontal" method="POST">
    <div>
    <form>
  		<div class="input-group">
    	<input type="text" class="form-control" placeholder="Masukkan Nomer Induk Siswa Disini" name="nis">
    	<div class="input-group-btn">
      	<button class="btn btn-default" type="submit" value="pencarian" name="cari">
          <i class="fa fa-fw fa-search"></i>
        </button>
	    </div>
  	</div>
  	</div>
    <?php

        include 'config/koneksi.php';


        if(isset($_POST['cari'])){
            $nis = $_POST['nis'];
        }

        $query  = mysqli_query($konek, "SELECT id_siswa, nis, nama_siswa, kelas FROM datasiswa WHERE nis = '$nis'")or die(mysqli_error($konek));
            if(mysqli_num_rows($query) == 0){   
            
            }
            else{
              $data           = mysqli_fetch_array($query);
              $id_tabungan    = $data['id_tabungan'];
              $id_siswa       = $data['id_siswa'];
    ?>
        </form>
        <form action="config/tambahtabunganproses.php" method="POST">
        <br>
          <div class="form-group">
            <label class="col-sm-3">ID siswa </label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-4">
            <input class="form-control" name="id_siswa" value="<?php echo $id_siswa; ?>" required></label>
          </div>
          <div class="form-group">
            <label class="col-sm-3">Nomer Induk Siswa </label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-4"><input class="form-control" name="nis" type="text" value="<?php echo $nis ?>" required></label>
          </div>
          <div class="form-group">
            <label class="col-sm-3">Nama Siswa</label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-4"><input class="form-control" name="nama_siswa" type="text" value="<?php echo $data['nama_siswa']; ?>" required></label>
          </div>
          <div class="form-group">
            <label class="col-sm-3">Kelas</label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-4"><input class="form-control" name="kelas" type="text" value="<?php echo $data['kelas']; ?>" required></label>
          </div>
          <div class="form-group">
          <label class="col-sm-3">Masukkan Jumlah</label>
          <label class="col-sm-1">:</label>
          <label class="col-sm-4"><input class="form-control" type="text" name="jumlah" placeholder="Masukkan Jumlah" required></label>
          </div>
            <label class="col-sm-3"></label>
            <label class="col-sm-1"></label>
            <div class="col-sm-8" align="Right">
            <button class="btn btn-success" button name="tabungan" value="tambah">Pemasukan</button></a>
            <button class="btn btn-success" button name="tabungan" value="kurang">Pengeluaran</button></a><br><br>
            </div>
          </div>
        </form>
        <div class="table-responsive">
          <table class="table table-bordered" id="" width="100%" cellspacing="0">
           <thead>
              <tr align="center">
              <th>No.</th>
              <th>NIS</th>
              <th>Nama</th>
              <th>Pemasukan</th>
              <th>Pengeluaran</th>
              <th>Tanggal Transaksi</th>
              
              </tr>
              
              <?php

            include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tabungan WHERE nis = '$nis'")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td align="center">'.$no.'</td>';
                        echo '<td align="center">'.$data['nis'].'</td>';
                        echo '<td align="center">'.$data['nama_siswa'].'</color></td>';
                        echo '<td style="background-color:#cccccc;" align="center">'.$data['pemasukan'].'</td>';
                        echo '<td style="background-color:#b3d9ff;" align="center">'.$data['pengeluaran'].'</td>';
                        echo '<td align="center">'.$data['tanggal_transaksi'].'</td>';
                        
                        
                        $no++;  
                      }
                    }
              
                ?>
        <?php

        $sum = "SELECT SUM(pemasukan) - SUM(pengeluaran) as tot FROM tabungan WHERE nis = '$nis'";
        $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
        $row1 = mysqli_fetch_array($tampil3);

        ?>
               <tr>
      <td colspan="5">Total Tabungan : </td>
      <td><?php echo 'Rp.'. number_format($row1['tot']); ?></td>

        <?php
        ?>

              </tr>
              </thead>
              </table>
            </div>
    <?php
        }
    ?>
</div>