<?php
/*
    echo "".$_SESSION['nama_pegawai']."";*/
    $id_pegawai = $_SESSION['id_pegawai'];
    //echo "$nama_pegawai";

?>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Jadwal Mengajar </a>
  </li>
</ol>
<div class="card mb-3">
  <div class="card-header">
   	<i class="fa fa-table"></i> Jadwal Mengajar </div>
     <div class="card-body">
      <div class="form-group">
    </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Guru </th>
                  <th>Mata Pelajaran</th>
                  <th>Kelas</th>
                  <th>Hari</th>
                  <th>Waktu</th>
                </tr>
              </thead>
              <tfoot>
              <?php

                include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM jadwalguru WHERE id_pegawai='$id_pegawai'")or die(mysqli_error($konek));
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['nama_pegawai'].'</td>';
                        echo '<td>'.$data['mata_pelajaran'].'</td>';
                        echo '<td>'.$data['kelas_mengajar'].'</td>';
                        echo '<td>'.$data['hari_mengajar'].'</td>';
                        echo '<td>'.$data['waktu_mengajar'].'</td>';
                        $no++;  
                      }
                    }
              
                ?>
              </tbody>
            </table>
          </div>
        </div>
       
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->