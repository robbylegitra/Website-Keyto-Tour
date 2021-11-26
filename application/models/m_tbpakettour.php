<?php

class m_tbpakettour extends CI_Model{
	function tampil_data(){
		return $this->db->get('paket_tour');
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}	
}		