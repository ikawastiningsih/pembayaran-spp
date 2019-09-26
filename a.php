<style>
  
  table {
      border-collapse: collapse;
      width: 100%;
  }

  th, td {
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even){background-color: #bbdfed;}

  th {
      background-color: #3bacd6;
      color: white;
  }

  td {
    font-size: 14px;
  }

</style>



<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
      <li class="active"><a href="#">Update</a> / Berita</li>
    </ol>
</div>
   
<div class="col-md-10" style="min-height:500px">
  <h3><b>Berita</b></h3>
  <hr>
     <form class="form-inline" action="" method="POST">
    <div class="form-group" style="float: right;">
      <input size="37px" type="text" name="pencarian" class="form-control" placeholder="Pencarian">
      <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
      <a href="admin.php?content=berita"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
    </div>
  </form>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle fa-fw"></i>Tambah Berita</button>
  <br>
  <br>
  <form class="form-horizontal" method="POST">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Tanggal</th>
          <th>Gambar</th>
          <th>Berita</th>
          <th colspan="2"><center>Action</center></th>
        </tr>
      </thead>
      <tbody>

          <?php

            include '../config/koneksi.php';
            error_reporting(0);

            $batas  = 8;
            $hal    = @$_GET['hal'];
            if (empty($hal)) {
              $posisi = 0;
              $hal    = 1;
            } else {
              $posisi = ($hal - 1) * $batas;
            }
            if($_SERVER['REQUEST_METHOD'] == "POST") {
              $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
              if ($pencarian != '') {
                $sql = "SELECT id_berita, judul, tgl_berita, gambar, berita FROM tbl_berita WHERE judul LIKE '%$pencarian%' OR tgl_berita LIKE '%$pencarian%' ORDER BY id_berita DESC";
                $query = $sql;
                $queryJml = $sql;
              } else {
                $query = "SELECT id_berita, judul, tgl_berita, gambar, berita FROM tbl_berita ORDER BY id_berita DESC LIMIT $posisi, $batas ";
                $queryJml = "SELECT id_berita, judul, tgl_berita, gambar, berita FROM tbl_berita ORDER BY id_berita DESC";
                $no = $posisi + 1;
              }
            } else {
              $query = "SELECT id_berita, judul, tgl_berita, gambar, berita FROM tbl_berita ORDER BY id_berita DESC LIMIT $posisi, $batas ";
              $queryJml = "SELECT id_berita, judul, tgl_berita, gambar, berita FROM tbl_berita ORDER BY id_berita DESC";
              $no = $posisi + 1;
            }


            $querydata = mysqli_query($konek, $query)or die(mysqli_error());
                    if(mysqli_num_rows($querydata) == 0){ 
                      echo '<tr><td colspan="6" align="center"><i>Tidak ada data!</i></td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($querydata)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['judul'].'</td>';
                        echo '<td>'.$data['tgl_berita'].'</td>';
                        echo '<td>'.$data['gambar'].'</td>';
                        echo '<td><p align="justify">'.substr($data['berita'], 0,100).'&nbsp; ...</p></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=admin.php?content=edit-berita&&id_berita='.$data['id_berita'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/delete-berita.php?id_berita='.$data['id_berita'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
            ?>              
      </tbody>
    </table>
  </form>
    <?php
     if($_SERVER['REQUEST_METHOD'] == "POST") {
            $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
        echo "<div style=\"float:left;\">";
        $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
        echo "Data Hasil Pencarian: <b>$jml</b>";
        echo "</div>";
      } else { ?>
        <div style="float:left;">
          <?php
          $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
          echo "Jumlah Data: <b>$jml</b>";
          ?>
        </div>
        <div style="float:right;">
          <ul class="pagination pagination-sm" style="margin: 0">
            <?php
            $jml_hal = ceil($jml / $batas);
            for ($i=1; $i <= $jml_hal; $i++) {
              if ($i != $hal) {
                echo "<li><a href=\"admin.php?content=berita&&hal=$i\">$i</a></li>";
              } else {
                echo "<li class=\"active\"><a>$i</a></li>";
              }
            }
          }
            ?>  
          </ul>
        </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="background-color:#3bacd6";>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <p align="center"><img src="../gambar/manda.png" alt="" height="100px" width="130px"></p>
            <p align="center"><font size="2px"><i>Sistem Informasi Pendaftaran SMK Mandalahayu II Bekasi</i></font></p>
            <h4 class="modal-title" align="center"><b>Tambahkan berita</b></h4>
          </div>
          <div class="modal-body">
            <form action="../config/add-berita.php" class="form-horizontal" method="POST"  enctype="multipart/form-data">
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-2">Judul</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="judul" placeholder="Judul" required>
                  </div>
              </div>
                    <input type="hidden" class="form-control" name="tgl_berita" placeholder="Tanggal" value="<?php $tgl=date('d-m-Y'); echo $tgl; ?>" required>
              <div class="form-group">
              	<label class="col-sm-1"></label>
                  <label class="col-sm-2">Gambar</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-7">
                       <input type="file" name="fileToUpload" id="fileToUpload">
                  </div>
              </div>
              <div class="form-group">
              	  <label class="col-sm-1"></label>
                  <label class="col-sm-2">Berita</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" id="inputlg" name="berita" placeholder="Berita" required>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-5"></label>
                  <div class="col-sm-6" align="right">
                      <button type="submit" class="btn btn-primary">Tambah Berita</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div>
  </div>
</div>
 <?php
     if($_SERVER['REQUEST_METHOD'] == "POST") {
            $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
        echo "<div style=\"float:left;\">";
        $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
        echo "Data Hasil Pencarian: <b>$jml</b>";
        echo "</div>";
      } else { ?>
        <div style="float:left;">
          <?php
          $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
          echo "Jumlah Data: <b>$jml</b>";
          ?>
        </div>
        <div style="float:right;">
          <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
            <?php
            $jml_hal = ceil($jml / $batas);
            for ($i=1; $i <= $jml_hal; $i++) {
              if ($i != $hal) {
                echo "<li class ='page link'><a class = 'page-link' href=\"home.php?konten=sepuluh&&hal=$i\">$i</a></li>";
              } else {
                echo "<li class =\"active\"><a>$i</a></li>";
              }
            }
          }
            ?>  
         <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>