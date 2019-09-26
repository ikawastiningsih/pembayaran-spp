<br>
<form class="form-horizontal" action="../config/tambahakunproses.php" method="POST">
	 <ol class="breadcrumb">
        <li class="active"><b>DAFTAR AKUN BARU</b></li>
         </ol>

	<div class="form-group">
		<label class="col-sm-3">Nama</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="nama_pegawai" placeholder="Masukkan Nama Pegawai"></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Jenis Kelamin</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="jk_pegawai" name="jk_pegawai">
                <option>Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
             </select> 
	</div>	
	<div class="form-group">
		<label class="col-sm-3">Nomer Telepon</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="nohp_pegawai" placeholder="Masukkan Nomer Telepon Pegawai"></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Alamat</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="alamat_pegawai" placeholder="Masukkan Alamat Pegawai"> </label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Username</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="username" placeholder="Masukkan Username Pegawai"> </label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Password</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="password" placeholder="Masukkan Password Pegawai"> </label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Level</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="level" name="level">
                <option>Pilih Level</option>
                <option value="tatausaha">Tata Usaha</option>
                <option value="kepalasekolah">Kepala Sekolah</option>
             </select> 
	</div>	
	<div class="form-group">
        <label class="col-sm-3"></label>
        <label class="col-sm-1"></label>
        <div class="col-sm-8" align="Right">
          <button class="btn btn-danger">Tambah</button>
         </div>
    </div>
		
		