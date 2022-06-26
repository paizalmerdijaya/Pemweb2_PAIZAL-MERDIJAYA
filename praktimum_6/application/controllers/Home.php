<?php
class Home extends CI_Controller{
	public function index(){

		$data=["judul"=>"Tugas Praktikum6"];
		$this->load->view("layouts/header", $data);
		$this->load->view("home/index");
		$this->load->view("layouts/footer");
	}
}
?>