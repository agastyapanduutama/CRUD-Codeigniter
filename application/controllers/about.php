<?php 

class about extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index(){

		$isi['judulna'] = 'Selamat Datang';
		$this->load->view('templates/header', $isi);
		$this->load->view('about/index');
		$this->load->view('templates/footer');
	}
}