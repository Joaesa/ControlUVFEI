<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class principalmodel extends CI_Model { 
	function __construct() {
    	parent::__construct();
  	}
  public function login($User,$Password){
    $this->db->where('Usuario',$User);
      $this->db->where('Password',$Password);
      $prueba= $this->db->get('usuarios');
      if($prueba->num_rows() == 1){
        foreach ($prueba ->result() as $row){
          if(strcmp($row->Usuario,$User)!== 0){
            redirect('welcome/LoginE');
          }else{
            redirect('welcome/home');
          }
        }
        
      }else{
        redirect('welcome/LoginE');
      }
  }
  public function obtenerDatosMa($IDM){
      $this->db->where('IDM',$IDM);
      $query = $this->db->get('Maestros');
      if ($query->num_rows() > 0){
        return $query;
      }else{
        return FALSE;
      }
  }
   public function EliminarMa($IDM){
     $this->db->where('IDM',$IDM);
      $this->db->delete('Maestros');
  }
  public function obtenerDatosA($IDA){
      $this->db->where('IDA',$IDA);
      $query = $this->db->get('Asignatura');
      if ($query->num_rows() > 0){
        return $query;
      }else{
        return FALSE;
      }
  }
   public function EliminarA($IDA){
     $this->db->where('IDA',$IDA);
      $this->db->delete('Asignatura');
  }


}