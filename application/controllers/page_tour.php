<?php
defined('BASEPATH') or exit('No direct script access allowed');

class page_tour extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }

  public function index()
  {
    $data['judul'] = "Paket Tour";
    $this->load->view('v_tour', $data);
  }
}

