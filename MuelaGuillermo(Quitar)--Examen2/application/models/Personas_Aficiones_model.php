<?php

class Personas_Aficiones_model extends CI_Model{    
    
    public $idPers;    
    public $idAfic;
    
    function crear($idAficion){
        
        $this->idPers=$this->db->insert_id();
        
        for($i=0;$i<count($idAficion);$i++){
        
          $this->idAfic=$idAficion[$i];
        
		  $this->db->insert("Personas_Aficiones",$this);            
            
        }       
        
		return true;   
    } 
    
    function contarAficiones($personas){
        
        for($i=0;$i<count($personas);$i++){
        
            $sql="SELECT count(PersAfic.idAfic) as idAfic, Pers.nombre as nombre FROM personas_aficiones PersAfic, personas Pers where Pers.idPers={$personas[$i]->idPers} and Pers.idPers=PersAfic.idPers";

            $cuentaAfic[$i]= $this->db->query($sql)->result(); 
            
        }       
        
		return $cuentaAfic;   
    }
    
}


?>


