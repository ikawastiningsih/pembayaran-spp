<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Beranda</a>
  </li>
</ol>
<div class="card-body">
     <h4><p style="text-align:center">Anda Berhasil login sebagai TATA USAHA</p></h4>
    <?php
    include 'config/koneksi.php';
    echo "<h3 align='center'>SELAMAT DATANG ".$_SESSION['nama_pegawai']."</h3>"
    ?>
    <h4><p style="text-align:center"></p></h4>
    <?php
    $tanggal = Date("Y-m-d");
    Echo "<h5 align='center'>$tanggal</p></h5><br>";
    $bulan= date("m");
    echo "Bulan: $bulan";
    ?>

<br>
<br>

<?php
error_reporting(0);
include 'config/koneksi.php';


   echo '<table class="table table-bordered" id="" width="100%" cellspacing="0">';
   echo '<thead>';
   echo '<tr>';
   echo '<th><center>No.</center></th>';
   echo '<th><center>NIS</center></th>';
   echo '<th><center>Nama Siswa</center></th>';
   echo '<th><center>Kelas</center></th>';
   echo '<th><center>Keterangan</center></th>';
   echo '</tr>';

if ($bulan=='01')
   {
   $query = mysqli_query($konek, "SELECT id_siswa, nis, nama_siswa, kelas FROM spp_bulanan WHERE januari='0' order by nis")or die(mysqli_error());
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td><center>'.$data['nis'].'</center></td>';
                        echo '<td>'.$data['nama_siswa'].'</td>';
                        echo '<td><center>'.$data['kelas'].'</center></td>';
                         echo '<td><center>'.'Belum Bayar'.'</center></td>';
                         echo '</tr>';
                        $no++;    
                        $sum = "SELECT COUNT(nis) as total FROM spp_bulanan WHERE januari='0'";
                        $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
                        $row1 = mysqli_fetch_array($tampil3);
                      
                      
                    }
              }
          }
elseif ($bulan=='02')
   {
   $query = mysqli_query($konek, "SELECT id_siswa, nis, nama_siswa, kelas FROM spp_bulanan WHERE februari='0' order by nis")or die(mysqli_error());
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td><center>'.$data['nis'].'</center></td>';
                        echo '<td>'.$data['nama_siswa'].'</td>';
                        echo '<td><center>'.$data['kelas'].'</center></td>';
                         echo '<td><center>'.'Belum Bayar'.'</center></td>';
                         echo '</tr>';
                        $no++;    
                        $sum = "SELECT COUNT(nis) as total FROM spp_bulanan WHERE februari='0'";
                        $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
                        $row1 = mysqli_fetch_array($tampil3);
                    }
              }
          }
elseif ($bulan=='03')
   {
   $query = mysqli_query($konek, "SELECT id_siswa, nis, nama_siswa, kelas FROM spp_bulanan WHERE maret='0' order by nis")or die(mysqli_error());
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td><center>'.$data['nis'].'</center></td>';
                        echo '<td>'.$data['nama_siswa'].'</td>';
                        echo '<td><center>'.$data['kelas'].'</center></td>';
                         echo '<td><center>'.'Belum Bayar'.'</center></td>';
                         echo '</tr>';
                        $no++;    
                        $sum = "SELECT COUNT(nis) as total FROM spp_bulanan WHERE maret='0'";
                        $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
                        $row1 = mysqli_fetch_array($tampil3);
                      
                      
                    }
              }
          }
elseif ($bulan=='04')
   {
   $query = mysqli_query($konek, "SELECT id_siswa, nis, nama_siswa, kelas FROM spp_bulanan WHERE april='0' order by nis")or die(mysqli_error());
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td><center>'.$data['nis'].'</center></td>';
                        echo '<td>'.$data['nama_siswa'].'</td>';
                        echo '<td><center>'.$data['kelas'].'</center></td>';
                         echo '<td><center>'.'Belum Bayar'.'</center></td>';
                         echo '</tr>';
                        $no++;    
                        $sum = "SELECT COUNT(nis) as total FROM spp_bulanan WHERE april='0'";
                        $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
                        $row1 = mysqli_fetch_array($tampil3);
                      
                      
                    }
              }
          }
elseif ($bulan=='05')
   {
   $query = mysqli_query($konek, "SELECT id_siswa, nis, nama_siswa, kelas FROM spp_bulanan WHERE mei='0' order by nis")or die(mysqli_error());
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td><center>'.$data['nis'].'</center></td>';
                        echo '<td>'.$data['nama_siswa'].'</td>';
                        echo '<td><center>'.$data['kelas'].'</center></td>';
                         echo '<td><center>'.'Belum Bayar'.'</center></td>';
                         echo '</tr>';
                        $no++;    
                        $sum = "SELECT COUNT(nis) as total FROM spp_bulanan WHERE mei='0'";
                        $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
                        $row1 = mysqli_fetch_array($tampil3);
                      
                      
                    }
              }
          }
elseif ($bulan=='06')
   {
   $query = mysqli_query($konek, "SELECT id_siswa, nis, nama_siswa, kelas FROM spp_bulanan WHERE juni='0' order by nis")or die(mysqli_error());
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td><center>'.$data['nis'].'</center></td>';
                        echo '<td>'.$data['nama_siswa'].'</td>';
                        echo '<td><center>'.$data['kelas'].'</center></td>';
                         echo '<td><center>'.'Belum Bayar'.'</center></td>';
                         echo '</tr>';
                        $no++;    
                        $sum = "SELECT COUNT(nis) as total FROM spp_bulanan WHERE juni='0'";
                        $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
                        $row1 = mysqli_fetch_array($tampil3);
                      
                      
                    }
              }
          }
elseif ($bulan=='07')
   {
   $query = mysqli_query($konek, "SELECT id_siswa, nis, nama_siswa, kelas FROM spp_bulanan WHERE juli='0' order by nis")or die(mysqli_error());
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td><center>'.$data['nis'].'</center></td>';
                        echo '<td>'.$data['nama_siswa'].'</td>';
                        echo '<td><center>'.$data['kelas'].'</center></td>';
                         echo '<td><center>'.'Belum Bayar'.'</center></td>';
                         echo '</tr>';
                        $no++;    
                        $sum = "SELECT COUNT(nis) as total FROM spp_bulanan WHERE juli='0'";
                        $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
                        $row1 = mysqli_fetch_array($tampil3);
                      
                      
                    }
              }
          }
elseif ($bulan=='08')
   {
   $query = mysqli_query($konek, "SELECT id_siswa, nis, nama_siswa, kelas FROM spp_bulanan WHERE agustus='0' order by nis")or die(mysqli_error());
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td><center>'.$data['nis'].'</center></td>';
                        echo '<td>'.$data['nama_siswa'].'</td>';
                        echo '<td><center>'.$data['kelas'].'</center></td>';
                         echo '<td><center>'.'Belum Bayar'.'</center></td>';
                         echo '</tr>';
                        $no++;    
                        $sum = "SELECT COUNT(nis) as total FROM spp_bulanan WHERE agustus='0'";
                        $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
                        $row1 = mysqli_fetch_array($tampil3);
                      
                      
                    }
              }
          }
elseif ($bulan=='09')
   {
   $query = mysqli_query($konek, "SELECT id_siswa, nis, nama_siswa, kelas FROM spp_bulanan WHERE september='0' order by nis")or die(mysqli_error());
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td><center>'.$data['nis'].'</center></td>';
                        echo '<td>'.$data['nama_siswa'].'</td>';
                        echo '<td><center>'.$data['kelas'].'</center></td>';
                        echo '<td><center>'.'Belum Bayar'.'</center></td>';
                        echo '</tr>';
                        $no++;    
                        $sum = "SELECT COUNT(nis) as total FROM spp_bulanan WHERE september='0'";
                        $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
                        $row1 = mysqli_fetch_array($tampil3);
                      
                      
                    }
              }
            }
elseif ($bulan=='10')
   {
   $query = mysqli_query($konek, "SELECT id_siswa, nis, nama_siswa, kelas FROM spp_bulanan WHERE oktober='0' order by nis")or die(mysqli_error());
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td><center>'.$data['nis'].'</center></td>';
                        echo '<td>'.$data['nama_siswa'].'</td>';
                        echo '<td><center>'.$data['kelas'].'</center></td>';
                         echo '<td><center>'.'Belum Bayar'.'</center></td>';
                         echo '</tr>';
                        $no++;    
                        $sum = "SELECT COUNT(nis) as total FROM spp_bulanan WHERE oktober='0'";
                        $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
                        $row1 = mysqli_fetch_array($tampil3);
                      
                      
                    }
              }
          }
elseif ($bulan=='11')
   {
   $query = mysqli_query($konek, "SELECT id_siswa, nis, nama_siswa, kelas FROM spp_bulanan WHERE november='0' order by nis")or die(mysqli_error());
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td><center>'.$data['nis'].'</center></td>';
                        echo '<td>'.$data['nama_siswa'].'</td>';
                        echo '<td><center>'.$data['kelas'].'</center></td>';
                         echo '<td><center>'.'Belum Bayar'.'</center></td>';
                         echo '</tr>';
                        $no++;    
                        $sum = "SELECT COUNT(nis) as total FROM spp_bulanan WHERE november='0'";
                        $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
                        $row1 = mysqli_fetch_array($tampil3);
                      
                      
                    }
              }
            }
elseif ($bulan=='12')
   {
   $query = mysqli_query($konek, "SELECT id_siswa, nis, nama_siswa, kelas FROM spp_bulanan WHERE desember='0' order by nis")or die(mysqli_error());
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td><center>'.$data['nis'].'</center></td>';
                        echo '<td>'.$data['nama_siswa'].'</td>';
                        echo '<td><center>'.$data['kelas'].'</center></td>';
                         echo '<td><center>'.'Belum Bayar'.'</center></td>';
                         echo '</tr>';
                        $no++;    
                        $sum = "SELECT COUNT(nis) as total FROM spp_bulanan WHERE desember='0'";
                        $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
                        $row1 = mysqli_fetch_array($tampil3);
                      
                      
                    }
              }


        echo '</table>';}

  ?>

      <table>
      <tr>
      <td colspan="4">Total Tagihan : </td>
      <td><?php echo 'Rp.'. number_format(($row1['total'])* 120000); ?></td>
      </table>
                          


</div>
</div>
</div>
