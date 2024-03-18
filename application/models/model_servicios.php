<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

    class model_servicios extends CI_Model{

        public function __construct() {
            parent::__construct();
        }

        public function view(){
          $this->db->select("ID_SERV, NOMSERV");
          $this->db->from("BTIC_SERVICIOS");
          $query = $this->db->get();
          if($query->num_rows() >= 1){    
            return $query->result();
          }else{
            return false;
          }    
        }
        public function idreg(){
            $this->db->select("(MAX(ID_SERV)+1) AS ID_SERV");
            $this->db->from("SALUD.BTIC_SERVICIOS");
            $query = $this->db->get();
            if($query->num_rows() >= 1){    
              return $query->result();
            }else{
              return false;
            }    
        }

        public function save($id,$nomserv){
          $this->db->set('ID_SERV',$id);
          $this->db->set('NOMSERV',$nomserv);
          $this->db->insert('SALUD.BTIC_SERVICIOS');
          if($this->db->affected_rows() == 1){      
            return true;
          }else{
            return false;
          }
        } 

    }



?>
