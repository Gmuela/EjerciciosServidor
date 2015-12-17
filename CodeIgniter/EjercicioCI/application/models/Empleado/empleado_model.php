<?php

class Empleado_model extends CI_Model{    
    
    public $nombre;
    
    public $apellidos;
    
    public $iddemp;
    
    public $iddep;
    
    function getEmpleados(){
        
        $this->load->database();
        
        $empleados = $this->db->get("empleados")->result();
        
        return $empleados;
        
    }
    
    function getDepEmpleados($datos){
        
        $this->load->database();
        
        $i=0;
        
       $res= $this->db->query("SELECT nombre FROM `departamentos` WHERE iddep=1");
        $res->result();
        
        var_dump($res);
        
        /******************************************************/
        
        
        foreach($datos as $dato){
            
            $iddep = $dato->iddep;
            
            $query = "SELECT nombre FROM `departamentos` WHERE iddep=$iddep";             
            
            $i++;
            
        }
        
        //return $arrayDep;
        
    }
    
    /*function insertDepartamento($nombreDepartamento){
        
        $this->load->database();
        
        $this->nombre = $nombreDepartamento;
        
        $this->db->insert("departamentos",$this);
        
        return true;
        
    }*/
    
}


?>