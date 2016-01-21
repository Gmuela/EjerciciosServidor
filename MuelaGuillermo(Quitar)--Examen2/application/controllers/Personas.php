<?php
class Personas extends CI_Controller {

	function crear() {
        
        $this->load->model ( "Aficiones_model", "", true );
        
        $datos["aficiones"] = $this->Aficiones_model->getAficiones();         
        
		enmarcar ( $this, "Personas/Crear",$datos );
	}
    
    function crearPost() {
        
		$this->load->model ( "Personas_model", "", true );
        
        $this->load->model ( "Personas_Aficiones_model", "", true );
        
		$datos ["status"] = $this->Personas_model->crear ( $_POST ["nombrePersona"] );
        
        if(isset($_POST["aficion"])){
            
           $datos ["status"] = $this->Personas_Aficiones_model->crear ( $_POST ["aficion"] ); 
            
        }        
        
		$this->load->view ( "Personas/crearPost", $datos );
	}

	function listar() {
		
        $this->load->model("Personas_model");
        
        $this->load->model("Personas_Aficiones_model");
            
        $datos["personas"] = $this->Personas_model->getPersonas(); 
        
        $datos["personas"] = $this->Personas_Aficiones_model->contarAficiones($datos["personas"]); 
        
        enmarcar($this, "Personas/listar",$datos);
        
    
	}
    
}
?>