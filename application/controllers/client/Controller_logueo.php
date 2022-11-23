<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_logueo extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_login');
    }

    public function session(){
        //if($this->input->is_ajax_request()){
        if($this->input->post()){
            $usuario = $this->input->post('usuario');
            $password= sha1($this->input->post('password'));
            $resp= $this->Model_login->login($usuario, $password);
            if($resp){
                $data=[
                    "id_usuario"=>$resp->id_usuario,
                    "id_persona"=>$resp->id_persona,
                    "nombre"=>$resp->nombre,
                    "paterno"=>$resp->paterno,
                    "materno"=>$resp->materno,
                    "ci"=>$resp->ci,
                    "telefono"=>$resp->telefono,
                    "email"=>$resp->email,
                    "cargo"=>$resp->cargo,
                    "img"=>$resp->img,
                    "usuario"=>$resp->usuario,
                    "password"=>$resp->password,
                    "estado"=>$resp->estado,
                    "login"=>true,
                ];
                $this->session->set_userdata($data);  
            }else{
                echo "error";  
            }
        }
        redirect('inicio','refresh');
    }

    public function cerrarsession(){
        if($this->input->is_ajax_request()){
           $this->session->sess_destroy();
        }
    }
}
 