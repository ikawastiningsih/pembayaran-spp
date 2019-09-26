<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Beranda</a>
  </li>
</ol>
<div class="card-body">
    <script src="js/notifabsen.js"></script>
     <h4><p style="text-align:center">Anda Berhasil login sebagai KEPALA SEKOLAH</p></h4>
    <?php
    include '../config/koneksi.php';
    echo "<h3 align='center'>SELAMAT DATANG ".$_SESSION['nama_pegawai']."</h3>"
    ?>
    <h4><p style="text-align:center"></p></h4>
    <?php
    $tanggal = Date("Y-m-d");
    Echo "<h5 align='center'>$tanggal</p></h5><br>";
    

    ?>

</div>
</div>
</div>
