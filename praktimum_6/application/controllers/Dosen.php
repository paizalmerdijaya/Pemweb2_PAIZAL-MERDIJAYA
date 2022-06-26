<?php
class Dosen extends CI_Controller{
	public function index(){
		$this->load->model('Dosen_model','dosen1');
		$this->dosen1->id=1;
		$this->dosen1->nidn='001';
		$this->dosen1->nama='Ahmad Rio';
		$this->dosen1->gender='L';
		$this->dosen1->pendidikan='Teknik Informatika';
	
		$this->load->model('Dosen_model','dosen2');
		$this->dosen2->id=2;
		$this->dosen2->nidn="002";
		$this->dosen2->nama='Khoirul Umam';
	 	$this->dosen2->gender='L';
		$this->dosen2->pendidikan='Teknik Informatika';
	
		$this->load->model('Dosen_model','dosen3');
		$this->dosen3->id=3;
		$this->dosen3->nidn='003';
		$this->dosen3->nama='Sapto Waluyo';
		$this->dosen3->gender='L';
		$this->dosen3->pendidikan='Sistem Informatika';


		$data=["judul"=>"Daftar Dosen", "dosen" => [$this->dosen1, $this->dosen2, $this->dosen3]];
		$this->load->view("layouts/header", $data);
		$this->load->view("dosen/index");
		$this->load->view("layouts/footer", $file="dosen");
	}
}
?>
