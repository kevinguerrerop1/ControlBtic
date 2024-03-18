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

    public function idreg(){
      $this->db->select("(MAX(ID_CAT)+1) AS ID_CAT");
      $this->db->from("SALUD.BTIC_CATEGORIAS");
      $query = $this->db->get();
      if($query->num_rows() >= 1){    
        return $query->result();
      }else{
        return false;
      }    
    }

    public function save($id,$nomcat){
      $this->db->set('ID_CAT',$id);
      $this->db->set('NOMCAT',$nomcat);
      $this->db->insert('SALUD.BTIC_CATEGORIAS');
      if($this->db->affected_rows() == 1){      
        return true;
      }else{
        return false;
      }
    }  
    
  }
?>
