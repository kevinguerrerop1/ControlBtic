<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class InventarioControllers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
		$this->load->model('inventario');
		$this->load->model('categorias');
        $this->load->model('tarticulos');
    }

    public function index(){
        $datos['articulos']=$this->inventario->view();
		$this->load->view('inventario',$datos);
	}

    public function indexartpres(){
        $datos['articulos']=$this->inventario->viewprestamos();
		$this->load->view('Inventario/indexprestamo',$datos);
	}

    public function create(){
		$datos['categorias']=$this->categorias->view();
        $datos['tarticulos']=$this->tarticulos->view();
        $this->load->view("Inventario/create",$datos);
		
    }

	public function store(){
        $id2 = $this->inventario->idreg();
        foreach($id2 as $id){
            $id3 = $id->ID_ART;
        }

        $marca=$this->input->post('MARCA');
        $modelo=$this->input->post('MODELO');
        $nroserie=$this->input->post('NROSERIE');
        $idcat=$this->input->post('ID_CAT');
        $idtart=$this->input->post('ID_TART');
        
		$graba=$this->inventario->save($id3,$marca,$modelo,$nroserie,$idcat,$idtart);
		//Funcion para redireccionar
		redirect('inventariocontrollers/index');
    } 

	

	public function viewinventarioxcat($id){
        $datos['articulos']=$this->Inventario->viewxcategorias($id);
		$this->load->view('Categorias/viewxcat',$datos);
		
	}

}
?>
