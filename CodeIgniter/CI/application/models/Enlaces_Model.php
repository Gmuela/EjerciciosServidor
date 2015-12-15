<?php

class Enlaces_Model extends CI_Model{
    
    private $url;
    private $texto;
    
    
    public function transformaDatos($listaObjetos){
        
        $datos=["links"=>[]];
        
        foreach($listaObjetos as $objeto){
            
            $elemento["url"]=$objeto->url;
            $elemento["texto"]=$objeto->texto;
            
            array_push($datos["links"],$elemento);
            
            
        }
        
        return $datos;
        
    }
    
    public function getEnlaces(){
        
        $this->load->database();
        
        $datos=$this->db->get("enlaces")->result();
        
        $datos=$this->transformaDatos($datos);
        
        return $datos;
        
    }
    
    public function guardar($url,$texto){
        
        $this->load->database();
        
        $this->$url=$url;
        
        $this->$texto=$texto;
        
        $this->db->insert("enlaces",$this);
        
        return true;
        
    }
    
}

?>
