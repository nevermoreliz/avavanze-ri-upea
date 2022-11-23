<?php 

    class Controller_publicaciones extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_publicaciones');
        }
        
        public function index(){
          echo "asds";
        }
        /*public function mostrar_todo_publicacion(){
          if($this->input->is_ajax_request()){
            $dato= $this->input->post();
            $datos=$this->Model_gestion->mostrar_todo_gestion();
            echo json_encode($datos);
          }
        }*/
        public function guardar_publicacion(){
          if($this->input->request()){
            
            echo $this->input->post('titulo'); exit;

          }
        }
    }