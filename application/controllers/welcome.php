<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
 	{
   	parent::__construct();
   	$this->load->model('principalmodel');		
 	}

	public function index()
 	{
 		$this->db->where('Logeado','1');
 		$prueba= $this->db->get('usuarios');
 		if($prueba->num_rows() == 1){
 			redirect('welcome/home');
 		}else{
	   		$this->load->view('headers/librerias');
			$this->load->view('Login');
			$this->load->view('headers/footer');
	    }
 	}
 	public function salir(){
 		$this->db->where('Logeado','1');
 		$prueba= $this->db->get('usuarios');
 		if($prueba->num_rows() == 1){
 			foreach ($prueba ->result() as $row){
 				$data=array(
              'Logeado'=>'0',
            );
            $this->db->where('Usuario',$row->Usuario);
            $this->db->update('usuarios',$data);
            redirect(base_url());
 			}
 		}
 	}
 	public function falta(){
 		$this->load->view('headers/librerias');
		$this->load->view('horarios');
		$this->load->view('headers/footer');
 	}
 	public function home(){
 		$this->load->view('headers/librerias');
		$this->load->view('home_view');
		$this->load->view('headers/footer');
 	}
	public function curso(){
		$this->load->view('headers/librerias');
		$this->load->view('Tcurso');
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
	public function agcurso(){
		$this->load->view('headers/librerias');
		$this->load->view('insertarCurso');
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
	public function editarCurso(){
		$NRC= $this->uri->segment(3);
		$obtenerDatos= $this->principalmodel->obtenerDatosCu($NRC);
		if($obtenerDatos != False){
			foreach ($obtenerDatos->result() as $key) {
					$IDA= $key->IDA;
					$IDM= $key->IDM;
			}
			$data = array(
				'NRC'=>$NRC,
				'IDA'=>$IDA,
				'IDM'=>$IDM
				);
		}else{
			return FALSE;
		}
		$this->load->view('headers/librerias');
		$this->load->view('editarCurso',$data);
		$this->load->view('headers/footer');
	}
	public function eliminarMaterias(){
			$IDA = $this->uri-> segment(3);
			$this->principalmodel->EliminarA($IDA);

			$this->load->view('headers/librerias');
			$this->load->view('TMaterias');
			$this->load->view('headers/footer');
	}

	public function eliminarCurso(){
			$NRC = $this->uri-> segment(3);
			$this->principalmodel->EliminarCu($NRC);

			$this->load->view('headers/librerias');
			$this->load->view('Tcurso');
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
	public function editarAA(){
		$IDM = $this->uri->segment(3);
		$data=array(
				'IDM'=>$IDM
			);
		$this->load->view('headers/librerias');
		$this->load->view('editarAA',$data);
		$this->load->view('headers/footer');


	}
	public function eliminarMaestro(){
			$IDM = $this->uri-> segment(3);
			$this->principalmodel->EliminarMa($IDM);

			$this->load->view('headers/librerias');
			$this->load->view('TMaestros');
			$this->load->view('headers/footer');
	}
	public function eliminarAsig(){
		$IDAsignatura = $this->uri-> segment(3);
		$this->principalmodel->EliminarAA($IDAsignatura);
		
		$this->load->view('headers/librerias');
		$this->load->view('TMaestros');
		$this->load->view('headers/footer');

	}
	public function agasig(){
			$this->load->view('headers/librerias');
			$this->load->view('AsociarAM');
			$this->load->view('headers/footer');
	}

	public function tsalon(){
			$this->load->view('headers/librerias');
			$this->load->view('TSalon');
			$this->load->view('headers/footer');
	}

}


?>
