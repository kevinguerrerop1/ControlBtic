<?php 

  class Inventario extends CI_Model{

    public function __construct() {
      parent::__construct();
    }

    public function view(){
      $this->db->select('A.ID_ART, A.MARCA,A.MODELO,A.NROSERIE,C.NOMCAT');    
      $this->db->from('BTIC_ARTICULO A, BTIC_CATEGORIAS C');
      $this->db->where('C.ID_CAT = A.ID_CAT');
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

		public function save($art){
      $this->db->insert('articulos',$art);
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

  }

?>
