<?php 

    class Controller_contactos extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_contacto');
            $this->load->model('Model_convenio');
            $this->load->model('Model_preinscripcion');
            $this->load->model('Model_categoria');
            $this->load->model('Model_personal');
            $this->load->model('Model_grupo');
            $this->load->model('Model_unidad');
            $this->load->model('Model_contacto');
        
    }
        
        public function mostrar_contactos(){
          //esta funcion muesta todos los convenios que se han insertado
          //a la parte de la viste de los clientes qu acceden a nuestro sitio
          $datos['datos'] = $this->Model_contactos->mostrar_contactos();            

        }
        

        public function buscar_contactos(){
          //esta funcion busca los contactos que se tiene en las tabla
          //a la parte de la viste de los clientes qu acceden a nuestro sitio
          if($this->input->is_ajax_request()){
            
            $dato= $this->input->post('id_contacto');
            $datos = $this->Model_contacto->buscar_contactos($dato);
            //header('Content-Type: application/json; charset=utf-8');
            echo json_encode($datos);
          }          

        }


        public function insertar_contactos(){
            $nombre_c=$this->input->post('nombre_c');
            $direccion_c=$this->input->post('direccion_c');
            $telefonos_c=$this->input->post('telefonos_c');
            $email_c=$this->input->post('email_c');
            $carrera=$this->input->post('carrera');
            $tipo=$this->input->post('tipo');
            $activo=$this->input->post('activo');

            if($activo=='on'){
              $activo='Activo';
            }else{
              $activo='Inactivo';
            }

            $datos_coord=array(
              "nombre_c"  =>$nombre_c,
              "direccion_c" =>$direccion_c,
              "telefonos_c" =>$telefonos_c,
              "email_c" =>$email_c,
              "carrera"=>$carrera,
              "tipo" =>$tipo,
              "activo"=>$activo,
            );
            $id_contactos=$this->Model_contacto->insertar_contactos($datos_coord);

            echo "ok";
        }
        


        public function actualizar_contactos(){
           if($this->input->is_ajax_request()){
            $id_contactos=$this->input->post('id_contactos');
            $nombre_c=$this->input->post('nombre_c');
            $direccion_c=$this->input->post('direccion_c');
            $telefonos_c=$this->input->post('telefonos_c');
            $email_c=$this->input->post('email_c');
            $carrera=$this->input->post('carrera');
            $tipo=$this->input->post('tipo');
            $activo=$this->input->post('activo');

            if($activo=='on'){
              $activo='Activo';
            }else{
              $activo='Inactivo';
            }

            $datos_coord=array(
              "nombre_c"  =>$nombre_c,
              "direccion_c" =>$direccion_c,
              "telefonos_c" =>$telefonos_c,
              "email_c" =>$email_c,
              "carrera"=>$carrera,
              "tipo" =>$tipo,
              "activo"=>$activo,
            );
            $id_contactos=$this->Model_contacto->actualizar_contactos($datos_coord,$id_contactos);
            
          }
        }
        


        public function elimina_contactos(){
          if($this->input->is_ajax_request()){
            $id_contactos= $this->input->post('id_contactos');
            $this->Model_contacto->elimina_contactos($id_contactos);
          }          

        }
    }
