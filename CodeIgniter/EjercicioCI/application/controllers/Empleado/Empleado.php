<?php

class Empleado extends CI_Controller{
    
    function index(){
        
        echo "Esto es el index";
        
    }

    function listarEmpleados(){
        
        $this->load->model("Empleado/empleado_model");
        $this->load->model("Departamento/departamento_model");
        
        if(isset($_REQUEST["departamento"])){
            
            $iddep=$_REQUEST["departamento"];
            
            if($iddep==0){
                
               $datos["empleados"] = $this->empleado_model->getEmpleadosDep(); 
                
            }
            
            else{
                    
                $datos["empleados"] = $this->empleado_model->getEmpleadosDepSelect($iddep);    
                
            }
        }
        
        else{
            
            $datos["empleados"] = $this->empleado_model->getEmpleadosDep();         
        }
        
        $datos["departamentos"] = $this->departamento_model->getDepartamentos();         
        
        $this->load->view("empleado/listarEmpleados",$datos);
        
    }    
    
}
    
    
?>
