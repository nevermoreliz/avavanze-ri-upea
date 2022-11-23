<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_admin extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_login');
    }


    //funcion para el Logueo, valida el aceso a los usuarios Admins
    //el campo estado será utilizado para controlar los permisos
    public function index(){
    	$usuario=  $this->input->post('usuario');
        $password= $this->input->post('password');
        $this->load->view('administrador/principio');
        $user=  $this->Model_login->login($usuario, $password);
        
        if (count($user)==1){
            
            $session=array(
                'id_persona'=>$user->id_persona,
                'id_usuario'=>$user->id_usuario,
                'usuario'=>$user->usuario,
                'estado'=>$user->estado,
                'nombre'=>$user->nombre,
                'paterno'=>$user->paterno,
                'materno'=>$user->materno,
                'ci'=>$user->ci,
                'id_grupo'=>$user->categoria,
                'nom_grupo'=>$user->nom_grupo,
                'is_logged_in'=>TRUE,
            );
            /*CREAMOS PERMISOS DE USUARIO Y LO GUARDMOS EN UNA SESSION*/
           //$Menu=  $this->Model_login->permisosMenu($user->id_usuario);
            
            //CARGAMOS LA SESSION DE DATOS DEL USUARIO LOGEADO
            //$this->session->set_userdata($session);
            
            //CARGAMOS LA SESSION DEL MENU DE ACUERDO A LOS PERMISOS
            //$this->session->set_userdata($Menu);
            
            //MOS VAMOS AL INDEX
            
           //redirect(base_url().'admin/Controller_admin/admin');
            
        }else{
            //CASO CONTRARIO MOSTRAMOS USUARIO O CONTRASEÑA INCORRECTA
            //$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Usuario/Contraseña Invalida</div>');
            //$this->index();
          //  echo "error";
            //redirect(base_url().'inicio');
            $this->load->view('layouts/headeradmin');
            $this->load->view('administrador/principio');
            
            
            $this->load->view('layouts/menuadmin');
            //$this->load->view('layouts/footeradmin');
        }           

    }



    
}
