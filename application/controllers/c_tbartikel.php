<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_tbartikel extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_tbartikel'); 
  }

  public function index(){		
		// $data['judul'] = "Halaman artikel";
		$this->load->view('admin/v_tbartikel');
		
	}

  public function tambah(){
     $id_artikel = $this->input->post('id_artikel');
     $judul_artikel = $this->input->post('judul_artikel');
     $waktu_artikel = $this->input->post('waktu_artikel');
     $isi_artikel = $this->input->post('isi_artikel');    

    $data = array(
      'id_artikel' => $id_artikel,
      'judul_artikel' => $judul_artikel,
      'waktu_artikel' => $waktu_artikel,
      'isi_artikel' => $isi_artikel                  
      );
    $this->m_tbartikel->input_data($data,'artikel');
    redirect('c_admartikel');      
  }
}

