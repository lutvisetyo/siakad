<div class="container-fluid">
	<div class="alert alert-success" role="alert">
       <i class="fas fa-university"></i> Daftar Prodi
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('administrator/prodi/input',' <button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Program Studi</button>') ?>
   
    <table class="table table-bordered table-striped table-hover">
    	<tr>
    		<th>No</th>
    		<th>Kode Prodi</th>
    		<th>Nama Jurusan</th>
            <th>Nama Prodi</th>
    		<th colspan="2"></th>
    	</tr>
    	<?php 
    	$no = 1;	
    	foreach($prodi as $pr) : ?>
    	<tr>
    		<td width="20px;"><?php echo $no++ ?></td>
    		<td><?php echo $pr->kode_prodi ?></td>
            <td><?php echo $pr->nama_jurusan ?></td>
    		<td><?php echo $pr->nama_prodi ?></td>
    		<td width="20px;"><?php echo anchor('administrator/prodi/update/'.$pr->id_prodi,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
    		<td width="20px;"><a onclick="return confirm('Apakan Anda Yakin Ingin Menghapus Data Prodi ?')" class="btn btn-sm btn-danger" href="<?php echo base_url('administrator/prodi/delete/'.$pr->id_prodi) ?>"><i class="fa fa-trash"></i></a></td>
    	</tr>
    	<?php endforeach  ?>
    </table>
</div>