<?php 

    class Controller_gestiones extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_gestion');
        }
        
        public function mostrar_todo_gestion(){
          if($this->input->is_ajax_request()){
            echo('hola');
          }
        }
    }