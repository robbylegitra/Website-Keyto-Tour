<?php

class m_tbartikel extends CI_Model{
	function tampil_data(){
		return $this->db->get('artikel');
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function tampil_detail($id_artikel){
    	$query = $this->db->query("SELECT * FROM artikel WHERE id_artikel = '$id_artikel'");
    	return $query->result();
  }	
}		