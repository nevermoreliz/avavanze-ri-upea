<?php 
/**    
    * Controlador de publicaciones 
	* @access public
    * @param array $post recupera de la vista para guardar los datos  
    * @return mix --------
    * @author Ing. Regis Muñez regis.munes@gmail.com
    * @copyright Copyright (c) 2018, rgs 
    * @version convenio v1.1
     */
    class Controller_publicaciones extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_publicaciones');
        }
        
        public function index(){
          echo "holas públic";
            redirect('/','refresh');
        }
        public function guardar_publicacion(){
          if($this->input->post()){
            $nombre_imagen='';
			 $nombre_archivo='';
            $config=[
              "upload_path"=>'./assets/img_publicaciones',
              "allowed_types"=>"png|jpg|jepg",
            ];//"allowed_types"=>"png|jpg|jepg",
            $this->load->library('upload', $config);
			  $this->upload->initialize($config);
            if($this->upload->do_upload('imagen')){
              $data=array('upload_data'=>$this->upload->data());
              $nombre_imagen='assets/img_publicaciones/'.$data['upload_data']['file_name'];
            }
			  
			
			  //echo $nombre_imagen."/".$nombre_archivo;exit;
              //echo $nombre_imagen; 
              $data=array(
                  'titulo' => $this->input->post('titulo'),
                  'tipo_publicaciones' => $this->input->post('tipo'),
                  'descripcion' => $this->input->post('descripcion'),
                  'correlativo' => $this->input->post('correlativo'),
                  'subtitulo' => $this->input->post('subtitulo'),
                  'links' => $this->input->post('links'),
                  'url' => ($nombre_imagen==''?$this->input->post('url'):$nombre_imagen), 
                  //'archivo' => ($nombre_archivo==''?$this->input->post('urll'):$nombre_archivo),
                  'fecha' => date('Y-m-d'),
                  'estado' => ($this->input->post('estado')=='on'?1:0)
              );
              //var_dump($data);exit;
            if($this->input->post('modificacion',true)){
                $this->Model_publicaciones->actualizar_publicacion($data,$this->input->post('modificacion'));
				$id=$this->input->post('modificacion');
			}else
              $id=$this->Model_publicaciones->insertar_publicacion($data);
			  
			  
			//archivo multiples subida
			if(!empty($id)){
			 $filesCount = count($_FILES['archivo']['name']);
				for($i = 0; $i < $filesCount; $i++){
					$archivo=$_FILES['userFile']['name'] = $_FILES['archivo']['name'][$i];
					$_FILES['userFile']['type'] = $_FILES['archivo']['type'][$i];
					$_FILES['userFile']['tmp_name'] = $_FILES['archivo']['tmp_name'][$i];
					$_FILES['userFile']['error'] = $_FILES['archivo']['error'][$i];
					$_FILES['userFile']['size'] = $_FILES['archivo']['size'][$i];

					$config['upload_path'] = './assets/img_publicaciones/archivos';
					$config['allowed_types'] = "doc|docx|pdf|xls|xlsx";

					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('userFile')){
					   $fileData = $this->upload->data(); $nombre_archivo='assets/img_publicaciones/archivos/'.$fileData['file_name'];
						$data=array('id_publicaciones'=>$id,
								'nombre_archivo'=>$nombre_archivo,
								'estado_archivo'=>'1',
								'fecha'=>date("Y-m-d H:i:s"),
						);
						//insercion en base de da tos 
						$this->Model_publicaciones->insertar_archivo_publicacion($data);
						
					}//fin if upload
				}//fin for
			  				 
			}//fin if archivo multiple
			echo $this->upload->display_errors('<p>', '</p>');
			  

          }
            redirect('/','refresh');
        }
        
     //finish   
    }