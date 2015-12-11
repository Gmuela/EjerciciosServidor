<?php

class Home extends CI_Controller{   
    
    public function index(){
        
        echo "Esto es el index";
        
    }
    
    public function holaMundo(){
        
        echo "Hola Mundo";
        
    }  
    
    public function holaUsuario($usuario, $pass){
        
        if(isset($usuario) && isset($pass)){
            
            echo "Hola $usuario, tu password es $pass";            
        }
        
        else{
            
            echo "Hola usuario anónimo";
            
        }         
    }
    
    public function holaUsuarioGet(){
        
        if(isset($_REQUEST["nombre"])){
            
            echo "Hola ".$_REQUEST["nombre"];            
        }
        
        else{
            
            echo "Hola usuario anónimo";
            
        }         
    }
    
    public function coleccion(...$parametros){
        
        foreach($parametros as $param){
            
            echo "Me ha llegado este parámetro: $param<br/>";
            
        }
        
    }
    
    public function cargarVista(){
        
        $this->load->view("hola");
        
    }
    
    public function cargarVistaDatos(){
        
        $usuario["nombre"]="Guillermo";
        $usuario["pass"]="pass";
        
        $this->load->view("holaDatos",$usuario);
        
    }    
}


?>
