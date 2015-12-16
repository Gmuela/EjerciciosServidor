<?php

class Enlaces_Model extends CI_Model{
    
    public $url;
    public $texto;   
    
    public function getEnlaces(){
        
        $this->load->database();
        
        $datos=$this->db->get("enlaces")->result();
        
        return $datos;
        
    }
    
    public function guardar($url,$texto){
        
        $this->load->database();
        
        $this->url=$url;
        
        $this->texto=$texto;
        
        $this->db->insert("enlaces",$this);
        
        return true;
        
    }
    
}

?>
