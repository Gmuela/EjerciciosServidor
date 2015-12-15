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
    
    public function cargarLinks(){
        
        $datos=[
            
            "links"=> [
                
            ["url"=>"http://www.google.com","texto"=>"Google"],
                
            ["url"=>"http://www.amazon.es","texto"=>"Amazon"],
            
            ["url"=>"http://www.pccomponentes.com","texto"=>"PCComponentes"],
            
            ["url"=>"http://www.ebay.com","texto"=>"Ebay"]
            
            ]
        ];
        
        $this->load->helper("url");
        
        $this->load->view("linksFavoritos",$datos);
        
        
    }
    
    public function cargarLinksModel(){
        
        $this->load->model("enlaces_model");
        
        $datos=$this->enlaces_model->getEnlaces();
        
        $this->load->helper("url");
        
        $this->load->view("linksFavoritos",$datos);
        
        
    }
    
    public function crearLinkGet(){
        
        $this->load->view("crearlinkget");
        
    }
    
    public function crearLinkPost(){
        
        $this->load->model("enlaces_model");
        
        $url=$_REQUEST["url"];
        
        $texto=$_REQUEST["texto"];
        
        $check=$this->enlaces_model->guardar($url,$texto);
        
        if($check){
            
            $this->load->view("crearLinkPost");
            
        }
        
        else{
            
            $this->load->view("error");
            
        }
        
    }
}


?>
