<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Data Pegawai</a>
  </li>
</ol>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Data Pegawai SMK Jayakarta</div>
    <div class="table-responsive"><br>
      <div class="col-sm-1" align="Right">
         <a href="homeadmin.php?konten=tambahakun"> <button class="btn btn-success">Tambah Akun</button></a>
      </div>
      <br>
      <table class="table table-bordered" id="" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Pegawai</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>No. Handohone</th>
            <th>Alamat</th>
            <th>Status</th>
            <th colspan="3"><center>Aksi</center></th>
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
                  echo '<td>'.$data['tanggallahir_pegawai'].'</td>';
                  echo '<td>'.$data['nohp_pegawai'].'</td>';
                  echo '<td>'.$data['alamat_pegawai'].'</td>';
                  echo '<td>'.$data['level'].'</td>';
                  echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=homeadmin.php?konten=editakunpegawai&&id_pegawai='.$data['id_pegawai'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                  echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Hapus" href=../config/deletepegawaiproses.php?id_pegawai='.$data['id_pegawai'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                  echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Detail" href=homeadmin.php?konten=profilpegawai&&id_pegawai='.$data['id_pegawai'].'><i class="fa fa-info fa-fw"></i></a></td>';
                  $no++;  
                }
              }
        
          ?>

        </tbody>
      </table>
      <a href="cetakpegawai.php" target="_BLANK" role="button" class="btn btn-primary pull-right" style="margin-right:16px;margin-bottom:10px;width:150px"><span class="fa fa-print"></span> Cetak Report</a>
    </div>
  </div>