<?php 

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	
	public function index($nama = 'user') {


		$isi['judulna'] = 'Halaman Home';
		$isi['nama'] = $nama;
		$this->load->view('templates/header', $isi);
		$this->load->view('home/index', $isi);
		$this->load->view('templates/footer');
	}
}