<?php 

    class Controller_correo extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('Model_unidad');
        }
        
        public function enviar_correo(){
        	
        	if($this->input->is_ajax_request()){
        		$this->load->library('email');
        		//traemos los datos de unidad para buscar el correo electronico y su contraseña
        		$destinatario='';
        		$pass='';
        		$datos = $this->Model_unidad->mostrar_unidad();
	        	foreach ($datos as $fila) {
	        		$destinatario=$fila->correo;
	        		$pass=$fila->password;
	        	}
	        	//recibimos los datos del formulario
	            $nombres=$this->input->post('nombres');
	            $asunto='Correo de la página web UNIDAD DE RELACIONES INTERNACIONALES de'.$nombres;
	            $suemail=$this->input->post('suemail');
	            $mensaje=$this->input->post('mensaje');

				 //configuracion para gmail
				 $configGmail = array(
				 'protocol' => 'smtp',
				 'smtp_host' => 'ssl://smtp.gmail.com',
				 'smtp_port' => 465,
				 'smtp_user' => $destinatario,
				 'smtp_pass' => $pass,
				 'mailtype' => 'html',
				 'charset' => 'utf-8',
				 'newline' => "\r\n"
				 );    
				 
				 //cargamos la configuración para enviar con gmail
				 $this->email->initialize($configGmail);
				 
				 $this->email->from($suemail);
				 $this->email->to($destinatario);
				 $this->email->subject($asunto);
				 $this->email->message($mensaje);
				 $this->email->send();
	            if($this->email->send()){
	            	echo ('destinatario enviado');
	            }else{
	            	echo ('No se puedo enviar tu correo');//show_error($this->email->print_debugger());
	            }
	            echo ('Correo enviado');
        	}
        }
    }