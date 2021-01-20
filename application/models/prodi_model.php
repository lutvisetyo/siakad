<?php

/**
 * 
 */
class Prodi_Model extends CI_Model
{
	
	public function tampil_data(){
		$this->db->select('*');
		$this->db->from('tbl_prodi pr');
		$this->db->join('tbl_jurusan jr','pr.id_jurusan = jr.id_jurusan');
		$this->db->order_by('pr.id_prodi','DESC');
		return $this->db->get();
	}

	public function input_data($data){
		$this->db->insert('tbl_prodi',$data);
	}

	public function edit_data($id_prodi){
		$this->db->select('*');
		$this->db->from('tbl_prodi pr');
		$this->db->join('tbl_jurusan jr','pr.id_jurusan = jr.id_jurusan');
		$this->db->where($id_prodi);
		return $this->db->get();
	}

	public function update_data($id_prodi,$data,$table){
		$this->db->where($id_prodi);
		$this->db->update($table,$data);
	}

	public function hapus_data($id_prodi,$table){
		$this->db->where($id_prodi);
		$this->db->delete($table);
	}
}

?>