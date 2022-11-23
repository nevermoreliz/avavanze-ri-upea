<?php 
defined('BASEPATH') or exit('No direct scrit access allowed');

class Model_tipo extends CI_model{
	
	public function __construct(){
		parent::__construct();
	}

	public function mostrar_todo_tipo(){
		$consulta=$this->db->get("sic_tipo_convenio");
		return $consulta->result();
	}
	//copiar
	public function insertar_tipo($data){
		if($this->db->insert('sic_tipo_convenio',$data)){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function buscar_gestion($id_tipo){
		$this->db->where('id_tipo',$id_tipo);
		$consulta=$this->db->get("sic_tipo_convenio");
		return $consulta->result();
	}

	public function actualizar_tipo($data,$id){
		$this->db->where("id_tipo_convenio",$id);
        $this->db->update("sic_tipo_convenio",$data);
	}
	////////////busca un tipo para ser actualizado
	public function busca_tipo_actualizar($id_tipo_convenio){
		$this->db->where('id_tipo_convenio',$id_tipo_convenio);
		$consulta=$this->db->get("sic_tipo_convenio");
		return $consulta->result();
	}
}