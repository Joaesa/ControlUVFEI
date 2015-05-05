<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class principalmodel extends CI_Model { 
	function __construct() {
    	parent::__construct();
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