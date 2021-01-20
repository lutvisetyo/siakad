<?php

/**
 * 
 */
class Jurusan_Model extends CI_Model
{
	
	public function tampil_data(){
		return $this->db->get('tbl_jurusan');
	}

	public function input_data($data){
		$this->db->insert('tbl_jurusan',$data);
	}

	public function edit_data($id_jurusan,$table){
		return $this->db->get_where($table,$id_jurusan);
	}

	public function update_data($id_jurusan,$data,$table){
		$this->db->where($id_jurusan);
		$this->db->update($table,$data);
	}

	public function hapus_data($id_jurusan,$table){
		$this->db->where($id_jurusan);
		$this->db->delete($table);
	}
}

?>