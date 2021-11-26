<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_artikel extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('m_tbartikel');
  }

  public function index(){		
		$data['judul'] = "Halaman artikel";
    $data['artikel'] = $this->m_tbartikel->tampil_data()->result();
		$this->load->view('v_artikel',$data);
		
	}

  public function detail($id_artikel){
    $id_artikel = $this->uri->segment(3);
    $data['artikel'] = $this->m_tbartikel->tampil_detail($id_artikel);
    $this->load->view('detail_artikel', $data);
  }
}

