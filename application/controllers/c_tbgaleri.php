<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_tbgaleri extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_tbgaleri');
  }

  public function index(){		
		// $data['judul'] = "Halaman artikel";
		$this->load->view('admin/v_tbgaleri');
		
	}

  public function tambah(){
     $id_galeri = $this->input->post('id_galeri');
     $label_galeri = $this->input->post('label_galeri');
     $tentang_galeri = $this->input->post('tentang_galeri');
     $foto_galeri = $_FILES['foto_galeri'];
     if($foto_galeri = ''){

     }else{
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('foto_galeri')){
          echo "Upload gagal";die();
        }else{
          $foto_galeri = $this->upload->data('file_name');
        }
      }
    $data = array(
      'id_galeri' => $id_galeri,
      'label_galeri' => $label_galeri,
      'foto_galeri' => $foto_galeri,
      'tentang_galeri' => $tentang_galeri                  
      );
    $this->m_tbgaleri->input_data($data,'galeri');
    redirect('c_admgaleri'); 
    }

    function hapus($id_galeri){
    $this->db->where('id_galeri', $id_galeri);
    $this->db->delete('galeri');

    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Data berhasil di hapus! </div>');
            redirect('c_admgaleri');      
    }
  }

