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
		$datos['inventario']=$this->inventario->view();
		$datos['users']=$this->users->view();
        $this->load->view("Prestamos/create",$datos);
    }

	public function store(){
		$pres['idart']=$this->input->post('idart');
		$pres['ps']=$this->input->post('ps');
		$pres['pe']=$this->input->post('pe');
		$pres['idser']=$this->input->post('idser');
		$pres['ubicacion']=$this->input->post('ubicacion');
		$pres['fchentrega']=$this->input->post('fchentrega');

		$this->Prestamos->save($pres);
		redirect('PrestamosControllers/index');

	}
    
    
    
    
}

?>
