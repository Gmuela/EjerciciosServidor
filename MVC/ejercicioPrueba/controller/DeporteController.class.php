<?php

require_once "BaseController.class.php";

class DeporteController extends BaseController{
    
    function listarGet(){
        
        $this->createModel();
        $misDatos["mainView"]["deportes"]=$this->model->getDeportes();
        $this->returnView($misDatos,false);
        
    }   
    
    function listarPost(){
    
        $datos["mainView"]["deporte"]=$_REQUEST["deporte"];
        
        $this->returnView($datos,false); 
        
    }
}

?>
