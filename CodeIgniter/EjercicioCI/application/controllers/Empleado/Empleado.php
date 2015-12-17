<?php

class Empleado extends CI_Controller{
    
    function index(){
        
        echo "Esto es el index";
        
    }

    function listarEmpleados(){
        
        $this->load->model("Empleado/empleado_model");
        
        $datos["empleados"] = $this->empleado_model->getEmpleados();
        
        $enviar = $this->empleado_model->getEmpleados();
        
        $datos["departamentos"] = $this->empleado_model->getDepEmpleados($enviar);
        
        
        
        $this->load->view("empleado/listarEmpleados",$datos);
        
    }     
}
    
    
?>