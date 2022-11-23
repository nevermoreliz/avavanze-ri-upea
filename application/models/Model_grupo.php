<?php 
defined('BASEPATH') or exit('No direct scrit access allowed');

class Model_grupo extends CI_model{
	
	public function __construct(){
		parent::__construct();
	}

	public function mostrar_grupo(){
		$consulta=$this->db->get("sic_grupo");
		return $consulta->result();
	}

	public function insertar_grupo($data){
		if($this->db->insert('sic_grupo',$data)){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	////////////////ACTUALIZA grupo
	public function actualiza_grupo($datos_grupo, $id_grupo){
		$this->db->where("id_grupo",$id_grupo);
        $this->db->update("sic_grupo",$datos_grupo);
	}

	////////////////EÑLIMINA PERSONAS DE PREINSCRIPCION
	public function elimina_grupo($id_grupo){
		$this->db->where('id_grupo', $id_grupo);
		$this->db->delete('sic_grupo');
	}
}