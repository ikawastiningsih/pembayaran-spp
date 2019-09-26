
<?php
    error_reporting();

    include 'config/koneksi.php';

?>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Data Siswa</a>
        </li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Siswa Kelas X </div>
        <div class="card-body">
          <div class="col-sm-1" align="Right">
          <a href="config/updatekelassepuluh.php"> <button class="btn btn-success">Update Naik Kelas</button></a><br><br>
         </div>
        <div>
         <form class="form-inline" action="" method="POST">
        <div class="form-group" style="float: right;">
         <input size="37px" type="text" name="pencarian" class="form-control" placeholder="Pencarian">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i>Cari</button>
      </div>

          <div class="table-responsive">
            <br>
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>NIS</th>
                  <th>NISN</th>
                  <th>Nama Siswa</th>
                  <th>Jenis Kelamin</th>
                  <th>Kelas</th>
                  <th>Tanggal Lahir</th>
                  <th colspan="4"><center>Aksi</center></th>
                </tr>
              </thead>
              <tfoot>
              <?php

            include 'config/koneksi.php';
            $batas  = 4;
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
                $sql = "SELECT id_siswa, nis, nisn, nama_siswa, jk_siswa, kelas, tanggallahir_siswa FROM datasiswa WHERE nis LIKE '%$pencarian%' OR nama_siswa LIKE '%$pencarian%' ORDER BY nis";
                $query = $sql;
                $queryJml = $sql;
              } else {
                $query = "SELECT id_siswa, nis, nisn, nama_siswa, jk_siswa, kelas, tanggallahir_siswa FROM datasiswa WHERE kelas = 'Lulus' ORDER BY nis ASC LIMIT $posisi, $batas ";
                $queryJml = "SELECT id_siswa, nis, nisn, nama_siswa, jk_siswa, kelas, tanggallahir_siswa FROM datasiswa WHERE kelas = 'Lulus' ORDER BY nis ";
                $no = $posisi + 1;
              }
            } else {
              $query = "SELECT id_siswa, nis, nisn, nama_siswa, jk_siswa, kelas, tanggallahir_siswa FROM datasiswa WHERE kelas = 'Lulus' ORDER BY nis LIMIT $posisi, $batas ";
              $queryJml = "SELECT id_siswa, nis, nisn, nama_siswa, jk_siswa, kelas, tanggallahir_siswa FROM datasiswa WHERE kelas = 'Lulus' ORDER BY nis";
              $no = $posisi + 1;
            }


            $querydata = mysqli_query($konek, $query)or die(mysqli_error());
                    if(mysqli_num_rows($querydata) == 0){ 
                      echo '<tr><td colspan="8" align="center"><i>Tidak ada data!</i></td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($querydata)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['nis'].'</td>';
                        echo '<td>'.$data['nisn'].'</td>';
                        echo '<td>'.$data['nama_siswa'].'</td>';
                        echo '<td>'.$data['jk_siswa'].'</td>';
                        echo '<td>'.$data['kelas'].'</td>';
                        echo '<td>'.$data['tanggallahir_siswa'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=home.php?konten=editdatasiswa&&id_siswa='.$data['id_siswa'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Hapus" href=config/deletesiswaproses.php?id_siswa='.$data['id_siswa'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                         echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Detail" href=home.php?konten=profilsiswa&&id_siswa='.$data['id_siswa'].'><i class="fa fa-info fa-fw"></i></a></td>';
                        echo '</tr>';
                        $no++;  
                    }
                    }
                ?>
              </tbody>
            </table>
          </tfoot>
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
                echo "<li class ='page link'><a class = 'page-link'>$i</a></li>";
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
        </div>
      </div>
            <a href="cetakalumni.php" target="_BLANK" role="button" class="btn btn-primary pull-right" style="margin-right:16px;margin-bottom:10px;width:150px"><span class="fa fa-print"></span> Cetak Report</a>
          
        </div>
       </form>
     </div>
    </div>