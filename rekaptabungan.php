
<?php
    error_reporting();

    include 'config/koneksi.php';

?>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#"> Rekap Tabungan Siswa</a>
        </li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Rekap Tabungan Siswa</div>
        <div class="card-body">
        <div>
         <form class="form-inline" action="" method="POST">
        <div class="form-group" style="float: right;">
         <input size="37px" type="text" name="pencarian" class="form-control" placeholder="Pencarian">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i>Cari</button>
      </div>

          <div class="table-responsive" >
            <br>
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Pemasukan</th>
                  <th>Pengeluaran</th>
                  <th>Jumlah Tabungan</th>
                </tr>
              </thead>
              <tfoot>
              <?php

            include 'config/koneksi.php';
            
            $batas  = 10;
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
                $sql = "SELECT id_siswa, nis, nama_siswa, kelas, pemasukan, pengeluaran, sum(pemasukan), sum(pengeluaran), sum(pemasukan) - sum(pengeluaran) as jumlah FROM tabungan WHERE nis LIKE '%$pencarian%' OR nama_siswa LIKE '%$pencarian%' ORDER BY nis";
                $query = $sql;
                $queryJml = $sql;
                $total = $row['jumlah'];
                echo $total;
              } else {
                $query = "SELECT id_siswa, nis, nama_siswa, kelas, sum(pemasukan), sum(pengeluaran), sum(pemasukan) - sum(pengeluaran) as jumlah FROM tabungan group by id_siswa ASC LIMIT $posisi, $batas ";
                $queryJml = "SELECT id_siswa, nis, nama_siswa, kelas, sum(pemasukan), sum(pengeluaran), sum(pemasukan) - sum(pengeluaran) as jumlah FROM tabungan group by id_siswa ";
                $no = $posisi + 1;
                $total = $data['jumlah'];
                echo $total;
              }
            } else {
              $query = "SELECT id_siswa, nis, nama_siswa, kelas, sum(pemasukan), sum(pengeluaran), sum(pemasukan) - sum(pengeluaran) as jumlah FROM tabungan group by id_siswa LIMIT $posisi, $batas ";
              $queryJml = "SELECT id_siswa, nis, nama_siswa, kelas, sum(pemasukan), sum(pengeluaran), sum(pemasukan) - sum(pengeluaran) as jumlah FROM tabungan group by id_siswa";
              $no = $posisi + 1;
            }

             // $total = $data['jumlah'];
             //    echo $total;


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
                        echo '<td>'.$data['nama_siswa'].'</td>';
                        echo '<td>'.$data['kelas'].'</td>';
                        echo '<td>'.$data['sum(pemasukan)'].'</td>';
                        echo '<td>'.$data['sum(pengeluaran)'].'</td>';
                        echo '<td>'.$data['jumlah'].'</td>';
                        $no++;  
                    }
                    
                ?>
              </tbody>
               <?php

          $sum = "SELECT count(jumlah) as total FROM tabungan";
          $tampil3 = mysqli_query($konek,$sum)or die(mysqli_error($konek));
          $row1 = mysqli_fetch_array($tampil3);

        ?>

      <tr>
      <td colspan="6">Total Pemasukan </td>
      <td><?php echo 'Rp.'. number_format($row1['total']); ?></td>

        <?php }
        ?>
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
            <a href="cetaktabungan.php" target="_BLANK" role="button" class="btn btn-primary pull-right" style="margin-right:16px;margin-bottom:10px;width:150px"><span class="fa fa-print"></span> Cetak Report</a>
          
        </div>
       </form>
     </div>
    </div>
