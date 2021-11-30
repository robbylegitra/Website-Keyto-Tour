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
     $gambar_artikel = $_FILES['gambar_artikel'];
     if($gambar_artikel = ''){

     }else{
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('gambar_artikel')){
          echo "Upload gagal";die();
        }else{
          $gambar_artikel = $this->upload->data('file_name');
        }
      }         

    $data = array(
      'id_artikel' => $id_artikel,
      'judul_artikel' => $judul_artikel,
      'waktu_artikel' => $waktu_artikel,
      'isi_artikel' => $isi_artikel,
      'gambar_artikel' => $gambar_artikel                  
      );
    $this->m_tbartikel->input_data($data,'artikel');
    redirect('c_admartikel');      
  }

    function hapus($id_artikel){
    $this->db->where('id_artikel', $id_artikel);
    $this->db->delete('artikel');

    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Data berhasil di hapus! </div>');
            redirect('c_admartikel');      
    }

}

