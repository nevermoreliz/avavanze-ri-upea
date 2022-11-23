<?php 

    class Controller_carrera extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_carrera');
        }
        

        public function mostrar_carrera(){
          if($this->input->is_ajax_request()){
            $dato= $this->input->post();
            $datos=$this->Model_carrera->mostrar_todo_carrera();
            echo json_encode($datos);
          }
        }

        public function insertar_carrera(){
          //Esta funcion va ins3rtar gestiones
          if($this->input->is_ajax_request()){
              $id=$this->input->post('id_gestiona');
              $nombre=$this->input->post('nombre_gestiona');

            if($id==0){
              $datos_carrera=array(
                  "nom_carrera" =>$nombre,
                );
              $id_tipo_carrera=$this->Model_carrera->insertar_carrera($datos_carrera);
            }else{
                $datos_carrera=array(
                  "nom_carrera" =>$nombre,
                );
                $id_tipo_carrera=$this->Model_carrera->actualizar_carrera($datos_carrera,$id);
            }
          }
        }
          //esta es la funcion que pide todas las carreras asignadas a un determinado convenio
        public function mostrar_carrera_asignada(){
          if($this->input->is_ajax_request()){
            $id_convenios= $this->input->post('id_convenios');
            $datos = $this->Model_carrera->buscar_carrera2($id_convenios);
            echo json_encode($datos);
          }
        }
    }