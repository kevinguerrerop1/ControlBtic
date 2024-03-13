<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("model_servicios");
     
    }
    
    public function index(){
        $datos["servicios"]=$this->model_servicios->vista_prueba();
        $this->load->view('Servicios/vista_serv',$datos);
		
    }

}

?>
