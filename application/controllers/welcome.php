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
<<<<<<< HEAD
	public function tmaes(){
		$this->load->view('headers/librerias');
		$this->load->view('TMaestros');
		$this->load->view('headers/footer');
=======
	function login(){
		$this->load->helper(array('form'));
		$this->load->view('login_view');
>>>>>>> origin/master
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>
