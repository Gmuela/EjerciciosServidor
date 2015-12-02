<?php

require_once "BaseController.class.php";

class DeporteController extends BaseController{
    
    function listarGet(){
        
        $this->returnView("",false);
        
    }   
    
    function listarPost(){
    
        $datos["mainView"]["deporte"]=$_REQUEST["deporte"];
        
        $this->returnView($datos,false); 
        
    }
}

?>
