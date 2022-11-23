<?php 
defined('BASEPATH') or exit('No direct scrit access allowed');

class Model_gestion extends CI_model{
	
	public function __construct(){
		parent::__construct();
	}

	public function mostrar_gestion($id_convenios){
		$this->db->where('id_convenios',$id_convenios);
		$consulta=$this->db->get("vista_gestion");
		return $consulta->result();
	}

	public function mostrar_todo_gestion(){
		$consulta=$this->db->get("sic_gestion");
		return $consulta->result();
	}
	//copiar
	public function insertar_gestion($data){
		if($this->db->insert('sic_gestion',$data)){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function buscar_gestion($id_gestion){
		$this->db->where('id_gestion',$id_gestion);
		$consulta=$this->db->get("sic_gestion");
		return $consulta->result();
	}

	public function actualizar_gestion($data,$id){
		$this->db->where("id_gestion",$id);
        $this->db->update("sic_gestion",$data);
	}
	//copiar//
}