<?php

require_once "BaseModel.class.php";

class EmpleadoModel extends BaseModel{
    
    function getEmpleado(){
        
        
        $returnEmple=[];
        $prepare=$this->db->prepare("Select nombre from empleados");
        $prepare->execute();
        $datosBD=$prepare->fetchAll();
        
        foreach($datosBD as $emple){
            
            array_push($returnEmple, $emple["nombre"]);
            
        }
        
        return $returnDeparts;
        
        $this->db=null;
        
    }
    
    
    /*function setDepartamento($nuevoDepart){ 
        
        $insert="insert into departamentos(nombre) value(:nombreDepart)";
        
        $prepare=$this->db->prepare($insert);
        $prepare->bindParam(":nombreDepart",$nuevoDepart);
        $prepare->execute();         
    }*/    
}
