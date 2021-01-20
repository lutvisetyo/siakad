<?php 

/**
 * 
 */
class Prodi extends CI_Controller
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
    	$data['prodi'] = $this->prodi_model->tampil_data()->result();
    	
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/prodi',$data);
		$this->load->view('template_administrator/footer');
    }

    public function input(){
    	$data['jurusan'] = $this->jurusan_model->tampil_data()->result();
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/form_prodi',$data);
		$this->load->view('template_administrator/footer');
	}

	public function input_aksi(){
		$this-> _rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$kode_prodi 	= $this->input->post('kode_prodi');
			$id_jurusan 	= $this->input->post('id_jurusan');
			$nama_prodi 	= $this->input->post('nama_prodi');

			$data = array(
				'kode_prodi' 	=> $kode_prodi,
				'id_jurusan'	=> $id_jurusan,
				'nama_prodi'	=> $nama_prodi 
			);

			$this->prodi_model->input_data($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Data Prodi Berhasil Dimpan
				  
				</div>');
			redirect('administrator/prodi');
		}
	}

	public function _rules(){
		$this->form_validation->set_rules('kode_prodi','Kode Prodi','required',['required' => 'Kode Prodi Tidak Boleh Kosong']);
		$this->form_validation->set_rules('id_jurusan','Nama Jurusan','required',['required' => 'Jurusan Tidak Boleh Kosong']);
		$this->form_validation->set_rules('nama_prodi','Nama Prodi','required',['required' => 'Nama Prodi Tidak Boleh Kosong']);
	}

	public function update($id){
		$id_prodi = array('id_prodi' => $id);
		$data['prodi'] = $this->prodi_model->edit_data($id_prodi)->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/form_prodi_update',$data);
		$this->load->view('template_administrator/footer');
	}

	public function update_aksi(){
		$id 			= $this->input->post('id_prodi');
		$nama_prodi 	= $this->input->post('nama_prodi');

		$data = array(
				'nama_prodi'	=> $nama_prodi
		);

		$id_prodi = array('id_prodi' => $id);

		$this->prodi_model->update_data($id_prodi, $data, 'tbl_prodi');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Data Prodi Berhasil Diupdate
				  
				</div>');
		redirect('administrator/prodi');
	}

	public function delete($id){
		$id_prodi = array('id_prodi' => $id);

		$this->prodi_model->hapus_data($id_prodi,'tbl_prodi');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Data Prodi Berhasil Dihapus
				  
				</div>');
		redirect('administrator/prodi');
	}
}

?>