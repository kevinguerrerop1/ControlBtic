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

		public function save($pres){
			$this->db->insert('prestamos',$pres);
		}

    }



?>
