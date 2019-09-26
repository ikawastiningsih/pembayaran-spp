
<?php

include 'config/koneksi.php';

?>
  


<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#"> Pembayaran </a>
  </li>
</ol>
<div class="card mb-3">
  <div class="card-header">
   	<i class="fa fa-table"></i> Pembayaran Siswa </div>
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
            //echo $nis;

             $query  = mysqli_query($konek, "SELECT id_siswa, nis, tahunajaran, nama_siswa, kelas, total_spp FROM datasiswa WHERE nis = '$nis'")or die(mysqli_error($konek));
            if(mysqli_num_rows($query) == 0){   
            
            }
            else{
              $data           = mysqli_fetch_array($query);
              $id_siswa       = $data['id_siswa'];
        }

            
       
    ?>

        </form>
        <form action="config/pembayaranproses.php" method="POST">
            <br>
            
            <input class="form-control" type = "hidden" name="id_siswa" value="<?php echo $id_siswa; ?>" required></label>
            
            <div class="form-group">
            <label class="col-sm-3">Nomer Induk Siswa </label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-4"><input class="form-control" name="nis" type="text" value="<?php echo $nis ?>" required></label>
          </div>

          <div class="form-group">
              <label class="col-sm-3">Tahun Ajaran</label>
              <label class="col-sm-1">:</label>
              <label class="col-sm-4">
              <select class="form-control" name="tahunajaran" id="tahunajaran" required>
              <option>Pilih Tahun Ajaran</option>
                    <?php
                    $ta = "SELECT * FROM tahun_ajaran";
                    $queryta = mysqli_query($konek,$ta);
                    while ($tampilta = mysqli_fetch_array($queryta)) { ?>
                    <option value="<?php echo $tampilta['tahunajaran'] ?>"><?php echo $tampilta["tahunajaran"] ?>
                    </option>
                    
                    <?php
                    }
                    ?>
                   </select>
            </div>
          <div class="form-group">
            <label class="col-sm-3">Nama Siswa</label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-4"><input class="form-control" name="nama_siswa" type="text" value="<?php echo $data['nama_siswa']; ?>" required></label>
          <div class="form-group">
          </div>
          <div class="form-group">
            <label class="col-sm-3">Kelas</label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-4"><input class="form-control" name="kelas" type="text" value="<?php echo $data['kelas']; ?>" required></label>
          </div>
          <div class="form-group">
            <label class="col-sm-3">Pilih Bulan</label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-4">
              <select class="form-control" id="bulan" name="bulan">
                        <option>Pilih Bulan</option>
                        <option value="januari">Januari</option>
                        <option value="februari">Februari</option>
                        <option value="maret">Maret</option>
                        <option value="april">April</option>
                        <option value="mei">Mei</option>
                        <option value="juni">Juni</option>
                        <option value="juli">Juli</option>
                        <option value="agustus">Agustus</option>
                        <option value="september">September</option>
                        <option value="oktober">Oktober</option>
                        <option value="november">November</option>
                        <option value="desember">Desember</option>
              </select> 
          </div>  
          <div class="form-group">
            <label class="col-sm-3">Total Pembayaran</label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-4"><input class="form-control" name="total" type="text" value="<?php echo $data['total_spp']; ?>" readonly></label>
          </div>
            <label class="col-sm-3"></label>
            <label class="col-sm-1"></label>
            <div class="col-sm-8" align="Right">
              <button class="btn btn-success">Tambah</button>
            </div>
          </div>
        </form>
        

        <br>
         <form action="" method="POST">

          <div class="form-group">
            <label class="col-sm-3">Nomer Induk Siswa </label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-4"><input class="form-control" name="nis" type="text" value="<?php echo $nis ?>" required></label>
          </div>
          <div class="form-group">
              <label class="col-sm-3">Tahun Ajaran</label>
              <label class="col-sm-1">:</label>
              <label class="col-sm-4">
              <select class="form-control" name="tahunajaran" id="tahunajaran" required>
              <option>Pilih Tahun Ajaran</option>
                    <?php
                    $ta = "SELECT * FROM tahun_ajaran";
                    $queryta = mysqli_query($konek,$ta);
                    while ($tampilta = mysqli_fetch_array($queryta)) { ?>
                    <option value="<?php echo $tampilta['tahunajaran'] ?>"><?php echo $tampilta["tahunajaran"] ?>
                    </option>
                    
                    <?php
                    }
                    ?>
                   </select>
            </div>
         <button type="submit" button class="btn btn-success" name="cek">Cek Pembayaran Siswa</button></a>  
         <br>
<?php
                    }
                    ?>
         <?php

        if(isset($_POST['cek'])){

          $nis          = $_POST['nis'];
          $tahunajaran  = $_POST['tahunajaran'];
                    
         ?>


   <script>

   window.location = 'home.php?konten=pembayaran&&nis=<?php echo $nis; ?>&&tahunajaran=<?php echo $tahunajaran; ?>';

   </script> 
    
    <?php
    }
                    
    ?>

      <?php
        if(isset($_GET['nis'])&& isset($_GET['tahunajaran'])){
                   
        ?>

<br>
<br>
<?php

        include 'config/koneksi.php';


        
            $nis = $_GET['nis'];
            //echo $nis;

             $query  = mysqli_query($konek, "SELECT id_siswa, nis, tahunajaran, nama_siswa, kelas, total_spp FROM datasiswa WHERE nis = '$nis'")or die(mysqli_error($konek));
            if(mysqli_num_rows($query) == 0){   
            
            }
            else{
              $data           = mysqli_fetch_array($query);
              $id_siswa       = $data['id_siswa'];
        }
       
    ?>


<form action="" method="POST">
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
              <label class="col-sm-3">Tahun Ajaran</label>
              <label class="col-sm-1">:</label>
              <label class="col-sm-4">
              <select class="form-control" name="tahunajaran" id="tahunajaran" required>
              <option>Pilih Tahun Ajaran</option>
                    <?php
                    $ta = "SELECT * FROM tahun_ajaran";
                    $queryta = mysqli_query($konek,$ta);
                    while ($tampilta = mysqli_fetch_array($queryta)) { ?>
                    <option value="<?php echo $tampilta['tahunajaran'] ?>"><?php echo $tampilta["tahunajaran"] ?>
                    </option>
                    
                    <?php
                    }
                    ?>
                   </select>
            </div>
          <div class="form-group">
            <label class="col-sm-3">Nama Siswa</label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-4"><input class="form-control" name="nama_siswa" type="text" value="<?php echo $data['nama_siswa']; ?>" required></label>
          <div class="form-group">
          </div>
          <div class="form-group">
            <label class="col-sm-3">Kelas</label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-4"><input class="form-control" name="kelas" type="text" value="<?php echo $data['kelas']; ?>" required></label>
          </div>
          <div class="form-group">
            <label class="col-sm-3">Pilih Bulan</label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-4">
              <select class="form-control" id="bulan" name="bulan">
                        <option>Pilih Bulan</option>
                        <option value="januari">Januari</option>
                        <option value="februari">Februari</option>
                        <option value="maret">Maret</option>
                        <option value="april">April</option>
                        <option value="mei">Mei</option>
                        <option value="juni">Juni</option>
                        <option value="juli">Juli</option>
                        <option value="agustus">Agustus</option>
                        <option value="september">September</option>
                        <option value="oktober">Oktober</option>
                        <option value="november">November</option>
                        <option value="desember">Desember</option>
              </select> 
          </div>  
          <div class="form-group">
            <label class="col-sm-3">Total Pembayaran</label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-4"><input class="form-control" name="total" type="text" value="<?php echo $data['total_spp']; ?>" readonly></label>
          </div>
            <label class="col-sm-3"></label>
            <label class="col-sm-1"></label>
            <div class="col-sm-8" align="Right">
              <button type="submit" formaction="config/pembayaranproses.php" button class="btn btn-success">Tambah</button>
            </div>
          </div>
        </form>

    <?php 
include 'config/koneksi.php';
 $tahunajaran = $_GET['tahunajaran'];
echo 'Tahun Ajaran '.$tahunajaran; ?>   
        
           <div class="table-responsive">
             <table class="table table-bordered" id="" width="100%" cellspacing="0">
              <thead>
                <tr align="center">
                <th>Bulan</th>
                <th>Keterangan</th>
                <th>Tanggal Pembayaran</th>
                </tr>
              </thead>

   
        <?php

        $nis          = $_GET['nis'];
        $tahunajaran  = $_GET['tahunajaran'];

        include 'config/koneksi.php'; 

        
        $query="SELECT id_siswa, id_spp, nis, tahunajaran, nama_siswa, kelas, juli, tgljuli, agustus, tglagus, september, tglsep, oktober, tglokt, november, tglnov, desember, tgldes, januari, tgljan, februari, tglfeb,  maret, tglmar, april, tglapr, mei, tglmei, juni, tgljun FROM spp_bulanan WHERE tahunajaran='$tahunajaran' AND nis = '$nis'";
         $tampil1 = mysqli_query($konek,$query) or die (mysqli_error($konek));
         
 /*        $data      = mysqli_fetch_array($query);
              
           */ 
         ?>
            
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
                      <td><?php echo $data['tglagus']; ?></td>
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
                    <tr align="left">
                      <td colspan="3"> <a href="cetakhistory.php?print=1&tahunajaran=<?php echo $_GET['tahunajaran'];?>&nis=<?php echo $_GET['nis']; ?>" target ="_blank" role="button" class="btn btn-primary pull-right" style="margin-right:16px;margin-bottom:10px;width:150px"><span class="fa fa-print"></span> Cetak Report</a>
                      </td></tr>

<?php }

        ?>
                

        <?php }
         ?>

      
       


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
