<?php

/**
 * 
 */
class Matakuliah extends CI_Controller
{
	
	public function __construct(){
        parent::__construct();
       
       	if(!isset($this->session->userdata['username'])){
       		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Maaf Anda Belum Login !!!
				  
				</div>');
       		redirect('administrator/auth');
       	}
    }

    public function index(){
		$data['matakuliah'] = $this->matakuliah_model->tampil_data()->result();

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/matakuliah',$data);
		$this->load->view('template_administrator/footer');
	}

	public function input(){
    	$data['prodi'] = $this->prodi_model->tampil_data()->result();
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/form_matakuliah',$data);
		$this->load->view('template_administrator/footer');
	}

	public function input_aksi(){
		$this-> _rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$kode_matakuliah 	= $this->input->post('kode_matakuliah');
			$id_prodi 			= $this->input->post('id_prodi');
			$nama_matakuliah	= $this->input->post('nama_matakuliah');
			$sks				= $this->input->post('sks');
			$semester			= $this->input->post('semester');

			$data = array(
				'kode_makul'		=> $kode_matakuliah,
				'id_prodi'			=> $id_prodi,
				'nama_makul'		=> $nama_matakuliah,
				'sks'				=> $sks,
				'semester'			=> $semester
			);

			$this->matakuliah_model->input_data($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Data Matakuliah Berhasil Dimpan
				  
				</div>');
			redirect('administrator/matakuliah');
		}
	}
	public function _rules(){
		$this->form_validation->set_rules('kode_matakuliah','Kode Matakuliah','required',['required' => 'Kode Matakuliah Tidak Boleh Kosong']);
		$this->form_validation->set_rules('id_prodi','Nama Prodi','required',['required' => 'Nama Prodi Tidak Boleh Kosong']);
		$this->form_validation->set_rules('nama_matakuliah','Nama Matakuliah','required',['required' => 'Nama Matakuliah Tidak Boleh Kosong']);
		$this->form_validation->set_rules('sks','SKS','required',['required' => 'SKS Tidak Boleh Kosong']);
		$this->form_validation->set_rules('semester','Semester','required',['required' => 'Semester Tidak Boleh Kosong']);
	}
}

?>