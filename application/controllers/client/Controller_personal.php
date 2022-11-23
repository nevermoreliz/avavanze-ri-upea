<?php 

    class Controller_personal extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_personal');
            $this->load->model('Model_universitario');
            $this->load->model('Model_convenio');
            $this->load->model('Model_preinscripcion');
            $this->load->model('Model_categoria');
            $this->load->model('Model_personal');
            $this->load->model('Model_grupo');
            $this->load->model('Model_unidad');
            $this->load->model('Model_contacto');
        }
        
        public function insertar_personal(){
          //Esta funcion va ins3rtar todas las preinscripciones
          //if($this->input->is_ajax_request()){
            $nombre=$this->input->post('nombre');
            $paterno=$this->input->post('paterno');
            $materno=$this->input->post('materno');
            $ci=$this->input->post('ci');
            $telefono=$this->input->post('telefono');
            $email=$this->input->post('email');
            $cargo=$this->input->post('cargo');
            $usuario=$this->input->post('usuario');
            $password=sha1($this->input->post('password'));
            $estado=$this->input->post('estado');
            $id_grupo=$this->input->post('id_grupo');

            $datos_persona=array(
              "nombre"  =>$nombre,
              "paterno" =>$paterno,
              "materno" =>$materno,
              "ci" =>$ci,
              "telefono" =>$telefono,
              "email" =>$email,
              "cargo"=>$cargo,
            );
            $id_persona=$this->Model_personal->insertar_persona($datos_persona);

            if($estado=='on'){
              $estado='1';
            }else{
              $estado='0';
            }

            $datos_usuario=array(
              "id_persona"=>$id_persona,
              "usuario"=>$usuario,
              "password"=>$password,
              "fecha_registro"=>'2017-11-23',
              "estado"=>$estado,
            );

            $id_usuario=$this->Model_personal->insertar_usuario($datos_usuario);

            $datos_detalle_grupo=array(
              "id_grupo"  =>$id_grupo,
              "id_usuario" =>$id_usuario,
            );

            $this->Model_personal->insertar_detalle_grupo($datos_detalle_grupo);

            echo "ok";
          //}
        }

        /////////////////////////////////////////
        ////////ACRTUALIZA LAS PREINSCRIPCIONES
        /////////////////////////////////////////
        public function actualizar_personal(){
          if($this->input->is_ajax_request()){
            $nombre=$this->input->post('nombre');
            $paterno=$this->input->post('paterno');
            $materno=$this->input->post('materno');
            $ci=$this->input->post('ci');
            $telefono=$this->input->post('telefono');
            $email=$this->input->post('email');
            $cargo=$this->input->post('cargo');
            $usuario=$this->input->post('usuario');
            $password=sha1($this->input->post('password'));
            $estado=$this->input->post('estado');
            $id_grupo=$this->input->post('id_grupo');
            $id_persona=$this->input->post('id_persona');
            $id_usuario=$this->input->post('id_usuario');
            $id_detallegrupo=$this->input->post('id_detallegrupo');


            $datos_persona=array(
              "nombre"  =>$nombre,
              "paterno" =>$paterno,
              "materno" =>$materno,
              "ci" =>$ci,
              "telefono" =>$telefono,
              "email" =>$email,
              "cargo"=>$cargo,
            );
            $this->Model_personal->actualiza_persona_pre($datos_persona,$id_persona);

            if($estado=='on'){
              $estado='1';
            }else{
              $estado='0';
            }

            $datos_usuario=array(
              "id_persona"=>$id_persona,
              "usuario"=>$usuario,
              "password"=>$password,
              "estado"=>$estado,
            );

            $this->Model_personal->actualiza_usuario($datos_usuario,$id_usuario);

            $datos_detalle_grupo=array(
              "id_grupo"  =>$id_grupo,
              "id_usuario" =>$id_usuario,
            );

            $this->Model_personal->actualizar_detalle_grupo($datos_detalle_grupo,$id_detallegrupo);
          }
          
        }
        /////////////////////////////////////////
        ////////ELIMINA LAS PREINSCRIPCIONES
        /////////////////////////////////////////
        public function eliminar_personal(){
          //Esta funcion va ins3rtar todas las preinscripciones
          if($this->input->is_ajax_request()){
            $id_persona=$this->input->post('id_persona');
            $id_usuario=$this->input->post('id_usuario');
            $id_detallegrupo=$this->input->post('id_detallegrupo');

            $this->Model_personal->elimina_detalle_grupo($id_detallegrupo);

            $this->Model_personal->elimina_usuario($id_usuario);

            $this->Model_personal->elimina_persona_pre($id_persona);
          }
          
        }


        /////editar usuario para sessiones
        public function edit_user(){
          if($this->input->is_ajax_request()){
              $imagen='';
              $config=[
                "upload_path"=>'./assets/imgUsers',
                "allowed_types"=>"png|jpg",
              ];
              $this->load->library('upload', $config);
              if($this->upload->do_upload('imagen')){
                $data=array('upload_data'=>$this->upload->data());
                $imagen=$data['upload_data']['file_name'];
              }

              $nombre=$this->input->post('nombre');
              $paterno=$this->input->post('paterno');
              $materno=$this->input->post('materno');
              $ci=$this->input->post('ci');
              $telefono=$this->input->post('telefono');
              $email=$this->input->post('email');
              $usuario=$this->input->post('usuario');
              $cambiar_pass=$this->input->post('cambiar_pass');
              $password=sha1($this->input->post('password'));
              $new_password=sha1($this->input->post('new_password'));
              $id_persona=$this->input->post('id_persona');
              $id_usuario=$this->input->post('id_usuario');

              if($cambiar_pass=='on'){
                  $datos_usuario=array(
                    "usuario"=>$usuario,
                    "password"=>$new_password,
                  );
                  $this->Model_personal->actualiza_usuario_pass($datos_usuario,$id_usuario,$password);
              }else{
                $datos_usuario=array(
                    "usuario"=>$usuario,
                  );
                  $this->Model_personal->actualiza_usuario($datos_usuario,$id_usuario);
              }
              if ($imagen=='') {
                $nombre_imagen='assets/imgUsers/'.$imagen;
                    $datos_persona=array(
                    "nombre"  =>$nombre,
                    "paterno" =>$paterno,
                    "materno" =>$materno,
                    "ci" =>$ci,
                    "telefono" =>$telefono,
                    "email" =>$email,
                  );
              }else{
                    $nombre_imagen='assets/imgUsers/'.$imagen;
                    $datos_persona=array(
                    "nombre"  =>$nombre,
                    "paterno" =>$paterno,
                    "materno" =>$materno,
                    "ci" =>$ci,
                    "telefono" =>$telefono,
                    "email" =>$email,
                    "img"=>$nombre_imagen,
                  );
              }
              
              $this->Model_personal->actualiza_persona_pre($datos_persona,$id_persona);

              echo('Se ha actualizado correctamente, debe reiniciar session');
          }
        }
        
        
}
