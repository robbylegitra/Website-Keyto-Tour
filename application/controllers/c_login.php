<?php 
 
class c_login extends CI_Controller{
 
  function __construct(){
    parent::__construct();    
    $this->load->model('m_login');
 
  }
 
  function index(){
    $this->load->view('admin/login');
  }
 
  function aksi_login(){
    $username_admin = $this->input->post('username_admin');
    $password_admin = $this->input->post('password_admin');
    $where = array(
      'username_admin' => $username_admin,
      'password_admin' => ($password_admin)
      );
    $cek = $this->m_login->cek_login("admin",$where)->num_rows();
    if($cek > 0){
 
      $data_session = array(
        'nama' => $username_admin,
        'status' => "login"
        );
 
      $this->session->set_userdata($data_session);
 
      redirect(base_url("c_admin"));
 
    }else{
      echo "Username dan password salah !";
    }
  }
 
  function logout(){
    $this->session->sess_destroy();
    redirect(base_url('c_login'));
  }
}