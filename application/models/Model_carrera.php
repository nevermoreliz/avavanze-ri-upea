<?php 
defined('BASEPATH') or exit('No direct scrit access allowed');

class Model_carrera extends CI_model{
	
	public function __construct(){
		parent::__construct();
	}

	public function mostrar_todo_carrera(){
		$consulta=$this->db->get("sic_carrera");
		return $consulta->result();
	}
	public function insertar_carrera($data){
		if($this->db->insert('sic_carrera',$data)){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function buscar_carrera($id_tipo){
		$this->db->where('id_carrera',$id_carrera);
		$consulta=$this->db->get("sic_carrera");
		return $consulta->result();
	}

	public function actualizar_carrera($data,$id){
		$this->db->where("id_carrera",$id);
        $this->db->update("sic_carrera",$data);
	}
	////busca carrera segun al convenio que esta asignado
	public function buscar_carrera2($id_convenios){
		$this->db->where('id_convenios',$id_convenios);
		$consulta=$this->db->get("vista_carrera_convenios");
		return $consulta->result();
	}
}