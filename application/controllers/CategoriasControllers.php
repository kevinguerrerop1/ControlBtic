<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriasControllers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
		$this->load->model('categorias');
    }
    
    public function index(){
        $datos['categorias']=$this->categorias->view();
		$this->load->view('Categorias/index',$datos);
    }

    public function create(){
        $this->load->view("Categorias/create");
    }
    
    public function store(){
        $id2 = $this->categorias->idreg();
        foreach($id2 as $id){
            $id3 = $id->ID_CAT;
        }

        $nomcat=$this->input->post('NOMCAT');
		$graba=$this->categorias->save($id3,$nomcat);
		//Funcion para redireccionar
		redirect('categoriascontrollers/index');
    } 
}
?>
