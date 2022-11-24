<?php


class Inicio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_convenio');
        $this->load->model('Model_contacto');
        $this->load->model('Model_personal');
        $this->load->model('Model_unidad');
        $this->load->model('Model_publicaciones');
        $this->load->model('Modelo_funcionesregis');
        $this->output->set_template('regis');

        //default
        //generales
        $this->noticias = $this->Modelo_funcionesregis->consultaGeneral('result', 'publicaciones', 'tipo_publicaciones', 'Noticias', "and estado='1' ORDER BY fecha DESC LIMIT 5 ");
        $this->enlace = $this->Modelo_funcionesregis->consultaGeneral('result', 'enlace', 'estado', '1', "and tipo_enlace IN ('enlace','consulado','ministerio','org_estado','org_cooperacion') group by tipo_enlace ORDER BY orden ");
        $this->unidad = $this->Modelo_funcionesregis->consultaGeneral('row', 'unidad', 'id', '1');
        //default
        $this->convenios = $this->Model_convenio->mostrar_convenios();
        $this->publicacioness = $this->Modelo_funcionesregis->consultaGeneral('result', 'publicaciones', 'estado', '1');
        $this->idiomas = $this->Modelo_funcionesregis->consultaGeneral('result', 'publicaciones', 'estado', '1', "and tipo_publicaciones='Idiomas' ");
        $this->becas = $this->Modelo_funcionesregis->consultaGeneral('result', 'publicaciones', 'estado', '1', "and tipo_publicaciones='Becas' ");
        $this->visitas = $this->Modelo_funcionesregis->consultaGeneral('result', 'visita', '1', '1');
    }
    /**    
     * aspectos  que se deben considerar 
     * @access public
     * @param int $id continuidad
     * @return mix (modificacion de variables de publicion y enlace)
     * @author Ing. Regis Muñez regis.munes@gmail.com
     * @copyright Copyright (c) 2018, rgs 
     * @version convenio v1.1
     */
    public function index()
    {

        if ($this->session->userdata('login')) {
            redirect(base_url('admin'));
        } else {

            /*$datos['convenios'] = $this->Model_convenio->mostrar_convenios();
			$datos['publicaciones'] = $this->Model_publicaciones->mostrar_publicaciones();
			$datos['contactos'] = $this->Model_contacto->mostrar_contactos();
			$datos['personal'] = $this->Model_personal->mostrar_personal();
			$datos['unidad'] = $this->Model_unidad->mostrar_unidad();*/
            //$this->load->view('modales/usuario/login');
            //$this->load->view('modales/usuario/convenio');
            //$this->load->view('modales/usuario/preinscripcion');
            //$this->load->view('layouts/footerclient');



            //generales
            $datos['noticias'] = $this->noticias;
            $datos['enlace'] = $this->enlace;
            //default
            $datos['convenios'] = $this->convenios;
            $datos['publicacioness'] = $this->publicacioness;
            $datos['idiomas'] = $this->idiomas;
            $datos['becas'] = $this->becas;
            $datos['visitas'] = $this->visitas;
            $datos['unidad'] = $this->unidad;



            $datos['publicaciones'] = $this->Modelo_funcionesregis->consultaGeneral('result', 'publicaciones', 'estado', '1', "ORDER BY  fecha DESC, tipo_publicaciones DESC LIMIT 9 ");

            $this->Modelo_funcionesregis->insertar_registro('visita', array('ip' => $this->getRealIP(), 'datos' => $_SERVER['HTTP_USER_AGENT']));

            $datos['enlace'] =  $this->enlace;
            $datos['embajada'] = $this->Modelo_funcionesregis->consultaGeneral('result', 'enlace', 'estado', '1', "and tipo_enlace='embajada' ");


            $this->load->view('thema/principal', $datos);

            //otros complementos
            $this->load->view('modales/usuario/login');
        }
    }
    /**    
     * aspectos  que se deben considerar 
     * @access public
     * @param int $id indicador e identificador de tupo
     * @return mix listado de publicaciones a nivel de una salida y varios publicaciones 
     * @author Ing. Regis Muñez regis.munes@gmail.com
     * @copyright Copyright (c) 2018, rgs 
     * @version convenio v1.1
     */
    /*casos de publicaciones*/
    public function publicaciones($id = '')
    {
        if (!empty($id))
            $datos['publicacion'] = $this->Modelo_funcionesregis->consultaGeneral('row', 'publicaciones', 'id_publicaciones', $id);
        else
            $datos['publicaciones'] = $this->Modelo_funcionesregis->consultaGeneral('result', 'publicaciones', 'estado', '1', " ORDER BY tipo_publicaciones DESC, fecha DESC");

        //generales
        $datos['noticias'] = $this->noticias;
        $datos['enlace'] = $this->enlace;
        //default
        $datos['convenios'] = $this->convenios;
        $datos['publicacioness'] = $this->publicacioness;
        $datos['idiomas'] = $this->idiomas;
        $datos['becas'] = $this->becas;
        $datos['visitas'] = $this->visitas;
        $datos['unidad'] = $this->unidad;

        $this->load->view('thema/publicaciones', $datos);
    }

    /**    
     * aspectos  que se deben considerar 
     * @access public
     * @param int $id indicador e identificador de tipo de trabajo a realizar
     * @return mix listado de convenios nacionales e ofertas
     * @author Ing. Regis Muñez regis.munes@gmail.com
     * @copyright Copyright (c) 2018, rgs 
     * @version convenio v1.1
     */
    /*casos de actividades*/
    public function drni($id = '')
    {

        //generales
        $datos['noticias'] = $this->noticias;
        $datos['enlace'] = $this->enlace;
        //default
        $datos['convenios'] = $this->convenios;
        $datos['publicacioness'] = $this->publicacioness;
        $datos['idiomas'] = $this->idiomas;
        $datos['becas'] = $this->becas;
        $datos['visitas'] = $this->visitas;
        $datos['unidad'] = $this->unidad;

        if ($id == 'ci' || $id == 'cn') {
            if ($id == 'ci')
                $datos['conveniosi'] = $this->Modelo_funcionesregis->consultaGeneral('result', 'vista_convenios_internacionales', '1', '1', "and estado IN ('Activo','Concluido') ORDER BY fecha_firma DESC ");
            else if ($id == 'cn')
                $datos['conveniosi'] = $this->Modelo_funcionesregis->consultaGeneral('result', 'vista_convenios_nacionales', '1', '1', "and estado IN ('Activo','Concluido') ORDER BY fecha_firma DESC ");
            $datos['c'] = $id;
            $this->load->view('thema/conveniosinternacionales', $datos);

            //$this->load->view('modales/usuario/convenio');
            //$this->load->view('modales/usuario/preinscripcion');
        } elseif ($id == 'ofb' || $id == 'ofi') {
            if ($id == 'ofb')
                $datos['oferta'] = $this->Modelo_funcionesregis->consultaGeneral('result', 'publicaciones', 'estado', '1', "and tipo_publicaciones='Becas' ORDER BY fecha DESC ");
            else if ($id == 'ofi')
                $datos['oferta'] = $this->Modelo_funcionesregis->consultaGeneral('result', 'publicaciones', 'estado', '1', "and tipo_publicaciones='Idiomas' ORDER BY fecha DESC ");
            $datos['c'] = $id;
            $this->load->view('thema/ofertas', $datos);
        } else redirect(base_url('admin'));
    }

    /**    
     * aspectos  que se deben considerar 
     * @access public
     * @param int $id indicador e identificador de tipo de trabajo a realizar
     * @return mix listado de imagenes segun bd
     * @author Ing. Regis Muñez regis.munes@gmail.com
     * @copyright Copyright (c) 2018, rgs 
     * @version convenio v1.1
     */
    public function galeria($id = '')
    {
        /*if(!empty($id))
            $datos['publicacion'] = $this->Modelo_funcionesregis->consultaGeneral('row','publicaciones','id_publicaciones',$id);
        else*/
        $datos['galeria'] = $this->Modelo_funcionesregis->consultaGeneral('result', 'galeria', 'estado_galeria', '1', " ORDER BY fecha_galeria DESC, id_galeria DESC");

        //generales
        $datos['noticias'] = $this->noticias;
        $datos['enlace'] = $this->enlace;
        //default
        $datos['convenios'] = $this->convenios;
        $datos['publicacioness'] = $this->publicacioness;
        $datos['idiomas'] = $this->idiomas;
        $datos['becas'] = $this->becas;
        $datos['visitas'] = $this->visitas;
        $datos['unidad'] = $this->unidad;

        $this->load->view('thema/galeria', $datos);
    }




    /**    
     * aspectos  que se deben considerar 
     * @access public
     * @param ninguno 
     * @return $string  recupera la ip de enlace para las vistas
     * @author Ing. Regis Muñez regis.munes@gmail.com
     * @copyright Copyright (c) 2018, rgs 
     * @version convenio v1.1
     */
    function getRealIP()
    {

        if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            return $_SERVER["HTTP_CLIENT_IP"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {
            return $_SERVER["HTTP_X_FORWARDED"];
        } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
            return $_SERVER["HTTP_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_FORWARDED"])) {
            return $_SERVER["HTTP_FORWARDED"];
        } else {
            return $_SERVER["REMOTE_ADDR"];
        }
    }


    //finnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn classsssss 
}
