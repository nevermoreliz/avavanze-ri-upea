<?php 
defined('BASEPATH') or exit('No direct scrit access allowed');

class Model_contacto extends CI_model{
	
	public function __construct(){
		parent::__construct();
	}

	public function mostrar_contactos(){
		$this->db->where('activo', 'Activo');
		$consulta=$this->db->get("vista_contactos");
		return $consulta->result();
	}

	public function buscar_contactos($dato){
		$this->db->like("carrera", $dato);
		$consulta=$this->db->get("vista_contactos");
		return $consulta->result();
	}

	public function insertar_contactos($data){
		if($this->db->insert('sic_contactos',$data)){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function buscar_contactos_id($id_contactos){
		$this->db->where("id_contactos", $id_contactos);
		$consulta=$this->db->get("sic_contactos");
		return $consulta->result();
	}

	public function actualizar_contactos($datos_coord,$id_contactos){
		$this->db->where("id_contactos", $id_contactos);
		$consulta=$this->db->update("sic_contactos",$datos_coord);
	}

	////////////////EÑLIMINA PERSONAS DE PREINSCRIPCION
	public function elimina_contactos($id_contactos){
		$this->db->where('id_contactos', $id_contactos);
		$this->db->delete('sic_contactos');
	}
}
