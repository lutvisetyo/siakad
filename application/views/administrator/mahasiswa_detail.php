<div class="container-fluid">
	<div class="alert alert-success" role="alert">
       <i class="fas fa-university"></i> Detail Mahasiswa
    </div>
    <table class="table table-bordered table-striped table-hover">
    	<?php foreach($detail as $dt) : ?>
    	<img class="mb-4" src="<?php echo base_url('assets/upload/').$dt->photo?>" style="width: 15%">
    	<tr>
    		<td>NIM</td>
    		<td><?php echo $dt->nim ?></td>
    	</tr>
    	<tr>
    		<td>Nama</td>
    		<td><?php echo $dt->nama ?></td>
    	</tr>
    	<tr>
    		<td>Jenis Kelamin</td>
    		<td><?php echo $dt->jenis_kelamin ?></td>
    	</tr>
    	<tr>
    		<td>Tempat & Tanggal Lahir</td>
    		<td><?php echo $dt->tempat_lahir.', '.date("d-M-Y",strtotime($dt->tgl_lahir)) ?></td>
    	</tr>
    	<tr>
    		<td>Alamat</td>
    		<td><?php echo $dt->alamat ?></td>
    	</tr>
    	<tr>
    		<td>Email</td>
    		<td><?php echo $dt->email ?></td>
    	</tr>
    	<tr>
    		<td>Telephone</td>
    		<td><?php echo $dt->telephon ?></td>
    	</tr>
    	<tr>
    		<td>Nama Prodi</td>
    		<td><?php echo $dt->nama_prodi ?></td>
    	</tr>
    	
    	
    	<?php endforeach ?>
    </table>
    <a href="<?php echo base_url('administrator/mahasiswa') ?>" class="btn btn-sm btn-primary">Kembali</a><br><br><br><br>
</div>