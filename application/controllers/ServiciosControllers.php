<?php
    if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    error_reporting(E_ALL | E_WARNING | E_NOTICE);
    ini_set('display_errors', TRUE);

class ServiciosControllers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('servicios');
    }
    
    public function index(){
        $datos['servicios']=$this->servicios->view();
		
        if($data["servicios"]){
            $this->load->view('Servicios/index',$datos);
        } else {
            // Manejo de error si la solicitud no se encuentra
            echo 'La solicitud no se encontró';
        }
    }

}

?>
