<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Beranda</a>
  </li>
</ol>
<script src="js/custom_absen.js"></script>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Daftar Hadir</div>
  <div class="card-body">
    <script src="js/notifabsen.js"></script>
    <?php
    include '../config/koneksi.php';
    echo "<h3 align='center'>SELAMAT DATANG ".$_SESSION['nama_pegawai']."</h3>"
    ?>
    <br>
    <h4><p style="text-align:center">Silahkan absen disini!</p></h4>
    <br>
    <?php
    $tanggal = Date("Y-m-d");
    Echo "<h5 align='center'>$tanggal</p></h5><br>";
    

    ?>

 <div class="col-sm-12" align="center">
  <form method="POST" action="../config/absenproses.php">
    <input type="text" name="nama_pegawai" value="<?php echo $_SESSION['nama_pegawai']; ?>">
    <input type="text" name="id_pegawai" value="<?php echo $_SESSION['id_pegawai']; ?>">
     <input type="submit" class="btn btn-info btn-lg" onclick="masukabsen(<?php echo $id_pegawai ?>)" value="Absensi">
     <?php
   $query4 = "SELECT * FROM `absensi` WHERE `tanggal_absensi` LIKE '%$jam_absensi%' AND `id_pegawai` ='$id_pegawai'";
  $eksekusi4 = mysqli_query($konek,$query4);
  $jumlahcons = mysqli_num_rows($eksekusi4);
  ?>
     <h1><span class="glyphicon glyphicon-ok" id="absenok" <?php if ($jumlahcons == 0)  { ?> style="display:none;"<?php } ?>></span></h1>
    <h1><span class="glyphicon glyphicon-remove" id="absennotok"  <?php if ($jumlahcons > 0)  { ?> style="display:none;"<?php } ?>></span></h1>
  </div>
  </form>
</div>
</div>
</div>
</div>

  