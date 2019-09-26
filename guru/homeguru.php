<?php

  session_start();
  if (isset($_SESSION['id_pegawai']))
  {
     include '../config/koneksi.php';
  }


  if (isset($_GET['konten'])) $konten = $_GET['konten'];
  else $konten = "homeadmin";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sistem Penggajian</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="bootstrap/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Sistem Penggajian</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Beranda">
          <a class="nav-link" href="homeguru.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Beranda</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="homeguru.php?konten=jadwalguru">
            <i class="fa fa-fw fa-clipboard"></i>
            <span class="nav-link-text">Jadwal Mengajar</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="homeguru.php?konten=rekapabsen">
            <i class="fa fa-fw fa-th-list"></i>
            <span class="nav-link-text">Rekap Kehadiran</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="homeguru.php?konten=rekapgaji">
            <i class="fa fa-fw fa-th-chart"></i>
            <span class="nav-link-text">Rekap Gaji</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="homeguru.php?konten=profilguru">
            <i class="fa fa-fw fa-address-card"></i>
            <span class="nav-link-text">Profil Saya</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="homekepsek.php?konten=kelolaakun">
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
          if ($konten=='homeguru')
            include 'berandaguru.php';
          elseif ($konten=='profilguru')
            include 'profilguru.php';
           elseif ($konten=='absensi')
            include 'absensi.php';
          elseif ($konten=='jadwalguru')
            include 'jadwalguru.php';
          elseif ($konten=='editakunguru')
            include 'editakunguru.php';
          elseif ($konten=='rekapgaji')
            include 'rekapgaji.php';
          elseif ($konten=='rekapabsen')
            include 'rekapabsen.php';
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
