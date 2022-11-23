<?php


class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_convenio');
		$this->load->model('Model_preinscripcion');
		$this->load->model('Model_categoria');
		$this->load->model('Model_personal');
		$this->load->model('Model_grupo');
		$this->load->model('Model_unidad');
		$this->load->model('Model_contacto');
		$this->load->model('Model_publicaciones');
		$this->load->model('Model_enlaces');
	}
/**    
    * aspectos  que se deben considerar 
	* @access public
    * @param int $id continuidad
    * @return mix (modificacion de variables de publicion y enlace)
    * @author Ing. Regis Muñez regis.munes@gmail.com
   *@copyright Copyright (c) 2018, rgs 
   *@version convenio v1.1
     */

	public function index()
	{

		if($this->session->userdata('login')){

			$datos['conv_nac'] = $this->Model_convenio->mostrar_convenios_nacionales();
			$datos['conv_int'] = $this->Model_convenio->mostrar_convenios_internacionales();
			$datos['preins'] = $this->Model_preinscripcion->mostrar_preinscripcion();
			$datos['publicaciones'] = $this->Model_publicaciones->mostrar_publicaciones();
			$datos['enlaces'] = $this->Model_enlaces->mostrar_enlaces();
			$datos['galeria'] = $this->Model_enlaces->mostrar_galeria();
			$datos['cat'] = $this->Model_categoria->mostrar_categoria();
			$datos['perusuario'] = $this->Model_personal->mostrar_per_usuario();
			$datos['grupo'] = $this->Model_grupo->mostrar_grupo();
			$datos['unidad'] = $this->Model_unidad->mostrar_unidad();
			$datos['contacto'] = $this->Model_contacto->mostrar_contactos();
			$this->load->view('admin/indexadmin',$datos);
			//$this->load->view('modales/administrador/mspublicaciones');
			$this->load->view('modales/administrador/msconvenios');
			$this->load->view('modales/administrador/msgestiones');
			$this->load->view('modales/administrador/mstipo');
			$this->load->view('modales/administrador/mscarreras');
			$this->load->view('modales/administrador/mscoordinador');
			$this->load->view('modales/administrador/mspersonal');
			$this->load->view('modales/administrador/msedicionesusuario');
			$this->load->view('layouts/footerserver');
		}else{
			redirect(base_url());
		}
	}
    
 
}