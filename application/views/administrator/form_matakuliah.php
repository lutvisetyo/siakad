<div class="container-fluid">
	<div class="alert alert-success" role="alert">
       <i class="fas fa-plus fa-sm"></i> Form Tambah Matakuliah
    </div>
	<form method="POST" action="<?php echo base_url('administrator/matakuliah/input_aksi') ?>">
		<div class="form-group">
			<label>Kode Matakuliah</label>
			<input type="text" name="kode_matakuliah"  class="form-control">
			<?php echo form_error('kode_matakuliah','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nama Prodi</label>
			<select class="form-control" name="id_prodi">
				<option>--Pilih Prodi--</option>
				<?php foreach($prodi as $pr) : ?>
				<option value="<?php echo $pr->id_prodi ?>"><?php echo $pr->nama_prodi ?></option>
				<?php endforeach  ?>
			</select>
			<?php echo form_error('id_prodi','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nama Matakuliah</label>
			<input type="text" name="nama_matakuliah"  class="form-control">
			<?php echo form_error('nama_matakuliah','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>SKS</label>
			<select name="sks" class="form-control">
				<option value="">-- Pilih SKS --</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
			</select>
			<?php echo form_error('sks','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Semester</label>
			<select name="semester" class="form-control">
				<option value="">-- Pilih Semester --</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>

			</select>
			<?php echo form_error('semester','<div class="text-danger small ml-3 mt-2">','</div>') ?>
		</div>
		<button class="btn btn-sm btn-primary" type="submit">Simpan</button>
	</form>
</div>