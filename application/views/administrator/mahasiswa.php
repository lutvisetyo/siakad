<div class="container-fluid">
	<div class="alert alert-success" role="alert">
       <i class="fas fa-university"></i> Daftar Mahasiswa
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('administrator/mahasiswa/input',' <button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Mahasiswa</button>') ?>
   
    <table class="table table-bordered table-striped table-hover">
    	<tr>
    		<th>No</th>
    		<th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Alamat</th>
            <th>Email</th>
    		<th colspan="3"></th>
    	</tr>
    	<?php 
    	$no = 1;	
    	foreach($mahasiswa as $mhs) : ?>
    	<tr>
    		<td width="20px;"><?php echo $no++ ?></td>
    		<td><?php echo $mhs->nim ?></td>
            <td><?php echo $mhs->nama ?></td>
    		<td><?php echo $mhs->alamat ?></td>
            <td><?php echo $mhs->email ?></td>
            <td width="20px;"><?php echo anchor('administrator/mahasiswa/detail/'.$mhs->id_mahasiswa,'<div class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></div>') ?></td>
    		<td width="20px;"><?php echo anchor('administrator/mahasiswa/update/'.$mhs->id_mahasiswa,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
    		<td width="20px;"><a onclick="return confirm('Apakan Anda Yakin Ingin Menghapus Data Mahasiswa ?')" class="btn btn-sm btn-danger" href="<?php echo base_url('administrator/mahasiswa/delete/'.$mhs->id_mahasiswa) ?>"><i class="fa fa-trash"></i></a></td>
    	</tr>
    	<?php endforeach  ?>
    </table>
</div>