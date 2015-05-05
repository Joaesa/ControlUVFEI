<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
 	{
   	parent::__construct();
   	$this->load->model('principalmodel');		
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
 	public function falta(){
 		$this->load->view('headers/librerias');
		$this->load->view('falta');
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
	public function agmate(){
		$this->load->view('headers/librerias');
		$this->load->view('insertarMaterias');
		$this->load->view('headers/footer');
	}
	public function agmaest(){
		$this->load->view('headers/librerias');
		$this->load->view('insertarMaestro');
		$this->load->view('headers/footer');
	}
	public function editarMaterias(){
		$IDA = $this->uri->segment(3);
		$obtenerDatos= $this->principalmodel->obtenerDatosA($IDA);
		if($obtenerDatos != FALSE){
			foreach ($obtenerDatos->result() as $row){
				
				$Asignatura= $row->Asignatura;
				$Carrera=$row->Carrera;
				$Horas=$row->Horas;
				$Requerimiento=$row->Requerimiento;
				$Creditos=$row->Creditos;
			}
			$data = array(
					'IDA'=>$IDA,
					'Asignatura'=>$Asignatura,
					'Carrera'=>$Carrera,
					'Horas'=>$Horas,
					'Requerimiento'=>$Requerimiento,
					'Creditos'=>$Creditos,
				);
		}else{
			return FALSE;
		}
		$this->load->view('headers/librerias');
		$this->load->view('editarMaterias',$data);
		$this->load->view('headers/footer');

}
public function eliminarMaterias(){
		$IDA = $this->uri-> segment(3);
		$this->principalmodel->EliminarAIDA($IDA);

		$this->load->view('headers/librerias');
		$this->load->view('TMaterias');
		$this->load->view('headers/footer');
	}

	public function tmaes(){
		$this->load->view('headers/librerias');
		$this->load->view('TMaestros');
		$this->load->view('headers/footer');
	}
	
	public function editarMaestro(){
		$IDM = $this->uri->segment(3);
		$obtenerDatos= $this->principalmodel->obtenerDatosMa($IDM);
		if($obtenerDatos != FALSE){
			foreach ($obtenerDatos->result() as $row){
				
				$Nombre= $row->Nombre;
				$ApellidoP=$row->ApellidoP;
				$ApellidoM=$row->ApellidoM;
			}
			$data = array(
					'IDM'=>$IDM,
					'Nombre'=>$Nombre,
					'ApellidoP'=>$ApellidoP,
					'ApellidoM'=>$ApellidoM,
				);
		}else{
			return FALSE;
		}
		$this->load->view('headers/librerias');
		$this->load->view('editarMaestro',$data);
		$this->load->view('headers/footer');

}
public function eliminarMaestro(){
		$IDM = $this->uri-> segment(3);
		$this->principalmodel->EliminarMa($IDM);

		$this->load->view('headers/librerias');
		$this->load->view('TMaestros');
		$this->load->view('headers/footer');
	}

	
}


?>
