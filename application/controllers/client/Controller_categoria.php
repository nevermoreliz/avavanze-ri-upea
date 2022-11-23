<?php 

    class Controller_categoria extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_categoria');
        }
        
        
        public function mostrar_categoria(){
          if($this->input->is_ajax_request()){
            $datos=$this->Model_categoria->mostrar_categoria();
            echo json_encode($datos);
          }
        }
        
    }