<?php 

class model_mahasiswa extends CI_model{
	public function getmahasiswa() {
		return  $this->db->get('mahasiswa')->result_array();
	}

	public function tambahkeundata(){
		$isi = [
			"nama" => $this->input->post('nama',true),
			"nim" => $this->input->post('nim',true),
			"email" => $this->input->post('email',true),
			"jurusan" => $this->input->post('jurusan',true)
		];

		$this->db->insert('mahasiswa', $isi);

	}

	public function hapusdata($id){

		$this->db->delete('mahasiswa', ['id' => $id]);

	}

	public function ambilberdasarkanid($id) {
		 return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
	}

	public function ubahdatana(){
		$isi = [
			"nama" => $this->input->post('nama',true),
			"nim" => $this->input->post('nim',true),
			"email" => $this->input->post('email',true),
			"jurusan" => $this->input->post('jurusan',true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('mahasiswa', $isi );

	}

	public function caridata(){

		$keyword = $this->input->post('keyword');
		$this->db->like('nama' , $keyword);
		return $this->db->get('mahasiswa')->result_array();

	}

}

