<div class="container-fluid">
	<div class="alert alert-success" role="alert">
       <i class="fas fa-plus fa-sm"></i> Form Update Prodi
    </div>
    <?php foreach($prodi as $pr) : ?>
	<form method="POST" action="<?php echo base_url('administrator/prodi/update_aksi') ?>">
		<div class="form-group">
			<label>Kode Prodi</label>
			<input type="hidden" name="id_prodi" value="<?php echo $pr->id_prodi ?>">
			<input type="text" name="kode_prodi" disabled class="form-control" value="<?php echo $pr->kode_prodi ?>">
			<?php echo form_error('kode_prodi','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nama Jurusan</label>
			<input type="text" name="id_jurusan" disabled  class="form-control" value="<?php echo $pr->nama_jurusan ?>">
			<?php echo form_error('id_jurusan','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nama Prodi</label>
			<input type="text" name="nama_prodi"  class="form-control" value="<?php echo $pr->nama_prodi ?>">
			<?php echo form_error('nama_prodi','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<button class="btn btn-sm btn-primary" type="submit">Simpan</button>
	</form>
	<?php endforeach ?>
</div>