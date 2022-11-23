<?php 
defined('BASEPATH') or exit('No direct scrit access allowed');

class Model_preinscripcion extends CI_model{
	
	public function __construct(){
		parent::__construct();
	}

	public function insertar_preinscripcion($data){
		if($this->db->insert('sic_preinscripcion',$data)){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function mostrar_preinscripcion(){
		$consulta=$this->db->get("vista_preinscripcion");
		return $consulta->result();
	}

	////////////////ACTUALIZA preinscripcion DE PREINSCRIPCION
	public function actualiza_preinscripcion_pre($datos_preinscripcion,$id_preinscripcion){
		$this->db->where("id_preinscripcion",$id_preinscripcion);
        $this->db->update("sic_preinscripcion",$datos_preinscripcion);
	}
	////////////////EÑLIMINA PREINSCRIPCION
	public function elimina_preinscripcion_pre($id_preinscripcion){
		$this->db->where('id_preinscripcion', $id_preinscripcion);
		$this->db->delete('sic_preinscripcion');
	}

}

