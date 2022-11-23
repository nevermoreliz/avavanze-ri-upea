<?php 

    class Controller_grupo extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_grupo');
        }
        
        
        public function mostrar_grupo(){
          if($this->input->is_ajax_request()){
            $datos=$this->Model_grupo->mostrar_grupo();
            echo json_encode($datos);
          }
        }
        
    }