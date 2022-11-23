<?php 
defined('BASEPATH') or exit('No direct scrit access allowed');

class Model_universitario extends CI_model{
	
	public function __construct(){
		parent::__construct();
	}

	public function insertar_universitario($data){
		if($this->db->insert('sic_universitario',$data)){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	////////////////ACTUALIZA UNIVERSITARIO DE PREINSCRIPCION
	public function actualiza_universitario_pre($datos_universitario,$id_universitario){
		$this->db->where("id_universitario",$id_universitario);
        $this->db->update("sic_universitario",$datos_universitario);
	}
	////////////////EÑLIMINA universitariro
	public function elimina_universitario_pre($id_universitario){
		$this->db->where('id_universitario', $id_universitario);
		$this->db->delete('sic_universitario');
	}

}