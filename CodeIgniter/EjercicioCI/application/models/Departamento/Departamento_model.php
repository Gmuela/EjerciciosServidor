<?php

class Departamento_model extends CI_Model{    
    
    public $nombre;
    
    function getDepartamentos(){
        
        $this->load->database();
        
        $departamentos = $this->db->get("departamentos")->result();
        
        return $departamentos;
        
    }
    
    function insertDepartamento($nombreDepartamento){
        
        $this->load->database();
        
        $this->nombre = $nombreDepartamento;
        
        $this->db->insert("departamentos",$this);
        
        return true;
        
    }
    
}


?>