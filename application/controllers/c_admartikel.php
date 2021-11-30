<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_admartikel extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_tbartikel');
  }

  public function index(){		
		$data['artikel'] = $this->m_tbartikel->tampil_data()->result();
		$this->load->view('admin/v_admartikel', $data);
		
	}
}

