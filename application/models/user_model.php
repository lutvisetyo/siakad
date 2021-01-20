<?php

class User_Model extends CI_Model{

	public function ambil_data($id){
		$this->db->where('username',$id);
		return $this->db->get('tbl_user')->row();
	}
}

?>