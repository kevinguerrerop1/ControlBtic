<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrestamosControllers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
		$this->load->model('prestamos');
		$this->load->model('inventario');
		$this->load->model('model_servicios');
		$this->load->model('users');
    }
    
    public function index(){
        $datos['prestamos']=$this->prestamos->view();
		$this->load->view('Prestamos/index',$datos);
    }

    public function create(){
		$datos['servicios']=$this->model_servicios->view();
		$datos['inventario']=$this->inventario->viewprestamos();
		$datos['users']=$this->users->view();
        $this->load->view("Prestamos/create",$datos);
    }

	public function store(){
        $id2 = $this->prestamos->idreg();
        foreach($id2 as $id){
            $id3 = $id->ID_PRES;
        }

        $id_art=$this->input->post('ID_ART');
        $ps=$this->input->post('PS');
        $id_usu=$this->input->post('ID_USU');
        $id_serv=$this->input->post('ID_SERV');
        $ubicacion=$this->input->post('UBICACION');
        $fchentrega=$this->input->post('FCHENTREGA');

		$graba=$this->prestamos->save($id3,$id_art,$ps,$id_usu,$id_serv,$ubicacion,$fchentrega);
		//Funcion para redireccionar
		redirect('prestamoscontrollers/index');
    }
    
    
    
    
}

?>
