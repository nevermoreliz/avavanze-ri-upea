<?php 
defined('BASEPATH') or exit('No direct scrit access allowed');

class Model_personal extends CI_model{
	
	public function __construct(){
		parent::__construct();
	}

	public function mostrar_personal(){
		$consulta=$this->db->get("vista_personal");
		return $consulta->result();
	}

	public function insertar_persona($data){
		if($this->db->insert('sic_persona',$data)){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	////////////////ACTUALIZA PERSONAL DE PREINSCRIPCION
	public function actualiza_persona_pre($datos_persona, $id_persona){
		$this->db->where("id_persona",$id_persona);
        $this->db->update("sic_persona",$datos_persona);
	}

	////////////////EÑLIMINA PERSONAS DE PREINSCRIPCION
	public function elimina_persona_pre($id_persona){
		$this->db->where('id_persona', $id_persona);
		$this->db->delete('sic_persona');
	}
	//////////////MUESTRA EL PERSONAL Y USUARIOS PARA ADMINISTRADOR
	public function mostrar_per_usuario(){
		$consulta=$this->db->get("vista_personal_usuarios");
		return $consulta->result();
	}
	////inserta usuario para personal
	public function insertar_usuario($data){
		if($this->db->insert('sic_usuario',$data)){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}
	////////////ACTRUALIZA USUARIO
	public function actualiza_usuario_pass($datos_usuario, $id_usuario,$password){
		$this->db->where("password",$password);
		$this->db->where("id_usuario",$id_usuario);
        $this->db->update("sic_usuario",$datos_usuario);
	}
	////////////ACTRUALIZA USUARIO CON CONTRASEÑA
	public function actualiza_usuario($datos_usuario, $id_usuario){
		$this->db->where("id_usuario",$id_usuario);
        $this->db->update("sic_usuario",$datos_usuario);
	}
	////////////////EÑLIMINA USUARIO
	public function elimina_usuario($id_usuario){
		$this->db->where('id_usuario', $id_usuario);
		$this->db->delete('sic_usuario');
	}

	////inserta detalle grupo
	public function insertar_detalle_grupo($data){
		$this->db->insert('sic_detalle_grupo',$data);
	}
	////////////ACTRUALIZA detalle grupo
	public function actualizar_detalle_grupo($datos_detalle_grupo, $id_detallegrupo){
		$this->db->where("id_detallegrupo",$id_detallegrupo);
        $this->db->update("sic_detalle_grupo",$datos_detalle_grupo);
	}
	////////////////EÑLIMINA detalle grupo
	public function elimina_detalle_grupo($id_detallegrupo){
		$this->db->where('id_detallegrupo', $id_detallegrupo);
		$this->db->delete('sic_detalle_grupo');
	}
}