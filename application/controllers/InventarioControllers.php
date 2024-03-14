<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class InventarioControllers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
		$this->load->model('inventario');
		$this->load->model('categorias');
    }

    public function index(){
        $datos['articulos']=$this->inventario->view();
		$this->load->view('inventario',$datos);
	}

    public function create(){
		$datos['categorias']=$this->Categorias->view();
        $this->load->view("createActivo",$datos);
		
    }

	public function store(){
		$art['marca']=$this->input->post('marca');
		$art['modelo']=$this->input->post('modelo');
		$art['nroserie']=$this->input->post('nroserie');
		$art['idcat']=$this->input->post('idcat');
		$this->Inventario->save($art);
		
		//Funcion para redireccionar
		redirect('InventarioControllers/viewinventario');
	}

	public function viewinventarioxcat($id){
        $datos['articulos']=$this->Inventario->viewxcategorias($id);
		$this->load->view('Categorias/viewxcat',$datos);
		
	}

}
?>
