<?php
    if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    error_reporting(E_ALL | E_WARNING | E_NOTICE);
    ini_set('display_errors', TRUE);

class UsersControllers extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model('users');
    }
    
    public function index(){
        $this->load->view('login');
        //$datos['users']=$this->users->view();
		//$this->load->view('Users/index',$datos);
    }

    public function registro(){
        $this->load->view('registro');
    }

    public function verificar_usuario(){
        $usuario = $this->input->post("Correo");
        $contrasena = $this->input->post("Clave");
        $result = $this->users->verificar_usuario($usuario,$contrasena);
        
        if($result){
            $obj = json_decode($result);
            $usuario = $obj->{'NOMUSU'};
            $apellido = $obj->{'APEUSU'};
			$tusu = $obj->{'ID_TUSU'};
            $id = $obj->{'ID_USU'};

            $usuario_data = array("usuario" => $usuario,"id" => $id, "logueado" => true,"tusu" => $tusu);

            $this->session->set_userdata($usuario_data);
			$tusu = $this->session->userdata('tusu');

			switch ($tusu) {
                case '1':
                    redirect("inventariocontrollers/index");
                    break;
                case '2':
                    redirect('prestamoscontrollers/create');
                    break;
			}
            
            //redirect("prestamoscontrollers/create",$usuario_data);
        }else{
            $this->session->set_flashdata("msg-failed","Nombre de Usuario o Contraseña incorrectos.");
            redirect("userscontrollers/index","refresh");
        }
    }
}
?>
