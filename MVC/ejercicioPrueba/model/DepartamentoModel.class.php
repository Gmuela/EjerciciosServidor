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
    
    
    function setDepartamento($nuevoDepart){ 
        
        $insert="insert into departamentos(nombre) value(:nombreDepart)";
        
        $prepare=$this->db->prepare($insert);
        $prepare->bindParam(":nombreDepart",$nuevoDepart);
        $prepare->execute();         
    }    
}
