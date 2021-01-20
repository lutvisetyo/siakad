<?php

/**
 * 
 */
class Matakuliah_Model extends CI_Model
{
	
	public function tampil_data(){
		$this->db->select('*');
		$this->db->from('tbl_makul mk');
		$this->db->join('tbl_prodi pr','pr.id_prodi = mk.id_prodi');
		$this->db->order_by('mk.id_makul','DESC');
		return $this->db->get();
	}

	public function input_data($data){
		$this->db->insert('tbl_makul',$data);
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