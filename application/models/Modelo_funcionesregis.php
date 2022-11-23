<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**    
    * Modelo de funciones genericas para ser utilizadas desde controlador 
	* @access public
    * @param array $daata recupera del controlador los datos para su almacenamiento en bd 
    * @return mix $row $result del almacenamiento 
    * @author Ing. Regis Muñez regis.munes@gmail.com
    * @copyright Copyright (c) 2018, rgs 
    * @version convenio v1.1
     */
class Modelo_funcionesregis extends CI_Model {

	public function __construct(){
		parent::__construct();
	}


	public function consultaGeneral($tipo,$tabla,$condicion1,$condicion2,$query='')
	{
		$sql="SELECT * FROM $tabla
		WHERE $condicion1='$condicion2'
        $query
		";
        //echo $sql;
		$resultados = $this->db->query($sql);
		if($resultados->num_rows() > 0)
            return $resultados->$tipo();
		else
            return FALSE;
		
	}


    
    		///////////////////////////////////////////////////////////
	//////////ACTUALIZA publicaciones
	///////////////////////////////////////////////////////////
	public function actualizar_publicacion($data,$id_publicaion){
		$this->db->where('id_publicaciones', $id_publicaion);
		$this->db->update('publddicaciones', $data);
	}
	///////////////////////////////////////////////////////////
	//////////INSERTA EN publiaxiones
	///////////////////////////////////////////////////////////
	public function insertar_registro($tabla,$data){
		$this->db->insert($tabla,$data);
	}



}

/* End of file Modelo_pasantes.php */
/* Location: ./application/models/Modelo_pasantes.php */



