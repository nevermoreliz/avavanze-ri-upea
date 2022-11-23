<?php 

    class Controller_tipo_conv extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_tipo');
        }
        

        public function mostrar_tipo(){
          if($this->input->is_ajax_request()){
            $dato= $this->input->post();
            $datos=$this->Model_tipo->mostrar_todo_tipo();
            echo json_encode($datos);
          }
        }

        ///copiar
        public function insertar_tipo(){
          //Esta funcion va ins3rtar gestiones
          if($this->input->is_ajax_request()){
              $id=$this->input->post('id_gestiona');
              $nombre=$this->input->post('nombre_gestiona');

            if($id==0){
              $datos_tipo=array(
                  "nombre_tipo_convenio" =>$nombre,
                );
              $id_tipo_convenio=$this->Model_tipo->insertar_tipo($datos_tipo);
            }else{
                $datos_tipo=array(
                  "nombre_tipo_convenio" =>$nombre,
                );
                $id_tipo_convenio=$this->Model_tipo->actualizar_tipo($datos_tipo,$id);
            }
          }
        }



        ////busca el tipo segun su id
        public function buscar_tipo_actualizar(){
          if($this->input->is_ajax_request()){
            $id_tipo_convenio=$this->input->post('id_tipo_convenio');
            $datos=$this->Model_tipo->busca_tipo_actualizar($id_tipo_convenio);
            echo json_encode($datos);
          }
        }
    }