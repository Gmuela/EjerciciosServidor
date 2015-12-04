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
        
        $nuevosDeparts=$_REQUEST["nuevosDeparts"];
        
        $this->model->setDepartamento($nuevosDeparts);
        
    }
    
}