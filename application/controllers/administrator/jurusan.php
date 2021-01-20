<?php

/**
 * 
 */
class Jurusan extends CI_Controller
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
		$data['jurusan'] = $this->jurusan_model->tampil_data()->result();

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/jurusan',$data);
		$this->load->view('template_administrator/footer');
	}

	public function input(){
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/form_jurusan');
		$this->load->view('template_administrator/footer');
	}

	public function input_aksi(){
		$this-> _rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$kode_jurusan 	= $this->input->post('kode_jurusan');
			$nama_jurusan 	= $this->input->post('nama_jurusan');

			$data = array(
				'kode_jurusan' 	=> $kode_jurusan,
				'nama_jurusan'	=> $nama_jurusan 
			);

			$this->jurusan_model->input_data($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Data Jurusan Berhasil Dimpan
				  
				</div>');
			redirect('administrator/jurusan');
		}
	}

	public function _rules(){
		$this->form_validation->set_rules('kode_jurusan','Kode Jurusan','required',['required' => 'Kode Jurusan Tidak Boleh Kosong']);
		$this->form_validation->set_rules('nama_jurusan','Nama Jurusan','required',['required' => 'Nama Jurusan Tidak Boleh Kosong']);
	}

	public function update($id){
		$id_jurusan = array('id_jurusan' => $id);
		$data['jurusan'] = $this->jurusan_model->edit_data($id_jurusan,'tbl_jurusan')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/form_jurusan_update',$data);
		$this->load->view('template_administrator/footer');
	}

	public function update_aksi(){
		$id 			= $this->input->post('id_jurusan');
		$kode_jurusan 	= $this->input->post('kode_jurusan');
		$nama_jurusan 	= $this->input->post('nama_jurusan');

		$data = array(
				'kode_jurusan' 	=> $kode_jurusan,
				'nama_jurusan'	=> $nama_jurusan
		);

		$id_jurusan = array('id_jurusan' => $id);

		$this->jurusan_model->update_data($id_jurusan, $data, 'tbl_jurusan');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Data Jurusan Berhasil Diupdate
				  
				</div>');
		redirect('administrator/jurusan');
	}

	public function delete($id){
		$id_jurusan = array('id_jurusan' => $id);

		$this->jurusan_model->hapus_data($id_jurusan,'tbl_jurusan');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Data Jurusan Berhasil Dihapus
				  
				</div>');
		redirect('administrator/jurusan');
	}
}

?>