<?php

class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_login');
 
	}
 
	function index(){
        $isi['judulna'] = 'Selamat Datang';
		$this->load->view ('templates/header' ,$isi);
		$this->load->view ('login/view_login');
		$this->load->view ('templates/footer');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = [
			'username' => $username,
			'password' => md5($password)
        ];
		$cek = $this->model_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = [
				'nama' => $username,
				'status' => "login"
            ];
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
 
		}else{
			echo "Username atau password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}