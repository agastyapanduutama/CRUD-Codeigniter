<?php 

class Mahasiswa extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_mahasiswa');
		$this->load->library('form_validation');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index() {


		$isi['judulna'] = 'Daftar Murid';
		$isi['mahasiswa'] = $this->model_mahasiswa->getmahasiswa();
		if ($this->input->post('keyword')) {


			$isi['mahasiswa'] = $this->model_mahasiswa->caridata();
		}
		$this->load->view ('templates/header' ,$isi);
		$this->load->view ('mahasiswa/index',$isi);
		$this->load->view ('templates/footer');
	}

	public function tambahkeun() {

		$isi['judulna'] = 'tambah data';
		$isi['jurusan'] = ['Teknik Informatika', 'Teknik Manufaktur', 'Teknik Permesinan','Teknik Sipil', 'Teknik Kendaraan Ringan'];

		$this->form_validation->set_rules('nama', 'Nama' ,'required');
		$this->form_validation->set_rules('nim', 'nim' ,'required|numeric');
		$this->form_validation->set_rules('email', 'email' ,'required|valid_email' );

		if ($this->form_validation->run() == FALSE) {
			$this->load->view ('templates/header' ,$isi);
			$this->load->view ('mahasiswa/tambah');
			$this->load->view ('templates/footer');
		} else { 
			$this->model_mahasiswa->tambahkeundata();
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('mahasiswa');
		}
		
	}

	public function hapusdata($id) {
		$this->model_mahasiswa->hapusdata($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('mahasiswa');
	}

	public function details($id) {
		$isi['judulna'] = 'details';
		$isi['mahasiswa'] = $this->model_mahasiswa->ambilberdasarkanid($id);
		$this->load->view ('templates/header' ,$isi);
		$this->load->view ('mahasiswa/detail',$isi);
		$this->load->view ('templates/footer');

	}

	public function ubah($id) {
		$isi['judulna'] = 'ubah data';
		$isi['mahasiswa'] = $this->model_mahasiswa->ambilberdasarkanid($id);
		$isi['jurusan'] = ['Teknik Informatika', 'Teknik Manufaktur', 'Teknik Permesinan','Teknik Sipil', 'Teknik Kendaraan Ringan'];

		$this->form_validation->set_rules('nama', 'Nama' ,'required');
		$this->form_validation->set_rules('nim', 'nim' ,'required|numeric');
		$this->form_validation->set_rules('email', 'email' ,'required|valid_email' );

		if ($this->form_validation->run() == FALSE) {
			$this->load->view ('templates/header' ,$isi);
			$this->load->view ('mahasiswa/ubah' ,$isi);
			$this->load->view ('templates/footer');
		} else { 
			$this->model_mahasiswa->ubahdatana();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('mahasiswa');
		}
	}

}