<div class="container-fluid">
	<div class="alert alert-success" role="alert">
       <i class="fas fa-plus fa-sm"></i> Form Tambah Mahasiswa
    </div>
	<form method="POST" action="<?php echo base_url('administrator/mahasiswa/input_aksi') ?>" enctype="multipart/form-data">
		<div class="form-group">
			<label>NIM</label>
			<input type="text" name="nim"  class="form-control">
			<?php echo form_error('nim','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nama Mahasiswa</label>
			<input type="text" name="nama"  class="form-control">
			<?php echo form_error('nama','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label>
			<select class="form-control" name="jenis_kelamin">
				<option>-- Pilih Jenis Kelamin --</option>
				<option value="Laki-Laki">Laki - Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
			<?php echo form_error('jenis_kelamin','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Tempat Lahir</label>
			<input type="text" name="tempat_lahir"  class="form-control">
			<?php echo form_error('tempat_lahir','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir"  class="form-control">
			<?php echo form_error('tanggal_lahir','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea name="alamat" class="form-control"></textarea>
			<?php echo form_error('alamat','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email"  class="form-control">
			<?php echo form_error('email','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Telephone</label>
			<input type="text" name="telephon"  class="form-control">
			<?php echo form_error('telephon','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nama Prodi</label>
			<select class="form-control" name="id_prodi">
				<option>--Pilih Program Studi--</option>
				<?php foreach($prodi as $pr) : ?>
				<option value="<?php echo $pr->id_prodi ?>"><?php echo $pr->nama_prodi ?></option>
				<?php endforeach  ?>
			</select>
			<?php echo form_error('id_prodi','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Foto</label>
			<input type="file" name="photo"  class="form-control">
			
		</div>
		
		<button class="btn btn-sm btn-primary" type="submit">Simpan</button>
	</form><br><br><br><br>
</div>