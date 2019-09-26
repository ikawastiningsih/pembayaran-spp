<style type="text/css">
.table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}
 
.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}
 
.table1, th, td {
    padding: 8px 20px;
    text-align: center;
}
 
.table1 tr:hover {
    background-color: #f5f5f5;
}
 
.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>
<br>
<form class="form-horizontal" action="config/tambahsppproses.php" method="POST">
   <ol class="breadcrumb">
        <li class="active">Tambah Total SPP</b></li>
         </ol>
          <?php
        include 'config/koneksi.php';
        ?>
        <br>
  <div class="form-group">
    <label class="col-sm-3">Masukkan Total SPP Baru</label>
    <label class="col-sm-1">:</label>
    <label class="col-sm-4"><input class="form-control" type="text" name="total_spp" placeholder="Masukkan Total SPP Baru" required></label>
  </div>
  <div class="form-group">
     <label class="col-sm-3"></label>
     <label class="col-sm-1"></label>
     <div class="col-sm-8" align="Right">
     <button class="btn btn-success">Tambah</button>
    </div>
    <br>
    <div class="table-responsive" align="center">
     <table class="table1">
    <tr>
      <th>No</th>
      <th>Jumlah</th>
      <th colspan="2"><center>Aksi</center></th>
    </tr>
 </form>
     <?php

            include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM spp_master")or die(mysqli_error($konek));
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['total_spp'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=home.php?konten=editspp&&id_sppmaster='.$data['id_sppmaster'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Hapus" href=config/deletesppproses.php?id_sppmaster='.$data['id_sppmaster'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                        $no++;  
                      }
                    }
              
                ?>
       
  </table>  
</div>
</div>

<br>

