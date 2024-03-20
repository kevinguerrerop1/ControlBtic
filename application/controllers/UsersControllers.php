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

    public function verificar_usuario(){
        $usuario = $this->input->post("Correo");
        $contrasena = $this->input->post("Clave");
        $result = $this->users->verificar_usuario($usuario,$contrasena);
        
        if($result){
            $this->registrar_sesion($result);//,$mes_id,$ano_id);
        }else{
            $this->session->set_flashdata("msg-failed","Nombre de Usuario o Contraseña incorrectos.");
            redirect("index/index","refresh");
        }
      }
}
?>
