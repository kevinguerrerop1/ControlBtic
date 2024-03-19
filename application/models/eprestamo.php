<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

  class eprestamos extends CI_Model{

    public function __construct() {
      parent::__construct();
    }

    public function view(){
      $this->db->select("ID_EPRES, NOMEPRES");
      $this->db->from("BTIC_EST_PRES");
      $query = $this->db->get();
      if($query->num_rows() >= 1){    
        return $query->result();
      }else{
        return false;
      }    
    }    
}
?>
