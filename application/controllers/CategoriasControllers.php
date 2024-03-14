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
        $cat['NOMCAT']=$this->input->post('nomcat');
		$this->categorias->save($cat);
		
		//Funcion para redireccionar
		redirect('CategoriasControllers/index');
    }    
}
?>
