<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    // $this->load->model('m_tbcarousel');
  }

  public function index(){		
		// $data['carousel'] = $this->m_tbcarousel->tampil_data()->result();
		$this->load->view('admin/v_homeadmin');
		
	}
}

