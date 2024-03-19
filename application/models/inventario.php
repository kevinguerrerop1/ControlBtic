<?php 

  class Inventario extends CI_Model{

    public function __construct() {
      parent::__construct();
    }

    public function view(){
      $this->db->select('A.ID_ART, A.MARCA,A.MODELO,A.NROSERIE,C.NOMCAT,A.ID_TART,T.NOMTART');    
      $this->db->from('BTIC_ARTICULO A, BTIC_CATEGORIAS C, BTIC_TIPO_ART T');
      $this->db->where('C.ID_CAT = A.ID_CAT');
      $this->db->where('T.ID_TART = A.ID_TART');
      //Para obtener Datos
      $query = $this->db->get(); 
      if($query->num_rows() >= 1){    
        return $query->result();
      }else{
        return false;
      }
    }

    public function viewxcategorias($id){
      $this->db->select('*');
      $this->db->from('articulos');
      $this->db->where('idcat', $id);

      //Para obtener Datos
      $query = $this->db->get(); 
      if($query->num_rows() >= 1){    
        return $query->result();
      }else{
        return false;
      }
    }
    
    //FUNCION PARA RECUPERAR ULTIMA ID
    public function idreg(){
      $this->db->select("(MAX(ID_ART)+1) AS ID_ART");
      $this->db->from("SALUD.BTIC_ARTICULO");
      $query = $this->db->get();
      if($query->num_rows() >= 1){    
        return $query->result();
      }else{
        return false;
      }    
    }

    public function save($id,$marca,$modelo,$nroserie,$idcat){
      $this->db->set('ID_ART',$id);
      $this->db->set('MARCA',$marca);
      $this->db->set('MODELO',$modelo);
      $this->db->set('NROSERIE',$nroserie);
      $this->db->set('ID_CAT',$idcat);
      $this->db->insert('SALUD.BTIC_ARTICULO');
      if($this->db->affected_rows() == 1){      
        return true;
      }else{
        return false;
      }
    } 

  }

?>
