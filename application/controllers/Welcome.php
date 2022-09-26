<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('Latihan_model');
		// echo "Selamat datang di construct";
	}
	public function index()
	{
		$data['soal1']= $this->Latihan_model->getSoal1();
		$this->load->view('soal1', $data);
		
	}

	public function soal2(){
		$soaldua['soal2']= $this->Latihan_model->getSoal2();
		$this->load->view('soal2', $soaldua);
	}

	public function soal3(){
		$soaltiga['soal3']=$this->Latihan_model->getSoal3();
		$this->load->view('soal3', $soaltiga);
	}

	public function soal4(){
		$soalempat['soal4']=$this->Latihan_model->getSoal4();
		$this->load->view('soal4', $soalempat);
	}

	public function soal5(){
		$soallima['soal5']=$this->Latihan_model->getSoal5();
		$this->load->view('soal5', $soallima);
	}

	public function soal6(){
		$soalenam['soal6']=$this->Latihan_model->getSoal6();
		$this->load->view('soal6', $soalenam);
	}
}
