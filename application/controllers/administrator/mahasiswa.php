<?php

class Mahasiswa extends CI_Controller{
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
        $data['mahasiswa'] = $this->mahasiswa_model->tampil_data()->result();

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('administrator/mahasiswa',$data);
        $this->load->view('template_administrator/footer');
    }

    public function detail($id){
        $data['detail'] = $this->mahasiswa_model->tampil_detail_mahasiswa($id);

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('administrator/mahasiswa_detail',$data);
        $this->load->view('template_administrator/footer');
    }

    public function input(){
        $data['prodi'] = $this->prodi_model->tampil_data()->result();

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('administrator/form_mahasiswa',$data);
        $this->load->view('template_administrator/footer');
    }

    public function input_aksi(){
      $this->_rules();

      if($this->form_validation->run() == FALSE){
          $this->input();
      }else{
          $nim                    = $this->input->post('nim');
          $nama                   = $this->input->post('nama');
          $jenis_kelamin          = $this->input->post('jenis_kelamin');
          $tempat_lahir           = $this->input->post('tempat_lahir');
          $tanggal_lahir          = $this->input->post('tanggal_lahir');
          $alamat                 = $this->input->post('alamat');
          $email                  = $this->input->post('email');
          $telephon               = $this->input->post('telephon');
          $prodi                  = $this->input->post('id_prodi');
          $photo                  = $_FILES['photo']['name'];

          if($photo = ''){

          }else{
              $config['upload_path'] = './assets/upload';
              $config['allowed_types']  = 'jpg|png|jpeg|gif';

              $this->load->library('upload',$config);

              if(!$this->upload->do_upload('photo')){
                  echo "Gagal Upload"; die();
              }else{
                $photo = $this->upload->data('file_name');
              }
          }

          $data = array(
                  'nim'           => $nim,
                  'nama'          => $nama,
                  'jenis_kelamin' => $jenis_kelamin,
                  'tempat_lahir'  => $tempat_lahir,
                  'tgl_lahir'     => $tanggal_lahir,
                  'alamat'        => $alamat,
                  'email'         => $email,
                  'telephon'      => $telephon,
                  'id_prodi'      => $prodi,
                  'photo'         => $photo
          );

          $this->mahasiswa_model->insert_data($data,'tbl_mahasiswa');
          $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
           Data Mahasiswa Berhasil Dimpan
            
          </div>');
        redirect('administrator/mahasiswa');
      }
    }
    public function _rules(){
      $this->form_validation->set_rules('nim','NIM','required',['required' => 'NIM Tidak Boleh Kosong']);
      $this->form_validation->set_rules('nama','Nama','required',['required' => 'Nama Mahasiswa Tidak Boleh Kosong']);
      $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required',['required' => 'Jenis Kelamin Tidak Boleh Kosong']);
      $this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required',['required' => 'Tempat Lahir Tidak Boleh Kosong']);
      $this->form_validation->set_rules('alamat','Alamat','required',['required' => 'Alamat Tidak Boleh Kosong']);
      $this->form_validation->set_rules('email','Email','required',['required' => 'Email Tidak Boleh Kosong']);
      $this->form_validation->set_rules('telephon','Telephon','required',['required' => 'Telephon Tidak Boleh Kosong']);
      $this->form_validation->set_rules('id_prodi','Nama Prodi','required',['required' => 'Nama Prodi Tidak Boleh Kosong']);
     
    }
}

?>