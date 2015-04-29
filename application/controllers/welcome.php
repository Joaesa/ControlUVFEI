<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('headers/librerias');
		$this->load->view('principal');
		$this->load->view('headers/footer');
	}

	public function curso(){
		$this->load->view('headers/librerias');
		$this->load->view('pagcurso');
		$this->load->view('headers/footer');
	}
	public function tmaterias(){
		$this->load->view('headers/librerias');
		$this->load->view('TMaterias');
		$this->load->view('headers/footer');
	}
	public function tmaes(){
		$this->load->view('headers/librerias');
		$this->load->view('TMaestros');
		$this->load->view('headers/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */