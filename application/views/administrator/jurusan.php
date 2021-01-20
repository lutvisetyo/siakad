<div class="container-fluid">
	<div class="alert alert-success" role="alert">
       <i class="fas fa-university"></i> Daftar Jurusan
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('administrator/jurusan/input',' <button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Jurusan</button>') ?>
   
    <table class="table table-bordered table-striped table-hover">
    	<tr>
    		<th>No</th>
    		<th>Kode Jurusan</th>
    		<th>Nama Jurusan</th>
    		<th colspan="2"></th>
    	</tr>
    	<?php 
    	$no = 1;	
    	foreach($jurusan as $jr) : ?>
    	<tr>
    		<td width="20px;"><?php echo $no++ ?></td>
    		<td><?php echo $jr->kode_jurusan ?></td>
    		<td><?php echo $jr->nama_jurusan ?></td>
    		<td width="20px;"><?php echo anchor('administrator/jurusan/update/'.$jr->id_jurusan,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
    		<td width="20px;"><a onclick="return confirm('Apakan Anda Yakin Ingin Membatalkan Transaksi ?')" class="btn btn-sm btn-danger" href="<?php echo base_url('administrator/jurusan/delete/'.$jr->id_jurusan) ?>"><i class="fa fa-trash"></i></a></td>
    	</tr>
    	<?php endforeach  ?>
    </table>
</div>