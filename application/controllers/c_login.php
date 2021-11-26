<?php 
 
class c_login extends CI_Controller{
 
  function __construct(){
    parent::__construct();    
    $this->load->model('m_login');
    $this->load->library('form_validation','session');
 
  }
 
  function index(){
    // Cek apakah sudah login atau belum?
    if ($this->session->userdata('username_admin')) {
      redirect('c_admartikel');
    }

    $this->form_validation->set_rules('username_admin','username_admin','trim|required', [

      'required' => 'Username Tidak Boleh Kosong!'
    ]);
    $this->form_validation->set_rules('password_admin','password_admin','trim|required', [

      'required' => 'Password Tidak Boleh Kosong!'
    ]);

    if ($this->form_validation->run() == false){
    $this->load->view('admin/login');
  } else{
    $this-> aksi_login();
  }
  }
 
  function aksi_login(){
    $username_admin = $this->input->post('username_admin');
    $password_admin = $this->input->post('password_admin');
    
    $admin = $this->db->get_where('admin', ['username_admin' => $username_admin])->row_array();

    if ($admin)
    {
      if ($password_admin == $admin['password_admin'])
      {
        $data = [
          'username_admin' => $admin['username_admin'],

          
        ];
        $this->session->set_userdata($data);
        redirect('c_admartikel');
      }
      else 
      {
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Password Salah! </div>');
      redirect(base_url('c_login'));
      }
    }
    else 
    {
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Akun tidak terdaftar! </div>');
      redirect('c_login');
    }    
  }
 
  function logout(){
    $this->session->sess_destroy();
    redirect(base_url('c_login'));
  }
}