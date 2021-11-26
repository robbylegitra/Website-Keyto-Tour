<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    // $this->load->model('m_tbcarousel');
         if (!$this->session->userdata('username_admin')) 
        {
            redirect('c_login');
        }    
  }

  public function index(){		
		// $data['carousel'] = $this->m_tbcarousel->tampil_data()->result();
    $data['admin'] = $this->db->get_where('admin',['username_admin'=>$this->session->userdata('username_admin')])->row_array();
    if ($data['admin']) 
    {
      $this->load->view('admin/v_admartikel', $data);
    } 

    else 
    {
      redirect('c_block');
    }         
	}
}

