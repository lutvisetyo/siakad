<div class="container-fluid">
	<div class="alert alert-success" role="alert">
       <i class="fas fa-plus fa-sm"></i> Form Tambah Prodi
    </div>
	<form method="POST" action="<?php echo base_url('administrator/prodi/input_aksi') ?>">
		<div class="form-group">
			<label>Kode Prodi</label>
			<input type="text" name="kode_prodi"  class="form-control">
			<?php echo form_error('kode_prodi','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nama Jurusan</label>
			<select class="form-control" name="id_jurusan">
				<option>--Pilih Jurusan--</option>
				<?php foreach($jurusan as $jr) : ?>
				<option value="<?php echo $jr->id_jurusan ?>"><?php echo $jr->nama_jurusan ?></option>
				<?php endforeach  ?>
			</select>
			<?php echo form_error('id_jurusan','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nama Prodi</label>
			<input type="text" name="nama_prodi"  class="form-control">
			<?php echo form_error('nama_prodi','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<button class="btn btn-sm btn-primary" type="submit">Simpan</button>
	</form>
</div>