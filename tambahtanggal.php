<style type="text/css">
.table1 {
    font-family: sans-serif;
     font-size: 15px;
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
<form class="form-horizontal" action="config/tambahtenggatproses.php" method="POST">
	 <ol class="breadcrumb">
        <li class="active"><b>Tambah Tenggat Waktu</b></li>
         </ol>
          <?php
    		include 'config/koneksi.php';
    		?>
    		<br>
	<div class="form-group">
            <label class="col-sm-3">Pilih Bulan</label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-4">
              <select class="form-control" id="bulan" name="bulan">
                        <option>Pilih Bulan</option>
                        <option value="januari">Januari</option>
                        <option value="februari">Februari</option>
                        <option value="maret">Maret</option>
                        <option value="april">April</option>
                        <option value="mei">Mei</option>
                        <option value="juni">Juni</option>
                        <option value="juli">Juli</option>
                        <option value="agustus">Agustus</option>
                        <option value="september">September</option>
                        <option value="oktober">Oktober</option>
                        <option value="november">November</option>
                        <option value="desember">Desember</option>
              </select> 
          </div>  
  <div class="form-group">
    <label class="col-sm-3">Tanggal Awal</label>
    <label class="col-sm-1">:</label>
    <label class="col-sm-4">
      <input class="form-control input-md" class="input-group date" name="awal" type="date" placeholder="Masukkan tanggal lahir anda" required>
  </div>
  <div class="form-group">
    <label class="col-sm-3">Tanggal Akhir</label>
    <label class="col-sm-1">:</label>
    <label class="col-sm-4">
      <input class="form-control input-md" class="input-group date" name="akhir" type="date" placeholder="Masukkan tanggal lahir anda" required>
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
			<th>No.</th>
      <th>Bulan</th>
			<th>Tanggal Awal</th>
      <th>Tanggal Akhir</th>
      <th colspan="2"><center>Aksi</center></th>
		</tr>
 </form>
		 <?php

            include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tenggat")or die(mysqli_error($konek));
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['bulan'].'</td>';
                        echo '<td>'.$data['awal'].'</td>';
                        echo '<td>'.$data['akhir'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=home.php?konten=edittenggat&&id_tenggat='.$data['id_tenggat'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Hapus" href=config/deletetaproses.php?id_tenggat='.$data['id_tenggat'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                        $no++;  
                      }
                    }
              
                ?>
       
	</table>	
</div>
</div>

<br>

