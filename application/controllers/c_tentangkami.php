<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_tentangkami extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }

  public function index(){		
		$data['judul'] = "Halaman artikel";
		$this->load->view('tentang_kami',$data);
		
	}
}

