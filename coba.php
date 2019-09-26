
<?php
    error_reporting(0);

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
            
            

          $query = mysqli_query($konek, "SELECT id_siswa, nis, nama_siswa, kelas, sum(pemasukan), sum(pengeluaran), sum(pemasukan) - sum(pengeluaran) as jumlah FROM tabungan group by id_siswa")or die(mysqli_error());
        
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
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
              }
              ?>

<?php
        $query = mysqli_query($konek, "SELECT id_siswa, nis, nama_siswa, kelas, sum(pemasukan), sum(pengeluaran), sum(pemasukan) - sum(pengeluaran) as jumlah FROM tabungan group by id_siswa")or die(mysqli_error());
        
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                // $no = 1;        
                while($data = mysqli_fetch_assoc($query)){  
                        $total += $data[jumlah];                          
                    }
              }
        // $sum = mysqli_query($konek,"SELECT SUM(IF('$jumlah')) as totaltabungan FROM tabungan")or die(mysqli_error($konek));
        // echo $totaltabungan;
        // $total=$data['jumlah'];
        //echo $total;
        // $totaltabungan= sum($total);
        // $total = 0;
        
        // $data  = mysqli_fetch_array($sum);
       
        // $total += $data['jumlah'];
  
?>

       <tr>
      <td colspan="6">Total Pemasukan Tabungan : </td>
      <td><?php echo 'Rp.'. number_format($total); ?></td>

        <?php 
        ?>
            </tbody>
            </table>
          </tfoot>
        </table>
      </form>
  
        </div>
        <div style="float:right;">
          <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
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
