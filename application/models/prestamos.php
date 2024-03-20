<?php 
    class Prestamos extends CI_Model{

        public function view(){
            //$this->db->from('prestamos');
			$this->db->select('P.ID_PRES,A.MARCA,A.MODELO,A.NROSERIE,P.PS,U.NOMUSU,U.APEUSU,S.NOMSERV,P.UBICACION,P.FCHENTREGA');    
            $this->db->from('BTIC_ARTICULO A, BTIC_SERVICIOS S,BTIC_USUARIOS U,BTIC_PRESTAMOS P');
            $this->db->where('P.ID_ART = A.ID_ART');
            $this->db->where('P.ID_SERV = S.ID_SERV');
           return $this->db->get()->result();
        }

		public function idreg(){
            $this->db->select("(MAX(ID_PRES)+1) AS ID_PRES");
            $this->db->from("SALUD.BTIC_PRESTAMOS");
            $query = $this->db->get();
            if($query->num_rows() >= 1){    
              return $query->result();
            }else{
              return false;
            }    
        }

        public function save($id,$id_art,$ps,$id_usu,$id_serv,$ubicacion,$fchentrega){
            $this->db->set('ID_PRES',$id);
            $this->db->set('ID_ART',$id_art);
            $this->db->set('PS',$ps);
            $this->db->set('ID_USU',$id_usu);
            $this->db->set('ID_SERV',$id_serv);
            $this->db->set('UBICACION',$ubicacion);
            $this->db->set('FCHENTREGA',$fchentrega);
            $this->db->insert('SALUD.BTIC_PRESTAMOS');
            if($this->db->affected_rows() == 1){      
              return true;
            }else{
              return false;
            }
        } 

    }



?>
