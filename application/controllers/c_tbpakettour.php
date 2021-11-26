<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_tbpakettour extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_tbpakettour');
  }

  public function index(){		
		// $data['judul'] = "Halaman artikel";
		$this->load->view('admin/v_tbpakettour');
		
	}

  public function tambah(){


    $id_paket = $this->input->post('id_paket');
    //upload foto
    $foto_paket = $_FILES['foto_paket'];
    if($foto_paket = ''){

    }else{
      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'gif|jpg|png|pdf';
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('foto_paket')){
        echo "Upload gagal";die();
      }else{
        $foto_paket = $this->upload->data('file_name');
      }
    }

    $label_paket = $this->input->post('label_paket');

//upload pdf
    $pdf_paket = $_FILES['pdf_paket'];
    if($pdf_paket = ''){

    }else{
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('pdf_paket')){
        echo "Upload gagal";die();
      }else{
        $pdf_paket = $this->upload->data('file_name');
      }
    }

    $data = array(
      'id_paket' => $id_paket,
      'label_paket' => $label_paket,
      'foto_paket' => $foto_paket,
      'pdf_paket' => $pdf_paket                  
      );
    $this->m_tbpakettour->input_data($data,'paket_tour');
    redirect('c_admpakettour');          
  }

  function hapus($id_paket){
    $this->db->where('id_paket', $id_paket);
    $this->db->delete('paket_tour');

    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Data berhasil di hapus! </div>');
            redirect('c_admpakettour');   
  }

  function download($pdf_paket){
    $data = $this->db->get_where('paket_tour',['pdf_paket'=>$pdf_paket])->row();
    force_download($data->pdf_paket,"pdf_paket");    
  }
}

