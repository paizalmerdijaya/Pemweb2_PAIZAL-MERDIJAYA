<?php
class Mata_kuliah extends CI_Controller{
	public function index(){
		$this->load->model('Matakuliah_model','matkul1');
		$this->matkul1->id=1;
		$this->matkul1->nama='Statistik';
		$this->matkul1->sks='3';
		$this->matkul1->kode='0013';
	
		$this->load->model('Matakuliah_model','matkul2');
		$this->matkul2->id=2;
		$this->matkul2->nama='Komunikasi Efektif';
		$this->matkul2->sks='3';
		$this->matkul2->kode='0014';
	
		$this->load->model('Matakuliah_model','matkul3');
		$this->matkul3->id=3;
		$this->matkul3->nama='PPKN';
		$this->matkul3->sks='3';
		$this->matkul3->kode='0015';

		 
		$data=["judul"=>"Mata Kuliah", "mata_kuliah" => [$this->matkul1, $this->matkul2, $this->matkul3]];
		$this->load->view("layouts/header", $data);
		$this->load->view("mataKuliah/index", $data);
		$this->load->view("layouts/footer", $file="matkul");
	}

	
}
?>