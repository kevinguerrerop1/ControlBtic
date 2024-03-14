<?php 
    class Users extends CI_Model{
		
        public function view(){
            $this->db->select('*');
            $this->db->from('BTIC_USUARIOS');
            $query = $this->db->get();
            if($query->num_rows() >= 1){    
                return $query->result();
            }else{
                return false;
            } 
        }

       
    }



?>
