<?php
/*
    echo "".$_SESSION['nama_pegawai']."";*/
    $id_pegawai = $_SESSION['id_pegawai'];
    //echo "$nama_pegawai";

?>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Rekap Gaji </a>
  </li>
</ol>

<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Rekap Gaji Bulanan </div>
     <div class="card-body">
      <div class="form-group">
        <div class="col-sm-1" align="Right">
         <a href="homekepsek.php?konten=tambahakun"> <button class="btn btn-success">Cetak Slip Gaji</button></a>
         </div>
    </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Bulan</th>
                  <th>Jumlah Jam</th>
                  <th>Tarif Mengajar</th>
                  <th>Jumlah Masuk</th>
                  <th>Tunjangan</th>
                </tr>
              </thead>
              <tfoot>
              <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'")or die(mysqli_error($konek));
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
                        $no++;  
                      }
                    }
              
                ?>
              </tbody>
            </table>
          </div>
        </div>
       
    </div>
    