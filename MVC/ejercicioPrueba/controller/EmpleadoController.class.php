<?php

require_once "BaseController.class.php";

class EmpleadoController extends BaseController{
    
    function listarGet(){
        
        $this->createModel();
        $departamentos["mainView"]["empleados"]=$this->model->getEmpleados();
        $this->returnView($empleados,false);
        
    }
    
    function listarPost(){
        
        $departamentos["mainView"]["empleados"]=$_REQUEST["empleados"];
        
        $this->returnView($empleados,false);
        
    }
    
    /*function crearGet(){
        
        $this->returnView("",false);
        
    }
    
    function crearPost(){
        
        $this->createModel();
        
        $nuevoDepart=$_REQUEST["nuevoDepart"];      
        
        $this->model->setDepartamento($nuevoDepart);
        
        $this->returnView("",false);
        
    }*/
    
}
