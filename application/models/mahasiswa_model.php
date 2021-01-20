<?php 

class Mahasiswa_Model extends CI_Model
{
	
	public function tampil_data(){
		$this->db->select('*');
		$this->db->from('tbl_mahasiswa mhs');
		$this->db->join('tbl_prodi pr','pr.id_prodi = mhs.id_prodi');
		$this->db->order_by('mhs.id_mahasiswa','DESC');
		return $this->db->get();
	}

	public function tampil_detail_mahasiswa($id){

		$this->db->select('*');
		$this->db->from('tbl_mahasiswa mhs');
		$this->db->join('tbl_prodi pr','pr.id_prodi = mhs.id_prodi');
		$this->db->where('mhs.id_mahasiswa',$id);
		$hasil = $this->db->get();

		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
		
	}
	public function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

}

?>