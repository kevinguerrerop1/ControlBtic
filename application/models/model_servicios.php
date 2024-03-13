<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

    class model_servicios extends CI_Model{

        public function __construct() {
            parent::__construct();
        }

        // public function view(){
        //     $this->db->select("ID_SERV, NOMSERV");
        //     $this->db->from("BTIC_SERVICIOS");
        //     //Para obtener Datos
        //     $query = $this->db->get(); 
        //     if($query->num_rows() >= 1){    
        //       return $query->result();
        //     }
        //     else{
        //       return false;
        //     }
        // }

        public function vista_prueba(){
          $this->db->select("ID_SERV, NOMSERV");
          $this->db->from("BTIC_SERVICIOS");
          $query = $this->db->get();
          if($query->num_rows() >= 1){    
              return $query->result();
          }else{
          return false;
          }    
      }  

    }



?>
