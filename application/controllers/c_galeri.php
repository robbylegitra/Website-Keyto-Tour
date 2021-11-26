<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_galeri extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('m_tbgaleri');
  }

  public function index(){		
		$data['judul'] = "Halaman artikel";
    $data['galeri'] = $this->m_tbgaleri->tampil_data()->result();
		$this->load->view('galeri',$data);
		
	}
}

