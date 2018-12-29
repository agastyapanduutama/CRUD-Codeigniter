<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$isi['judulna'] = 'Berhasil Masuk';
		$this->load->view('templates/header', $isi);
		$this->load->view('home/index', $isi);
		$this->load->view('templates/footer');
	}
}