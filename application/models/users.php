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

        public function verificar_usuario($usuario, $contrasena){  
        
            $this->db->select("U.CORREO,U.CLAVE");
            $this->db->from("BTIC_USUARIOS U");
            $this->db->where("U.CORREO",$usuario);   
            $this->db->where("U.CLAVE",$contrasena);   
            $query = $this->db->get();
            if($query->num_rows() >= 1){
              $resultado = $query->row();
              return json_encode($resultado);
            }
            else{
              return false;
            }
        }
       
    }



?>
