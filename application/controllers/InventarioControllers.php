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
        $id2 = $this->categorias->idreg();
        foreach($id2 as $id){
            $id3 = $id->ID_CAT;
        }

        $nomcat=$this->input->post('NOMCAT');
		$graba=$this->categorias->save($id3,$nomcat);
		//Funcion para redireccionar
		redirect('CategoriasControllers/index');
    } 

	

	public function viewinventarioxcat($id){
        $datos['articulos']=$this->Inventario->viewxcategorias($id);
		$this->load->view('Categorias/viewxcat',$datos);
		
	}

}
?>
