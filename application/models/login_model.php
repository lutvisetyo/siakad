<?php

/**
 * 
 */
class Login_Model extends CI_Model
{
	
	public function cek_login($user,$pass){
		$this->db->where("username",$user);
		$this->db->where("password",$pass);
		return $this->db->get('tbl_user');
	}
	/*
	public function get_login_data($user,$pass){
		$u = $user;
		$p = md5($pass);

		$query_cekLogin = $this->db->get_where('tbl_user',array('username' => $u, 'password' => $p));

		if(count($query_cekLogin->result())> 0){
			foreach($query_cekLogin->result() as $qck){
				foreach($query_cekLogin->result as $ck){
					$sess_data 	['logged_in'] 	= TRUE;
					$sess_data 	['username']	= $ck->username;
					$sess_data	['password']	= $ck->password;
					$sess_data	['level']		= $ck->level;
					$this->session->set_userdata($sess_data);
				}
				redirect('administrator/dasboard');
			}
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Username dan Password Anda Salah
				  
				</div>');
			redirect('administrator/auth');
		}
	}*/
}

?>