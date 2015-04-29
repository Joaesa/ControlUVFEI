<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
 	{
   	parent::__construct();
 	}

	public function index()
 	{
   	$this->load->helper(array('form'));
   	$this->load->view('login_view');
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
	public function login(){
		$this->load->helper(array('form'));
		$this->load->view('login_view');
	}
}


?>
