<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

  class categorias extends CI_Model{

    public function __construct() {
      parent::__construct();
    }

    public function view(){
      $this->db->select("ID_CAT, NOMCAT");
      $this->db->from("BTIC_CATEGORIAS");
      $query = $this->db->get();
      if($query->num_rows() >= 1){    
        return $query->result();
      }else{
        return false;
      }    
    }

    public function save($cat){
      $this->db->insert('categorias',$cat);
    }
  }
?>
