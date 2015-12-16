<?php

class Departamento extends CI_Controller{
    
    function index(){
        
        echo "Esto es el index";
        
    }
    
    function listarDepartamentos(){
        
        $this->load->model("departamento/departamento_model");
        
        $datos["departamentos"] = $this->departamento_model->getDepartamentos();
        
        $this->load->view("Departamento/ListaDepartamentos",$datos);
        
    }
    
    function crearDepartamentoGet(){
        
        $this->load->view("Departamento/crearDepartamentoGet");
        
    }
    
    function crearDepartamentoPost(){
        
        $this->load->model("departamento/departamento_model");
        
        $check = $this->departamento_model->insertDepartamento($_REQUEST["nombre"]);
        
        if($check){
            
             $this->load->view("Departamento/crearDepartamentoPost");
        }
        
        else{
            
            echo "Error";
            
        }
       
        
    }
    
}
    
    
?>