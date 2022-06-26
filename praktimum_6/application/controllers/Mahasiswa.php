<?php
class Mahasiswa extends CI_Controller{

	public function index(){
		$this->load->model('Mahasiswa_model','mhs1');
		$this->mhs1->id=1;
		$this->mhs1->nim='0000100000';
		$this->mhs1->nama='Marsyanda Angelesa';
		$this->mhs1->gender='P';
		$this->mhs1->ipk=3.77;

		$this->load->model('Mahasiswa_model','mhs2');
		$this->mhs2->id=2;
		$this->mhs2->nim='0000200000';
		$this->mhs2->nama='Arsyita Diandra Rahib.';
		$this->mhs2->gender='P';
		$this->mhs2->ipk=3.80;

		$this->load->model('Mahasiswa_model','mhs3');
		$this->mhs3->id=3;
		$this->mhs3->nim='0000300000';
		$this->mhs3->nama='Adam Malik Ibrahim';
		$this->mhs3->gender='L';
		$this->mhs3->ipk=3.77;

		$data=["judul"=>"Daftar Mahasiswa", "mahasiswa" => [$this->mhs1, $this->mhs2, $this->mhs3]];
		$this->load->view("layouts/header", $data);
		$this->load->view("mahasiswa/index", $data);
		$this->load->view("layouts/footer", $file="mahasiswa");
	}

	
}

?>