<?php 

    class Controller_gestion extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_gestion');
        }
        
        public function mostrar_todo_gestion(){
          if($this->input->is_ajax_request()){
            $dato= $this->input->post();
            $datos=$this->Model_gestion->mostrar_todo_gestion();
            echo json_encode($datos);
          }
        }
    }