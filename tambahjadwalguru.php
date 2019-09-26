<br>
<form class="form-horizontal" action="config/tambahjadwalproses.php" method="POST">
	 <ol class="breadcrumb">
        <li class="active"><b>Tambah Jadwal Mengajar Guru</b></li>
         </ol>
         <?php
    	include 'config/koneksi.php';
    	?>
	<div class="form-group">
		<label class="col-sm-3">Nama Guru</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
		<select class="form-control" name="nama_pegawai" id="nama_pegawai">
          <option>Pilih Nama Guru</option>
          <?php
          $guru = "SELECT * FROM pegawai WHERE level='guru'";
          $queryguru = mysqli_query($konek,$guru);
          while ($dataguru = mysqli_fetch_array($queryguru)) { ?>
          <option value="<?php echo $dataguru['nama_pegawai'] ?>"><?php echo $dataguru["nama_pegawai"] ?>
          </option>
          <?php
          }
          ?>
         </select>
	</div>	
	<div class="form-group">
	<div class="form-group">
		<label class="col-sm-3">Mata Pelajaran</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="mata_pelajaran" name="mata_pelajaran">
                <option>Pilih Mata Pelajaran</option>
                <option>Matematika</option>
                <option>Bahasa Indonesia</option>
                <option>Bahasa Inggris</option>
                <option>Fisika</option>
                <option>Kimia</option>
                <option>Gambar Teknik</option>
                <option>Olahraga</option>

             </select> 
	</div>	
	<div class="form-group">
		<label class="col-sm-3">Kelas</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="kelas_mengajar" name="kelas_mengajar">
                <option>Pilih Kelas</option>
                <option>X</option>
                <option>XI</option>
                <option>XII</option>
             </select> 
	</div>
	<div class="form-group">
		<label class="col-sm-3">Hari</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="hari_mengajar" name="hari_mengajar">
                <option>Pilih Hari</option>
                <option>Senin</option>
                <option>Selasa</option>
                <option>Rabu</option>
                <option>Kamis</option>
                <option>Jumat</option> 
             </select> 
	</div>
	<div class="form-group">
		<label class="col-sm-3">Jam Mengajar</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="waktu_mengajar" name="waktu_mengajar">
                <option>Pilih Jam</option>
                <option>07.00 - 08.15</option>
                <option>08.15 - 09.30</option>
                <option>10.00 - 11.15</option>
                <option>11.15 - 12.30</option>
                <option>13.00 - 14.00</option>
                <option>14.00 - 15.00</option>
                <option>15.30 - 16.30</option>
                <option>16.30 - 17.30</option>
             </select> 
	</div>
	<div class="form-group">
        <label class="col-sm-3"></label>
        <label class="col-sm-1"></label>
        <div class="col-sm-8" align="Right">
          <button class="btn btn-success">Tambah</button>
         </div>
    </div>
		
		