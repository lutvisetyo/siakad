<div class="container-fluid">
	<div class="alert alert-success" role="alert">
       <i class="fas fa-university"></i> Daftar Matakuliah
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('administrator/matakuliah/input',' <button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Matakuliah</button>') ?>
   
    <table class="table table-bordered table-striped table-hover">
    	<tr>
    		<th>No</th>
    		<th>Kode Matakuliah</th>
            <th>Nama Prodi</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th>Semester</th>
    		<th colspan="2"></th>
    	</tr>
    	<?php 
    	$no = 1;	
    	foreach($matakuliah as $mk) : ?>
    	<tr>
    		<td width="20px;"><?php echo $no++ ?></td>
    		<td><?php echo $mk->kode_makul ?></td>
            <td><?php echo $mk->nama_prodi ?></td>
    		<td><?php echo $mk->nama_makul ?></td>
            <td><?php echo $mk->sks ?></td>
            <td><?php echo $mk->semester ?></td>
    		<td width="20px;"><?php echo anchor('administrator/matakuliah/update/'.$mk->id_makul,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
    		<td width="20px;"><a onclick="return confirm('Apakan Anda Yakin Ingin Menghapus Data Matakuliah ?')" class="btn btn-sm btn-danger" href="<?php echo base_url('administrator/matakuliah/delete/'.$mk->id_makul) ?>"><i class="fa fa-trash"></i></a></td>
    	</tr>
    	<?php endforeach  ?>
    </table>
</div>