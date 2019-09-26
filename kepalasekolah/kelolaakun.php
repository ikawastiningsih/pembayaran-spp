<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Beranda Kepala Sekolah / Data Pegawai </a>
  </li>
</ol>
<div class="card mb-3">
  <div class="card-header">
   	<i class="fa fa-table"></i> Daftar Akun </div>
     <div class="card-body">
      <div class="form-group">
    </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>No. Handphone</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th colspan="2"><center>Aksi</center></th>
                </tr>
              </thead>
              <tfoot>
              <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM pegawai")or die(mysqli_error());
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
                        echo '<td>'.$data['jk_pegawai'].'</td>';
                        echo '<td>'.$data['nohp_pegawai'].'</td>';
                        echo '<td>'.$data['username'].'</td>';
                        echo '<td>'.$data['password'].'</td>';
                        echo '<td>'.$data['level'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=homekepsek.php?konten=editakunpegawai&&id_pegawai='.$data['id_pegawai'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/delete-calon-murid.php?id_calon_murid='.$data['id_pegawai'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                        echo '</tr>';
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