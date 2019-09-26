<?php

error_reporting(0);
include 'config/koneksi.php';

?>
 <div> 
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
         $tampil1 = mysqli_query($konek, $query1);

         ?>
            
               <?php
        if(!mysqli_num_rows($tampil1)) {
          echo "Tidak ada data!";

          } else {
          while($row = mysqli_fetch_array($tampil1)) { ?>
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

<?php }

        ?>
                

        <?php }
         ?>

        </tbody>
       


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
  </div>
</label>
</div></form></div>