<?php
    if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    error_reporting(E_ALL | E_WARNING | E_NOTICE);
    ini_set('display_errors', TRUE);

class ServiciosControllers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('model_servicios');
    }
    
    public function index(){
        $datos['servicios']=$this->model_servicios->view();
		
        if($datos["servicios"]){
            $this->load->view('Servicios/vista_serv',$datos);
        } else {
            // Manejo de error si la solicitud no se encuentra
            echo 'La solicitud no se encontró';
        }
    }

    public function create(){
        $this->load->view("Servicios/create");
    }

    public function store(){
        $id2 = $this->model_servicios->idreg();
        foreach($id2 as $id){
            $id3 = $id->ID_SERV;
        }

        $nomserv=$this->input->post('NOMSERV');
		$graba=$this->model_servicios->save($id3,$nomserv);
		//Funcion para redireccionar
		redirect('servicioscontrollers/index');
    } 

    public function camestadoart($id_art){
        



    }

    

}

?>
