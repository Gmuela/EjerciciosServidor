<?php

require_once "BaseController.class.php";

class DepartamentoController extends BaseController{
    
    function listarGet(){
        
        $this->createModel();
        $departamentos["mainView"]["departamentos"]=$this->model->getDepartamentos();
        $this->returnView($departamentos,false);
        
    }
    
    function listarPost(){
        
        $departamentos["mainView"]["departamentos"]=$_REQUEST["departamentos"];
        
        $this->returnView($departamentos,false);
        
    }
    
    function crearGet(){
        
        $this->returnView("",false);
        
    }
    
    function crearPost(){
        
        $this->createModel();
        
        $nuevoDepart=$_REQUEST["nuevoDepart"];      
        
        $this->model->setDepartamento($nuevoDepart);
        
        $this->returnView("",false);
        
    }
    
}
