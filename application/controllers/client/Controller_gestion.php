<?php 

    class Controller_gestion extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_gestion');
        }
        
        public function mostrar_gestion(){
          //esta es la funcion que pide todas las getiones asignadas a un determinado convenio
          if($this->input->is_ajax_request()){
            $id_convenios= $this->input->post('id_convenios');
            $datos = $this->Model_gestion->mostrar_gestion($id_convenios);
            echo json_encode($datos);
          }
        }

        public function mostrar_todo_gestion(){
          if($this->input->is_ajax_request()){
            $dato= $this->input->post();
            $datos=$this->Model_gestion->mostrar_todo_gestion();
            echo json_encode($datos);
          }
        }

        ///copiar
        public function insertar_gestion(){
          //Esta funcion va ins3rtar gestiones
          if($this->input->is_ajax_request()){
              $id=$this->input->post('id_gestiona');
              $nombre=$this->input->post('nombre_gestiona');

            if($id==0){
              $datos_gestion=array(
                  "nombre" =>$nombre,
                );
              $id_gestion=$this->Model_gestion->insertar_gestion($datos_gestion);
            }else{
                $datos_gestion=array(
                  "id_gestion"  =>$id,
                  "nombre" =>$nombre,
                );
                $id_gestion=$this->Model_gestion->actualizar_gestion($datos_gestion,$id);
            }
          }
        }
    }