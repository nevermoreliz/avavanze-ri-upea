<?php 
/**    
    * Controlador de convenios
	* @access public
    * @param array $post recupera de la vista para guardar los datos  
    * @return mix --------
    * @author Ing. Regis Muñez regis.munes@gmail.com
    * @copyright Copyright (c) 2018, rgs 
    * @version convenio v1.1
     */
    class Controller_convenios extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_convenio');
        }
        
        public function mostrar_convenios(){
          //esta funcion muesta todos los convenios que se han insertado
          //a la parte de la viste de los clientes qu acceden a nuestro sitio
          $datos['datos'] = $this->Model_convenio->mostrar_convenios();

            $this->load->view('layouts/headerclient');
            if(isset($_GET['op'])){
              $this->load->view('cliente/convenios',$datos);
            }
            else{
              $this->load->view('index');
            }

        }


        public function detalle_convenio(){
          //esta funcion muesta el detalle de un convenio en especifico
          //if($this->input->is_ajax_request()){
          if($this->input->post()){
            
            $id_convenios= $this->input->post('id_convenios');
            $datos = $this->Model_convenio->getConvenio($id_convenios);
            echo json_encode($datos);
          }
        }
        

        public function buscar_convenios(){
          if($this->input->is_ajax_request()){
            $dato=$this->input->post('id_convenio');
            $datos=$this->Model_convenio->buscar_convenios($dato);
            echo json_encode($datos);
          }
        }
///////////////////////////////////////////////////////////////////////////////
        //////inserta convenios y sus dependecias///////////////////////
///////////////////////////////////////////////////////////////////////////////
        public function insertar_convenios(){
          if($this->input->is_ajax_request()){
            //DATSO PARA INSERTAR A CONVENIO
            /////recibimos la imagen
            /*$nombre_imagen='';
            $config=[
              "upload_path"=>'./assets/imgConvenios',
              "allowed_types"=>"png|jpg",
            ];
            $this->load->library('upload', $config);
            if($this->upload->do_upload('imagen')){
              $data=array('upload_data'=>$this->upload->data());
              $nombre_imagen='assets/imgConvenios/'.$data['upload_data']['file_name'];
            }
            /////recibimos el pdf
            $nombre_pdf='';
            $config2=[
              "upload_path"=>'./assets/conveniosPdf',
              "allowed_types"=>"pdf",
            ];
            $this->load->library('upload', $config2);
            if($this->upload->do_upload('pdf')){
              $data=array('upload_data'=>$this->upload->data());
              $nombre_pdf='assets/conveniosPdf/'.$data['upload_data']['file_name'];
            }*/
            //digital $nombre_imagen='';
              $nombre_imagen='';
                if ($_FILES["imagenup"]["error"] > 0) echo "ha ocurrido un error...";
                else {
                    $permitidos = array("image/jpeg", "image/jpg", "image/png");
                    if ( in_array($_FILES['imagenup']['type'], $permitidos) )  {
                        $archivo = $_FILES["imagenup"]["tmp_name"]; 
                        $tamanio = $_FILES["imagenup"]["size"];
                        $fp = fopen($archivo, "rb");
                        $contenido = fread($fp, $tamanio); 
                        $ruta = "assets/imgConvenios/".$_FILES['imagenup']['name'];
                        if (!file_exists($ruta)){
                            $resultado = @move_uploaded_file($_FILES["imagenup"]["tmp_name"], $ruta);
                            if ($resultado){ echo  "el archivo ha sido movido exitosamente ";
                                            $nombre_imagen=$ruta;
                            }else echo "ocurrio un error al mover el archivo. ";
                        } else echo $_FILES['imagenup']['name'].", este archivo existe ";
                    } else echo "archivo no permitido, es tipo de archivo prohibido ";
                }
           
             //digital $nombre_pdf='';
              $nombre_pdf='';
                if ($_FILES["pdfup"]["error"] > 0) echo "ha ocurrido un error---";
                else {
                    $permitidos = array("application/pdf");
                    if ( in_array($_FILES['pdfup']['type'], $permitidos) )  {
                        $archivo = $_FILES["pdfup"]["tmp_name"]; 
                        $tamanio = $_FILES["pdfup"]["size"];
                        $fp = fopen($archivo, "rb");
                        $contenido = fread($fp, $tamanio); 
                        $ruta = "assets/conveniosPdf/".$_FILES['pdfup']['name'];
                        if (!file_exists($ruta)){
                            $resultado = @move_uploaded_file($_FILES["pdfup"]["tmp_name"], $ruta);
                            if ($resultado){ echo  "el archivo ha sido movido exitosamente ";
                                            $nombre_pdf=$ruta;
                            }else echo "ocurrio un error al mover el archivo. ";
                        } else echo $_FILES['pdfup']['name'].", este archivo existe ";
                    } else echo "archivo no permitido, es tipo de archivo prohibido ";
                }

            $id_tipo_convenio=$this->input->post('tipo');
            $nombre_convenio=$this->input->post('nombre');
            $objetivo_convenio=$this->input->post('objetivo');
            //$tiempo_duracion=$this->input->post('duracion');
            $firma=$this->input->post('firma');
            $finalizacion=$this->input->post('finalizacion');
            $direccion=$this->input->post('direccion');
            $entidad=$this->input->post('entidad');
            $telefono=$this->input->post('telefono');
            $email=$this->input->post('email');
            $estadov=$this->input->post('estadov');
            $estadod=$this->input->post('estado');
              
            if($estadov=='on'){
              $estado='Activo';
            }else if($estadov==''){
              $estado='Concluido';
            }
            if($estadod=='') $estado='Inactivo';
              
              $fechainicial = new DateTime($firma);
            $fechafinal = new DateTime($finalizacion);
            # obtenemos la diferencia entre las dos fechas
            $interval=$fechafinal->diff($fechainicial);
            # obtenemos la diferencia en meses
            $intervalMeses=$interval->format("%m");
            # obtenemos la diferencia en años y la multiplicamos por 12 para tener los meses
            $intervalAnos = $interval->format("%y")*12;
              $tiempo_duracion=round(($intervalMeses+$intervalAnos)/12);
              
            $verficacionConvenio=$this->Model_convenio->verficacionConvenio($nombre_convenio);
            if(empty($verficacionConvenio)){

                $datos_convenio=array(
                  "id_tipo_convenio"=>$id_tipo_convenio,
                  "nombre_convenio"=>$nombre_convenio,
                  "objetivo_convenio"=>$objetivo_convenio,
                  "img_convenio"=>$nombre_imagen,
                  "pdf_convenio"=>$nombre_pdf,
                  "tiempo_duracion"=>$tiempo_duracion,
                  "direccion"=>$direccion,
                  "entidad"=>$entidad,
                  "telefono"=>$telefono,
                  "email"=>$email,
                  "estado"=>$estado,
                  "fecha_firma"=>$firma,
                  "fecha_finalizacion"=>$finalizacion,
                );
                ///inserta a convenios
                $new_id_convenio=$this->Model_convenio->insertar_convenio($datos_convenio);

                ///recibimos un array de los datos gestiones
                $gestiones=$this->input->post('gestion[]');
                for($i=0;$i<count($gestiones);$i++){
                    $datos_conv_gest=array(
                      "id_convenios"=>$new_id_convenio,
                      "id_gestion"=>$gestiones[$i],
                    );///inserta en tabla convenios y gestiones
                    $this->Model_convenio->insertar_conv_gest($datos_conv_gest);
                }
                ///recibimos un array de los datos carreras
                $id_carrera=$this->input->post('carrera[]');
                for($i=0;$i<count($id_carrera);$i++){
                  $datos_conv_carr=array(
                      "id_convenios"=>$new_id_convenio,
                      "id_carrera"=>$id_carrera[$i],
                    );///inserta en tabla convenios y gestiones
                    $this->Model_convenio->insertar_conv_carr($datos_conv_carr);
                }
                echo ('ok');
            } else echo ('duplicado'); //verficacionde duplicado por demora en insercion y cargado de imagen y documento
              
          }
        }

///////////////////////////////////////////////////////////////////////////////
        //////BUSCAR UN CONVENIO PARA QUE SEA ACTUALIZADO///////////////////////
///////////////////////////////////////////////////////////////////////////////        
        public function buscar_convenios_actualizar(){
          if($this->input->is_ajax_request()){
            $id_convenios=$this->input->post('id_convenios');
            $datos=$this->Model_convenio->busca_convenio_actualizar($id_convenios);
            echo json_encode($datos);
          }
        }

        ///////////////////////////////////////////////////////////////////////////////
        //////ACTUALIZA LOS  convenios y sus dependecias///////////////////////
///////////////////////////////////////////////////////////////////////////////
        public function actualizar_convenios(){
          if($this->input->is_ajax_request()){
            //DATSO PARA INSERTAR A CONVENIO
            /////recibimos el pdf
              /*
           $nombre_pdf='';
             $config2=[
              "upload_path"=>'./assets/conveniosPdf',
              "allowed_types"=>"pdf",
            ];
            $this->load->library('upload', $config2);
            if($this->upload->do_upload('pdfup')){
              $data=array('upload_data'=>$this->upload->data());
              //$nombre_pdf=$data['upload_data']['file_name'];
              $nombre_pdf='assets/conveniosPdf/'.$data['upload_data']['file_name'];
            }
              
            /////recibimos la imagen
            $nombre_imagen='';
            $config=[
              "upload_path"=>'./assets/imgConvenios',
              "allowed_types"=>"jpg",
            ];
            $this->load->library('upload', $config);
            if($this->upload->do_upload('imagenup')){
              $data=array('upload_data'=>$this->upload->data());
              //$nombre_imagen=$data['upload_data']['file_name'];
              $nombre_imagen='assets/imgConvenios/'.$data['upload_data']['file_name'];
            }
*/
            //digital $nombre_imagen='';
              $nombre_imagen='';
                if ($_FILES["imagenup"]["error"] > 0) echo "ha ocurrido un error...";
                else {
                    $permitidos = array("image/jpeg", "image/jpg", "image/png");
                    if ( in_array($_FILES['imagenup']['type'], $permitidos) )  {
                        $archivo = $_FILES["imagenup"]["tmp_name"]; 
                        $tamanio = $_FILES["imagenup"]["size"];
                        $fp = fopen($archivo, "rb");
                        $contenido = fread($fp, $tamanio); 
                        $ruta = "assets/imgConvenios/".$_FILES['imagenup']['name'];
                        if (!file_exists($ruta)){
                            $resultado = @move_uploaded_file($_FILES["imagenup"]["tmp_name"], $ruta);
                            if ($resultado){ echo  "el archivo ha sido movido exitosamente ";
                                            $nombre_imagen=$ruta;
                            }else echo "ocurrio un error al mover el archivo. ";
                        } else echo $_FILES['imagenup']['name'].", este archivo existe ";
                    } else echo "archivo no permitido, es tipo de archivo prohibido ";
                }
           
             //digital $nombre_pdf='';
              $nombre_pdf='';
                if ($_FILES["pdfup"]["error"] > 0) echo "ha ocurrido un error---";
                else {
                    $permitidos = array("application/pdf");
                    if ( in_array($_FILES['pdfup']['type'], $permitidos) )  {
                        $archivo = $_FILES["pdfup"]["tmp_name"]; 
                        $tamanio = $_FILES["pdfup"]["size"];
                        $fp = fopen($archivo, "rb");
                        $contenido = fread($fp, $tamanio); 
                        $ruta = "assets/conveniosPdf/".$_FILES['pdfup']['name'];
                        if (!file_exists($ruta)){
                            $resultado = @move_uploaded_file($_FILES["pdfup"]["tmp_name"], $ruta);
                            if ($resultado){ echo  "el archivo ha sido movido exitosamente ";
                                            $nombre_pdf=$ruta;
                            }else echo "ocurrio un error al mover el archivo. ";
                        } else echo $_FILES['pdfup']['name'].", este archivo existe ";
                    } else echo "archivo no permitido, es tipo de archivo prohibido ";
                }
              
            //'assets/imgConvenios/'
            //'assets/conveniosPdf/'

            $id_convenios=$this->input->post('id_convenios');
            $id_tipo_convenio=$this->input->post('tipo');
            $nombre_convenio=$this->input->post('nombre');
            $objetivo_convenio=$this->input->post('objetivo');
            //$tiempo_duracion=$this->input->post('duracion');
            $direccion=$this->input->post('direccion');
            $entidad=$this->input->post('entidad');
            $telefono=$this->input->post('telefono');
            $email=$this->input->post('email');
            $estadov=$this->input->post('estadov');
            $estadod=$this->input->post('estado');
              
            $firma=$this->input->post('firma');
            $finalizacion=$this->input->post('finalizacion');
            

            if($estadov=='on'){
              $estado='Activo';
            }else if($estadov==''){
              $estado='Concluido';
            }
            if($estadod=='') $estado='Inactivo';
           

             $fechainicial = new DateTime($firma);
            $fechafinal = new DateTime($finalizacion);
            # obtenemos la diferencia entre las dos fechas
            $interval=$fechafinal->diff($fechainicial);
            # obtenemos la diferencia en meses
            $intervalMeses=$interval->format("%m");
            # obtenemos la diferencia en años y la multiplicamos por 12 para tener los meses
            $intervalAnos = $interval->format("%y")*12;
              $tiempo_duracion=round(($intervalMeses+$intervalAnos)/12);
              
              
            if($nombre_imagen=='' && $nombre_pdf==''){
                $datos_convenio=array(
                "id_tipo_convenio"=>$id_tipo_convenio,
                "nombre_convenio"=>$nombre_convenio,
                "objetivo_convenio"=>$objetivo_convenio,
                "tiempo_duracion"=>$tiempo_duracion,
                "direccion"=>$direccion,
                "entidad"=>$entidad,
                "telefono"=>$telefono,
                "email"=>$email,
                "estado"=>$estado,
                    "fecha_firma"=>$firma,
                  "fecha_finalizacion"=>$finalizacion,
              );
            }
            if ($nombre_imagen!='' && $nombre_pdf!='') {
                $datos_convenio=array(
                  "id_tipo_convenio"=>$id_tipo_convenio,
                  "nombre_convenio"=>$nombre_convenio,
                  "objetivo_convenio"=>$objetivo_convenio,
                  "img_convenio"=>$nombre_imagen,
                  "pdf_convenio"=>$nombre_pdf,
                  "tiempo_duracion"=>$tiempo_duracion,
                  "direccion"=>$direccion,
                  "entidad"=>$entidad,
                  "telefono"=>$telefono,
                  "email"=>$email,
                  "estado"=>$estado,
                    "fecha_firma"=>$firma,
                  "fecha_finalizacion"=>$finalizacion,
                );
            }
            if ($nombre_imagen=='' && $nombre_pdf!='') {
                $datos_convenio=array(
                  "id_tipo_convenio"=>$id_tipo_convenio,
                  "nombre_convenio"=>$nombre_convenio,
                  "objetivo_convenio"=>$objetivo_convenio,
                  "pdf_convenio"=>$nombre_pdf,
                  "tiempo_duracion"=>$tiempo_duracion,
                  "direccion"=>$direccion,
                  "entidad"=>$entidad,
                  "telefono"=>$telefono,
                  "email"=>$email,
                  "estado"=>$estado,
                    "fecha_firma"=>$firma,
                  "fecha_finalizacion"=>$finalizacion,
                );
            }
            if ($nombre_imagen!='' && $nombre_pdf=='') {
                $datos_convenio=array(
                  "id_tipo_convenio"=>$id_tipo_convenio,
                  "nombre_convenio"=>$nombre_convenio,
                  "objetivo_convenio"=>$objetivo_convenio,
                  "img_convenio"=>$nombre_imagen,
                  "tiempo_duracion"=>$tiempo_duracion,
                  "direccion"=>$direccion,
                  "entidad"=>$entidad,
                  "telefono"=>$telefono,
                  "email"=>$email,
                  "estado"=>$estado,
                    "fecha_firma"=>$firma,
                  "fecha_finalizacion"=>$finalizacion,
                );
            }

             ///actualiza a convenios
            $this->Model_convenio->actualizar_convenio($datos_convenio,$id_convenios);
            $this->Model_convenio->elimina_conv_gest($id_convenios);
            ///recibimos un array de los datos gestiones
            $gestiones=$this->input->post('gestion[]');
            for($i=0;$i<count($gestiones);$i++){
                $datos_conv_gest=array(
                  "id_convenios"=>$id_convenios,
                  "id_gestion"=>$gestiones[$i],
                );///inserta en tabla convenios y gestiones
                $this->Model_convenio->insertar_conv_gest($datos_conv_gest);
            }
            $this->Model_convenio->elimina_conv_carr($id_convenios);
            ///recibimos un array de los datos carreras
            $id_carrera=$this->input->post('carrera[]');
            for($i=0;$i<count($id_carrera);$i++){
              $datos_conv_carr=array(
                  "id_convenios"=>$id_convenios,
                  "id_carrera"=>$id_carrera[$i],
                );///inserta en tabla convenios y gestiones
                $this->Model_convenio->insertar_conv_carr($datos_conv_carr);
            }
            
            //echo ('|'.$nombre_pdf.'|'.$nombre_imagen);
              //redirect('admin');
          }
        }

    }