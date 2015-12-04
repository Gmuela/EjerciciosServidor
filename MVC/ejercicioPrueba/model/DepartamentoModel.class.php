<?php

require_once "BaseModel.class.php";

class DepartamentoModel extends BaseModel{
    
    function getDepartamentos(){
        
        
        $returnDeparts=[];
        $prepare=$this->db->prepare("Select nombre from departamentos");
        $prepare->execute();
        $datosBD=$prepare->fetchAll();
        
        foreach($datosBD as $depart){
            
            array_push($returnDeparts, $depart["nombre"]);
            
        }
        
        return $returnDeparts;
        
        $this->db=null;
        
    }
    
    
    function setDepartamento($nombreDepartamento){
          
            $prepare=$this->db->prepare("INSERT INTO 'departamentos'('nombre') VALUES $nombreDepartamento");
            $prepare->execute();
            
            echo "Departamento creado";
        
    }    
}