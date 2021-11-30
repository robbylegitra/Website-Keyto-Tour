<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    // $this->load->helper('url');
  }

  public function index(){		
		// $data['judul'] = "Halaman artikel";
		$this->load->view('admin/v_homeadmin');
		
	}
}

