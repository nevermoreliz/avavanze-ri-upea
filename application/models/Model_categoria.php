<?php 
defined('BASEPATH') or exit('No direct scrit access allowed');

class Model_categoria extends CI_model{
	
	public function __construct(){
		parent::__construct();
	}

	public function mostrar_categoria(){
		$consulta=$this->db->get("vista_categoria");
		return $consulta->result();
	}

}