<?php 
defined('BASEPATH') or exit('No direct scrit access allowed');
/**    
    * Modelo de publicaciones 
	* @access public
    * @param array $daata recupera del controlador los datos para su almacenamiento en bd 
    * @return mix $row $result del almacenamiento 
    * @author Ing. Regis Muñez regis.munes@gmail.com
    * @copyright Copyright (c) 2018, rgs 
    * @version convenio v1.1
     */
class Model_publicaciones extends CI_model{
	
	public function __construct(){
		parent::__construct();
	}
////////////////////////////////////////////////////////
	/////////////////MUESTRA publicaciones
	public function mostrar_publicaciones(){
		//$this->db->where("estado","1");
		$consulta=$this->db->get("publicaciones");
		return $consulta->result();
	}
	public function mostrar_archivo_publicaciones($id){
		$this->db->where("id_publicaciones",$id);
		$consulta=$this->db->get("publicaciones_archivo");
		return $consulta->result();
	}
	

		///////////////////////////////////////////////////////////
	//////////ACTUALIZA publicaciones
	///////////////////////////////////////////////////////////
	public function actualizar_publicacion($data,$id_publicaion){
		$this->db->where('id_publicaciones', $id_publicaion);
		return $this->db->update('publicaciones', $data);
	}
	/*public function actualizar_archivo_publicacion($data,$id_publicaion){
		$this->db->where('id_publicaciones', $id_publicaion);
		return $this->db->update('publicaciones_archivo', $data);
	}*/
	///////////////////////////////////////////////////////////
	//////////INSERTA EN publiaxiones
	///////////////////////////////////////////////////////////
	public function insertar_publicacion($data){
		$this->db->insert('publicaciones',$data);
		return $this->db->insert_id();
	}
	public function insertar_archivo_publicacion($data){
		$this->db->insert('publicaciones_archivo',$data);
		return $this->db->insert_id();
	}
}
