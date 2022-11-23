<?php 

    class Controller_preinscripcion extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_personal');
            $this->load->model('Model_universitario');
            $this->load->model('Model_preinscripcion');
        }
        
        public function insertar_preinscripcion(){
          //Esta funcion va ins3rtar todas las preinscripciones
          if($this->input->is_ajax_request()){
            $ru=$this->input->post('ru');
            $ci=$this->input->post('ci');
            $telefono=$this->input->post('telefono');
            $nombres=$this->input->post('nombres');
            $paterno=$this->input->post('paterno');
            $materno=$this->input->post('materno');
            $email=$this->input->post('email');
            $id_convenios=$this->input->post('id_convenios');
            $id_carrera=$this->input->post('id_carrera');
            $id_categoria=$this->input->post('categoria');
            $id_gestion=$this->input->post('gestion');

            $datos_persona=array(
              "nombre"  =>$nombres,
              "paterno" =>$paterno,
              "materno" =>$materno,
              "ci" =>$ci,
              "telefono" =>$telefono,
              "email" =>$email,
            );

            if($id_categoria!=1){
              $id_carrera=null;
            }

            $id_persona=$this->Model_personal->insertar_persona($datos_persona);
            $estado=1;
            $datos_preinscripcion=array(
              "id_gestion"=>$id_gestion,
              "id_convenio"=>$id_convenios,
              "id_carrera"=>$id_carrera,
              "estado"=>$estado,
            );
            
            $pre=$this->Model_preinscripcion->insertar_preinscripcion($datos_preinscripcion);
            $id_preinscripcion=$pre;
            $datos_universitario=array(
              "id_persona"  =>$id_persona,
              "id_categoria" =>$id_categoria,
              "id_preinscripcion" =>$id_preinscripcion,
              "registro_universitario" =>$ru,
            );

            $id_universitario=$this->Model_universitario->insertar_universitario($datos_universitario);

            echo ($pre);
          }
          
        }

        /////////////////////////////////////////
        ////////ACRTUALIZA LAS PREINSCRIPCIONES
        /////////////////////////////////////////
        public function actualizar_preinscripcion(){
          //Esta funcion va ins3rtar todas las preinscripciones
          if($this->input->is_ajax_request()){
            $id_preinscripcion=$this->input->post('id_preinscripcion');
            $id_universitario=$this->input->post('id_universitario');
            $id_persona=$this->input->post('id_persona');
            $ru=$this->input->post('registro_universitario');
            $ci=$this->input->post('ci');
            $telefono=$this->input->post('telefono');
            $nombres=$this->input->post('nombres');
            $paterno=$this->input->post('paterno');
            $materno=$this->input->post('materno');
            $email=$this->input->post('email');
            $id_convenios=$this->input->post('id_convenios');
            $id_carrera=$this->input->post('id_carrera');
            $id_categoria=$this->input->post('id_categoria');
            $id_gestion=$this->input->post('id_gestion');

            $datos_persona=array(
              "nombre"  =>$nombres,
              "paterno" =>$paterno,
              "materno" =>$materno,
              "ci" =>$ci,
              "telefono" =>$telefono,
              "email" =>$email,
            );
            $this->Model_personal->actualiza_persona_pre($datos_persona, $id_persona);

            $datos_preinscripcion=array(
              "id_gestion"=>$id_gestion,
            );
            
            $this->Model_preinscripcion->actualiza_preinscripcion_pre($datos_preinscripcion,$id_preinscripcion);
            
            $datos_universitario=array(
              //"id_persona"  =>$id_persona,
              "id_categoria" =>$id_categoria,
              //"id_preinscripcion" =>$id_preinscripcion,
              "registro_universitario" =>$ru,
            );

            $this->Model_universitario->actualiza_universitario_pre($datos_universitario,$id_universitario);

            echo ('Ok');
          }
          
        }
        /////////////////////////////////////////
        ////////ELIMINA LAS PREINSCRIPCIONES
        /////////////////////////////////////////
        public function eliminar_preinscripcion(){
          //Esta funcion va ins3rtar todas las preinscripciones
          if($this->input->is_ajax_request()){
            $id_preinscripcion=$this->input->post('id_preinscripcion');
            $id_universitario=$this->input->post('id_universitario');
            $id_persona=$this->input->post('id_persona');
            $this->Model_universitario->elimina_universitario_pre($id_universitario);

            $this->Model_personal->elimina_persona_pre($id_persona);

            $this->Model_preinscripcion->elimina_preinscripcion_pre($id_preinscripcion);
          }
          
        }
        
        
    }
