<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_admgaleri extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    // $this->load->helper('url');
    $this->load->model('m_tbgaleri');

  }

  public function index(){		
    $data['galeri'] = $this->m_tbgaleri->tampil_data()->result();
		$this->load->view('admin/v_admgaleri', $data);
		
	}
}

