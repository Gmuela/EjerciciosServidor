<?php

require_once "BaseModel.class.php";

class DeporteModel extends BaseModel{
    
    public function getDeportes(){
        
        $datosReturn=[];
        $prepare=$this->db->prepare("Select nombre from deportes");
        $prepare->execute();
        $datosBaseDatos=$prepare->fetchAll();
        
        foreach($datosBaseDatos as $dato){
            
            array_push($datosReturn, $dato["nombre"]);
            
        }
        
        return $datosReturn;
        $this->db=null;
        
    }
    
}

?>