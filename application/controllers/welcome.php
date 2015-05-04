<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
 	{
   	parent::__construct();
 	}

	public function index()
 	{
   		$this->load->view('headers/librerias');
		$this->load->view('Login');
		$this->load->view('headers/footer');
 	}
 	public function LoginE(){
 		$this->load->view('headers/librerias');
		$this->load->view('Login');
		$this->load->view('headers/footer');
 	}
 	public function home(){
 		$this->load->view('headers/librerias');
		$this->load->view('home_view');
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


?>
