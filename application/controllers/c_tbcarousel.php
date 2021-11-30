<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_tbcarousel extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_tbcarousel');
  }

  public function index(){		
		// $data['judul'] = "Halaman artikel";
		$this->load->view('admin/v_tbcarousel');
		
	}

  public function tambah(){
     $id_carousel = $this->input->post('id_carousel');
     $gambar_carousel = $_FILES['gambar_carousel'];
     if($gambar_carousel = ''){

     }else{
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('gambar_carousel')){
          echo "Upload gagal";die();
        }else{
          $gambar_carousel = $this->upload->data('file_name');
        }
      }
    $data = array(
      'id_carousel' => $id_carousel,
      'gambar_carousel' => $gambar_carousel                  
      );
    $this->m_tbcarousel->input_data($data,'carousel');
    redirect('c_admin'); 
    }

    function hapus($id_carousel){
    $this->db->where('id_carousel', $id_carousel);
    $this->db->delete('carousel');

    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Data berhasil di hapus! </div>');
            redirect('c_admin');      
    }  
}

