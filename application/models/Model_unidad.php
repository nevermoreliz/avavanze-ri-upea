<?php 
defined('BASEPATH') or exit('No direct scrit access allowed');

class Model_unidad extends CI_model{
	
	public function __construct(){
		parent::__construct();
	}

	public function mostrar_unidad(){
		$consulta=$this->db->get("vista_unidad");
		return $consulta->result();
	}

	public function actualizar_unidad($datos_unidad,$id){
		$this->db->where('id',$id);
		$this->db->update("unidad",$datos_unidad);
	}
}