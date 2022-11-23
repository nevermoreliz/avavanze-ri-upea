<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_login extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    /////////////recupera y verifica si los datos insertados son correctos
    public function login($usuario, $password){
        $this->db->where('usuario',$usuario);
        $this->db->where('password',$password);
        $this->db->where('estado',1);
        $result=$this->db->get('vista_sessiones');
        if($result->num_rows()>0){
            return $result->row();
        }else{
            return false;
        }
    }
    
    function permisosMenu($id_usuario){
        $this->db->where('id_usuario',$id_usuario);
        $this->db->where('estado',"1");
        $this->db->order_by("ordenamiento","asc");
        $query= $this->db->get('select_permiso');
        
        if($query->num_rows>0){
            $data['permiso']=$query->result_array();
        }else{
            $data['permiso']=Array(0=>Array("id_permiso"=>"Error"));
        }
        $query->free_result();
        return $data;
    }
}