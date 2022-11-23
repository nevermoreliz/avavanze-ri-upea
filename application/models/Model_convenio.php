<?php 
defined('BASEPATH') or exit('No direct scrit access allowed');
/**    
    * Modelo de convenio 
	* @access public
    * @param array $daata recupera del controlador los datos para su almacenamiento en bd 
    * @return mix $row $result del almacenamiento 
    * @author Ing. Regis Muñez regis.munes@gmail.com
    * @copyright Copyright (c) 2018, rgs 
    * @version convenio v1.1
     */
class Model_convenio extends CI_model{
	
	public function __construct(){
		parent::__construct();
	}
////////////////////////////////////////////////////////
	/////////////////MUESTRA CONVENIOS PARA LOS CLIENTES
	public function mostrar_convenios(){
		$this->db->where("estado","Activo");
		$consulta=$this->db->get("vista_convenios");
		return $consulta->result();
	}
    public function verficacionConvenio($nombre){
		$this->db->where("nombre_convenio",$nombre);
        $this->db->where("estado","Activo");
		$consulta=$this->db->get("vista_convenios");
		return $consulta->result();
	}

	//recupera el detalle de un comvenio
	public function getConvenio($id_convenios){
		$this->db->where("id_convenios",$id_convenios);
		$consulta=$this->db->get("vista_convenios");
		return $consulta->result();
	}


	public function buscar_convenios($dato){
		$this->db->like("nombre_convenio", $dato);
		$this->db->where("estado","Activo");
		$consulta=$this->db->get("vista_convenios");
		return $consulta->result();
	}
////////////busca un comvenio para ser actualizado
	public function busca_convenio_actualizar($id_convenios){
		$this->db->where('id_convenios',$id_convenios);
		$consulta=$this->db->get("sic_convenio");
		return $consulta->result();
	}
	////////////////////////////////////////////////////////
	/////////////////MUESTRA CONVENIOS NACIONALES PARA ADMINISTRADOR
	public function mostrar_convenios_nacionales(){
        $this->db->where('estado', 'Activo');
        //$this->db->where('estado', 'Concluido');
        $this->db->or_where('estado', 'Concluido');
		$consulta=$this->db->get("vista_convenios_nacionales");
		return $consulta->result();
	}
	////////////////////////////////////////////////////////
	/////////////////MUESTRA CONVENIOS INTERNACIONALES PARA ADMINISTRADOR
	public function mostrar_convenios_internacionales(){
        $this->db->where('estado', 'Activo');
        $this->db->or_where('estado', 'Concluido');
		$consulta=$this->db->get("vista_convenios_internacionales");
		return $consulta->result();
	}

	///////////////////////////////////////////////////////////
	//////////INSERTA CONVENIO .Y RECUPÉRA SU ID
	///////////////////////////////////////////////////////////
	public function insertar_convenio($data){
		if($this->db->insert('sic_convenio',$data)){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

		///////////////////////////////////////////////////////////
	//////////ACTUALIZA UN CONVENIOS
	///////////////////////////////////////////////////////////
	public function actualizar_convenio($data,$id_convenios){
		$this->db->where('id_convenios', $id_convenios);
		$this->db->update('sic_convenio', $data);
	}
	///////////////////////////////////////////////////////////
	//////////INSERTA EN TABLA CONEVIONS Y GESTIONES
	///////////////////////////////////////////////////////////
	public function insertar_conv_gest($data){
		$this->db->insert('sic_convenio_gestion',$data);
	}
	///////////////////////////////////////////////////////////
	//////////INSERTA EN TABLA CONVENIOS Y CARREARAS
	///////////////////////////////////////////////////////////
	public function insertar_conv_carr($data){
		$this->db->insert('sic_convenio_carrera',$data);
	}

	///////////////////////////////////////////////////////////
	//////////ELIMINA CONVENIO GESTION
	///////////////////////////////////////////////////////////
	public function elimina_conv_gest($id_convenios){
		$this->db->where('id_convenios', $id_convenios);
		$this->db->delete('sic_convenio_gestion');
	}
	///////////////////////////////////////////////////////////
	//////////Elimina convenio Carrera
	///////////////////////////////////////////////////////////
	public function elimina_conv_carr($id_convenios){
		$this->db->where('id_convenios', $id_convenios);
		$this->db->delete('sic_convenio_carrera');
	}
}
