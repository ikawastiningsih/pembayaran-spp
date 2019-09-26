<?php

  session_start();

 if (isset($_SESSION['id_pegawai']))
  {
     include 'config/koneksi.php';
  }
  else{
    header('location:index.php');
  }
  
  if (isset($_GET['konten'])) $konten = $_GET['konten'];
  else $konten = "home";

  $id_pegawai= $_SESSION['id_pegawai'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sistem Pembayaran</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="bootstrap/css/sb-admin.css" rel="stylesheet">
  <script src="jquery-3.3.1.min.js"></script>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="home.php">Sistem Pembayaran</a> 
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <div style="float: center;"></div>
       
   <?php
  include 'config/koneksi.php';

    echo '<center><img src="gambar/logo.png" height= "80px" width = "80px"> </center>';
    echo "<font color='white'><center>TATA USAHA</center></font>";
    ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Beranda">
          <a class="nav-link" href="home.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Beranda</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Siswa">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Data Siswa</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="home.php?konten=sepuluh">Kelas X</a>
            </li>
            <li>
              <a href="home.php?konten=sebelas">Kelas XI</a>
            </li>
            <li>
              <a href="home.php?konten=duabelas">Kelas XII</a>
            </li>
            <li>
              <a href="home.php?konten=alumni">Alumni</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Rekapitulasi</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="home.php?konten=coba">Tabungan Siswa</a>
            </li>
            
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Pembayaran SPP</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
               <li>
              <a href="home.php?konten=rekapbulanan">Perbulan</a>
            </li>
            <li>
              <a href="home.php?konten=rekaptahun">Pertahun</a>
            </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Tambah</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="home.php?konten=tambahdatasiswa">Tambah Data Siswa</a>
            </li>
            <li>
              <a href="home.php?konten=tambahta">Tambah Tahun Ajaran</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pembayaran SPP">
          <a class="nav-link" href="home.php?konten=pembayaran">
            <i class="fa fa-fw fa-clipboard"></i>
            <span class="nav-link-text">Pembayaran SPP</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tabungan Siswa">
          <a class="nav-link" href="home.php?konten=tabungan">
            <i class="fa fa-fw fa-clipboard"></i>
            <span class="nav-link-text">Tabungan</span>
          </a>
        </li>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="config/logout.php" id="logout">
            <i class="fa fa-fw fa-sign-out"></i>
            <span class="nav-link-text">Log Out</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Isi Konten -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <?php
            // jika id session tidak ditemukan, maka diarahkan ke halaman login admin
            // if (!isset($_SESSION['id_pegawai']))
            // {   
            //         header('location:index.php');
            // }

          if ($konten=='home')
            include 'beranda.php';
          elseif ($konten=='sepuluh')
            include 'sepuluh.php';
          elseif ($konten=='sebelas')
            include 'sebelas.php';
          elseif ($konten=='duabelas')
            include 'duabelas.php';
          elseif ($konten=='alumni')
            include 'alumni.php';
          elseif ($konten=='tambahdatasiswa')
            include 'tambahdatasiswa.php';
           elseif ($konten=='editdatasiswa')
            include 'editdatasiswa.php';
           elseif ($konten=='profilsiswa')
            include 'profilsiswa.php';
          elseif ($konten=='jadwalguru')
            include 'jadwalguru.php';
           elseif ($konten=='tambahjadwalguru')
            include 'tambahjadwalguru.php';
          elseif ($konten=='pembayaran')
            include 'pembayaran.php';
          elseif ($konten=='rekapbulanan')
            include 'rekapbulanan.php';
          elseif ($konten=='rekaptahun')
            include 'rekaptahun.php';
          elseif ($konten=='tambahta')
            include 'tambahta.php';
          elseif ($konten=='tambahspp')
            include 'tambahspp.php';
          elseif ($konten=='tambahsiswabaru')
            include 'tambahsiswabaru.php';
          elseif ($konten=='editta')
            include 'editta.php';
          elseif ($konten=='alumni')
            include 'alumni.php';
          elseif ($konten=='rekaptabungan')
            include 'rekaptabungan.php';
          elseif ($konten=='tabungan')
            include 'tabungan.php';
          elseif ($konten=='cetaksepuluh')
            include 'cetaksepuluh.php';
          elseif ($konten=='cetaksebelas')
            include 'cetaksebelas.php';
          elseif ($konten=='cetakduabelas')
            include 'cetakduabelas.php';
           elseif ($konten=='cetakbulanan')
            include 'cetakbulanan.php';
          elseif ($konten=='histori')
            include 'histori.php';
           elseif ($konten=='coba')
            include 'coba.php';
          elseif ($konten=='tambahtanggal')
            include 'tambahtanggal.php';

      ?>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Ika Wastiningsih | 2015230010 | Kerja Praktek | Teknik Informatika | Universitas Darma Persada
          </small>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
<script type="text/javascript">
  $(function(){
      $('a#logout').click(function(){
          if(confirm('Are you sure to logout?')) {
              return true;
          }
          return false;
      });
  });  
</script>
