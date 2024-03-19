<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriasControllers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
		$this->load->model('tarticulos');
    }
}
?>
