<?php 
/**    
    * Controlador de enlaces 
	* @access public
    * @param array $post recupera de la vista para guardar los datos  
    * @return mix --------
    * @author Ing. Regis Muñez regis.munes@gmail.com
    * @copyright Copyright (c) 2018, rgs 
    * @version convenio v1.1
     */
    class Controller_enlace extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_enlaces');
        }
        
        public function index(){
            redirect('/','refresh');
        }
        public function guardar_enlace(){
          if($this->input->post()){
            $nombre_imagen='';
            $config=[
              "upload_path"=>'./assets/img_enlace',
              "allowed_types"=>"png|jpg|jpeg",
            ];
            $this->load->library('upload', $config);
            if($this->upload->do_upload('imagene')){
              $data=array('upload_data'=>$this->upload->data());
              $nombre_imagen='assets/img_enlace/'.$data['upload_data']['file_name'];
            }
              //echo '--'.$nombre_imagen.'/'.$this->upload->display_errors(); exit;
              $data=array(
                  'orden' => $this->input->post('orden'),
                  'nombre_enlace' => $this->input->post('titulo'),
                  'tipo_enlace' => $this->input->post('tipo'),
                  'links_enlace' => $this->input->post('links'),
                  'telefono' => $this->input->post('telefono'),
                  'fax' => $this->input->post('fax'),
                  'url_enlace' => ($nombre_imagen==''?$this->input->post('url'):$nombre_imagen),
                  'fecha' => date('Y-m-d'),
                  'estado' => ($this->input->post('estado')=='on'?1:0)
              );
              //var_dump($data);exit;
            if($this->input->post('modificacion',true))
                $this->Model_enlaces->actualizar_enlace($data,$this->input->post('modificacion'));
            else
              $this->Model_enlaces->insertar_enlace($data);

          }
            redirect('/','refresh');
        }
		
		public function guardar_foto(){
          if($this->input->post()){
            $nombre_imagen='';
            $config=[
              "upload_path"=>'./assets/galeria',
              "allowed_types"=>"png|jpg|jpeg",
            ];
            $this->load->library('upload', $config);
            if($this->upload->do_upload('imagene')){
              $data=array('upload_data'=>$this->upload->data());
              $nombre_imagen='assets/galeria/'.$data['upload_data']['file_name'];
            }
              //echo '--'.$nombre_imagen.'/'.$this->upload->display_errors(); exit;
              $data=array(
                  'nombre_galeria' => $this->input->post('titulo'),
                  'url_galeria' => $nombre_imagen,
                  'estado_galeria' => '1'
              );
              //var_dump($data);exit;
            /*if($this->input->post('modificacion',true))
                $this->Model_enlaces->actualizar_enlace($data,$this->input->post('modificacion'));
            else*/
              $this->Model_enlaces->insertar_foto($data);

          }
            redirect('/','refresh');
        }
        
     //finish   
    }