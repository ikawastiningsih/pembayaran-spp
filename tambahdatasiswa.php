
<form class="form-horizontal" action="config/tambahsiswaproses.php" method="POST">
	 <ol class="breadcrumb">
        <li class="active"><b>DAFTAR SISWA BARU</b></li>
         </ol>
          <?php
    		include 'config/koneksi.php';
    		?>
	<div class="form-group">
		<label class="col-sm-3">Nomor Induk Siswa</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="nis" placeholder="Masukkan Nomer Induk" required></label>
	</div>
 	<div class="form-group">
		<label class="col-sm-3">Nomor Induk Siswa Nasional</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="nisn" placeholder="Masukkan Nomer Induk Siswa Nasional" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Tahun Ajaran Masuk</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
		<select class="form-control" name="tahunajaran" id="tahun" required>
		<option>Pilih Tahun Ajaran</option>
          <?php
          $ta = "SELECT * FROM tahun_ajaran";
          $queryta = mysqli_query($konek,$ta);
          while ($tampilta = mysqli_fetch_array($queryta)) { ?>
          <option value="<?php echo $tampilta['tahunajaran'] ?>"><?php echo $tampilta["tahunajaran"] ?>
          </option>
          <?php
          }
          ?>
         </select>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Pembayaran Perbulan</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="total_spp" id = "total" placeholder="Total Pembayaran" readonly></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Nama Siswa</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="nama_siswa" placeholder="Masukkan Nama Siswa" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Jenis Kelamin</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="jk_siswa" name="jk_siswa">
                <option>Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
             </select> 
	</div>	
	<div class="form-group">
		<label class="col-sm-3">Kelas</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="kelas" name="kelas" required>
                <option>Pilih Kelas</option>
                <option>X</option>
                <option>XI</option>
                <option>XII</option>
            </select>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Tempat Lahir</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="tempatlahir_siswa" placeholder="Masukkan Tempat Lahir Siswa" required></label>
	</div> 
	<div class="form-group">
		<label class="col-sm-3">Tanggal Lahir</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<input class="form-control input-md" class="input-group date" name="tanggallahir_siswa" type="date" placeholder="Masukkan tanggal lahir anda" required>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Nomer Telepon</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="number" name="notelp_siswa" placeholder="Masukkan Nomer	Telepon Siswa" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Alamat</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="alamat_siswa" placeholder="Masukkan Alamat Siswa" required> </label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Agama</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="agama_siswa" name="agama_siswa" required>
                <option>Pilih Agama</option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Kong Hu Cu</option>
            </select>
	</div>
		<div class="form-group">
		<label class="col-sm-3">Nama Ayah</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="namaayah_siswa" placeholder="Masukkan Nama Ayah Siswa"></label>
	</div>
		<div class="form-group">
		<label class="col-sm-3">Nama Ibu</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="namaibu_siswa" placeholder="Masukkan Nama Ibu Siswa"></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Nomer Ujian Nasional</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="no_un" placeholder="Masukkan Nomer Ujian Nasional Siswa" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Nomer Ijazah</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="no_ijazah" placeholder="Masukkan Nomer Ijazah Siswa" required></label>
	</div> 
	
		<div class="form-group">
     <label class="col-sm-3"></label>
     <label class="col-sm-1"></label>
     <div class="col-sm-8" align="Right">
     <button class="btn btn-success">Tambah</button>
    </div>
    </div>

    <script type="text/javascript">
    $( "#tahun" ).change(function() {
      var tahunajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajaxspp.php?tahunajaran=" + tahunajaran,
        success: function(result){
            console.log(result);
          $("#total").val(result);
    
        }
      });
    });
</script>