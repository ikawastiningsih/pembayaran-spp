<?php 
    include 'config/koneksi.php';
    
    $sel_tahun="SELECT id_siswa, id_spp, nis, tahunajaran, nama_siswa, kelas, juli, tgljuli, agustus, tglagus, september, tglsep, oktober, tglokt, november, tglnov, desember, tgldes, januari, tgljan, februari, tglfeb,  maret, tglmar, april, tglapr, mei, tglmei, juni, tgljun FROM spp_bulanan WHERE tahunajaran='".$_POST["tahunajaran"]."' AND nis = '$nis'";
    $q=mysqli_query($konek,$sel_tahun);
    while($data_tahun=mysqli_fetch_array($q)){
    
    ?>
        <div class="table-responsive">
             <table class="table table-bordered" id="" width="100%" cellspacing="0">
              <thead>
                <tr align="center">
                <th>Bulan</th>
                <th>Keterangan</th>
                <th>Tanggal Pembayaran</th>
                </tr>
              </thead>
              <tbody>
                <tr align="center">
                      <td>Juli</td>
                      <td><?php if ($data['juli']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tgljuli']; ?></td>
                    </tr>
                    <tr align="center">
                      <td>Agustus</td>
                      <td><?php if ($data['agustus']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tglagus']; ?></td>
                    </tr>
                    <tr align="center">
                      <td>September</td>
                      <td><?php if ($data['september']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tglsep']; ?></td>
                    </tr>
                    <tr align="center">
                      <td>Oktober</td>
                      <td><?php if ($data['oktober']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tglokt']; ?></td>
                    </tr>
                    <tr align="center">
                      <td>November</td>
                      <td><?php if ($data['november']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tglnov']; ?></td>
                    </tr>
                    <tr align="center">
                      <td>Desember</td>
                      <td><?php if ($data['desember']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tgldes']; ?></td>
                    </tr>
                
                    <tr align="center">
                      <td>Januari</td>
                      <td><?php if ($data['januari']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tgljan']; ?></td>
                    </tr>
                    <tr align="center">
                      <td>Februari</td>
                      <td><?php if ($data['februari']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tglfeb']; ?></td>
                    </tr>
                    <tr align="center">
                      <td>Maret</td>
                      <td><?php if ($data['maret']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tglmar']; ?></td>
                    </tr>
                    <tr align="center">
                      <td>April</td>
                      <td><?php if ($data['april']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tglapr']; ?></td>
                    </tr>
                   <tr align="center">
                      <td>Mei</td>
                      <td><?php if ($data['mei']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tglmei']; ?></td>
                    </tr>
                   <tr align="center">
                      <td>Juni</td>
                      <td><?php if ($data['juni']==0) echo "Belum Bayar"; else echo "Sudah Bayar"; ?></td>
                      <td><?php echo $data['tgljun']; ?></td>
                    </tr>
              </tbody>
            </table>
        </div>
        
        <!-- <option value="<?php echo $data_prov["kdsatker"] ?>"><?php echo $data_prov["kdsatker"] ?> | <?php echo $data_prov["nmsatker"] ?></option><br> -->
    
    <?php
    }
?> 

 <script>
    $("#tahunajaran").change(function(){
    
        // variabel dari nilai combo box provinsi
        var tahunajaran = $("#tahunajaran").val();
        
        // mengirim dan mengambil data
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "ajax_tahun.php",
            data: "tahunajaran="+tahunajaran,
            success: function(msg){
                
                // jika tidak ada data
                if(msg == ''){
                    alert('Tidak ada data ');
                }
                
                // jika dapat mengambil data,, tampilkan di combo box kota
                else{
                    $("#tampil").html(msg);                                                      
                }
                
            }
        });     
    });
</script> 
$sel_tahun="SELECT id_siswa, id_spp, nis, tahunajaran, nama_siswa, kelas, juli, tgljuli, agustus, tglagus, september, tglsep, oktober, tglokt, november, tglnov, desember, tgldes, januari, tgljan, februari, tglfeb,  maret, tglmar, april, tglapr, mei, tglmei, juni, tgljun FROM spp_bulanan WHERE tahunajaran='$tahunajaran' AND nis = '$nis'";
          $q=mysqli_query($konek,$sel_tahun);
       while($data_tahun=mysqli_fetch_array($q))
            ?>