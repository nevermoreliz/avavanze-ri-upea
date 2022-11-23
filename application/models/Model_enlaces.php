<?php 
defined('BASEPATH') or exit('No direct scrit access allowed');
/**    
    * Modelo de enlaces 
	* @access public
    * @param array $daata recupera del controlador los datos para su almacenamiento en bd 
    * @return mix $row $result del almacenamiento 
    * @author Ing. Regis Muñez regis.munes@gmail.com
    * @copyright Copyright (c) 2018, rgs 
    * @version convenio v1.1
     */
class Model_enlaces extends CI_model{
	
	public function __construct(){
		parent::__construct();
	}
////////////////////////////////////////////////////////
	/////////////////MUESTRA enlaces
	public function mostrar_enlaces(){
		$this->db->where("estado","1");
        $this->db->order_by("tipo_enlace", "asc");
        //$this->db->group_by("tipo_enlace");  
		$consulta=$this->db->get("enlace");
		return $consulta->result();
	}

	

		///////////////////////////////////////////////////////////
	//////////ACTUALIZA publicaciones
	///////////////////////////////////////////////////////////
	public function actualizar_enlace($data,$id_enlace){
		$this->db->where('id_enlace', $id_enlace);
		$this->db->update('enlace', $data);
	}
	///////////////////////////////////////////////////////////
	//////////INSERTA EN publiaxiones
	///////////////////////////////////////////////////////////
	public function insertar_enlace($data){
		$this->db->insert('enlace',$data);
	}
	
	//////// GALERIA ////////////////////
	public function mostrar_galeria(){
		$this->db->where("estado_galeria","1");
        //$this->db->order_by("tipo_enlace", "asc");
        //$this->db->group_by("tipo_enlace");  
		$consulta=$this->db->get("galeria");
		return $consulta->result();
	}
	////////INSERTAR GALERIA ////////////////////
	public function insertar_foto($data){
		$this->db->insert('galeria',$data);
	}
	
}
