<?php 

    class Controller_convenios extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_convenio');
        }
        
        public function mostrar_convenios_nacionales(){
          //esta funcion muesta todos los convenios que se han insertado
          //a la parte de la viste de los clientes qu acceden a nuestro sitio
          $datos['datos'] = $this->Model_convenio->mostrar_convenios_nacionales();            

        }
        
        
        
        
    }
