<?php
defined('BASEPATH') or exit('No direct script access allowed');

class page_tour extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
     $this->load->model('m_tbpakettour');
  }

  public function index()
  {
    $data['judul'] = "Paket Tour";
    $data['paket_tour'] = $this->m_tbpakettour->tampil_data()->result(); 
    $this->load->view('v_tour', $data);
  }
}

