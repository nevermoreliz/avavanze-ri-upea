<?php 

    class Controller_unidad extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_unidad');
        }
        

        public function actualizar_unidad(){
          //Esta funcion va ins3rtar gestiones
          if($this->input->is_ajax_request()){
              $id=$this->input->post('id');
              $direccion=$this->input->post('direccion');
              $telefono=$this->input->post('telefono');
              $pagina=$this->input->post('pagina');
              $correo=$this->input->post('correo');
              $password=$this->input->post('password');
              $fax=$this->input->post('fax');
              $celular=$this->input->post('celular');

              $datos_unidad=array(
              "direccion"  =>$direccion,
              "telefono" =>$telefono,
              "pagina" =>$pagina,
              "correo" =>$correo,
              "password" =>$password,
              "fax" =>$fax,
              "celular" =>$celular,
            );
            $this->Model_unidad->actualizar_unidad($datos_unidad,$id);

          }
        }
    }