 <div class="col-sm-12" align="center">
  <form method="POST" action="config/absentuproses.php">
    <input type="hidden" name="nama_pegawai" value="<?php echo $_SESSION['nama_pegawai']; ?>">
    <input type="hidden" name="id_pegawai" value="<?php echo $_SESSION['id_pegawai']; ?>">
     <button type="submit" class="btn btn-primary" onclick="masukabsen(<?php echo $id_pegawai ?>)" value="Absensi">Absensi</button>  
  </form>
  </div>