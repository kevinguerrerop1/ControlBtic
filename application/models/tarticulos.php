<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

  class tarticulos extends CI_Model{

    public function __construct() {
      parent::__construct();
    }

    public function view(){
      $this->db->select("ID_TART, NOMTART");
      $this->db->from("BTIC_TIPO_ART");
      $query = $this->db->get();
      if($query->num_rows() >= 1){    
        return $query->result();
      }else{
        return false;
      }    
    }    
}
?>
