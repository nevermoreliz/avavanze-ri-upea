<?php


class Inicio extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_convenio');
		$this->load->model('Model_contacto');
		$this->load->model('Model_personal');
		$this->load->model('Model_unidad');
		$this->load->model('Model_publicaciones');
	}

	public function index()
	{
         
		if($this->session->userdata('login')){
			redirect(base_url('admin'));
		}else{
           
			$datos['convenios'] = $this->Model_convenio->mostrar_convenios();
			$datos['publicaciones'] = $this->Model_publicaciones->mostrar_publicaciones();
			$datos['contactos'] = $this->Model_contacto->mostrar_contactos();
			$datos['personal'] = $this->Model_personal->mostrar_personal();
			$datos['unidad'] = $this->Model_unidad->mostrar_unidad();
			$this->load->view('index',$datos);
			$this->load->view('modales/usuario/login');
			$this->load->view('modales/usuario/convenio');
			$this->load->view('modales/usuario/preinscripcion');
			$this->load->view('layouts/footerclient');
		}
        
	}
}