<div class="container-fluid">
	<div class="alert alert-success" role="alert">
       <i class=""></i> Form Update Jurusan
    </div>
    <?php foreach($jurusan as $jr) : ?>
	<form method="POST" action="<?php echo base_url('administrator/jurusan/update_aksi') ?>">
		<div class="form-group">
			<label>Kode Jurusan</label>
			<input type="hidden" name="id_jurusan"  class="form-control" value="<?php echo $jr->id_jurusan ?>">
			<input type="text" name="kode_jurusan"  class="form-control" value="<?php echo $jr->kode_jurusan ?>">
			<?php echo form_error('kode_jurusan','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nama Jurusan</label>
			<input type="text" name="nama_jurusan"  class="form-control" value="<?php echo $jr->nama_jurusan ?>">
			<?php echo form_error('nama_jurusan','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<button class="btn btn-sm btn-primary" type="submit">Simpan</button>
	</form>
	<?php endforeach ?>
</div>