<?php defined('BASEPATH') or exit('No direct script access allowed');
/**  
 *  Institucion: Posgrado
 *  Sistema: PSG
 *  Módulo: Marketing
 *  Descripción: (del controlador) este controlador: Respondera a eventos
 *  (usualmente acciones del usuario) e invoca peticiones al 'modelo: Marketing_model'
 *  cuando se hace alguna solicitud sobre la información
 *  @author: jhonatan flores team psg
 *  Fecha: 13/05/2020
 **/
// class Marketing extends PSG_Controller
class Front_end extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('marketing_model');
        // $this->load->model('persona_model');
        // $this->load->model('auth_model');
        // $this->load->helper('form');
    }

    /**
     *  Descripción del método:
     *  invoca el contenido para la pagina principal  
     **/
    public function index()
    {
        // enviar datos a la vista index de Views/Marketing/index.php
        $this->templater->view_front('front_end/index', []);
    }
}
