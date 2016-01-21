<?php
class Aficiones extends CI_Controller {
    
	function crear() {
        
		enmarcar ( $this, "Aficiones/Crear" );
        
	}
	function crearPost() {
        
		$this->load->model ( "Aficiones_model", "", true );
        
		$datos ["status"] = $this->Aficiones_model->crear ( $_POST ["nombreAficion"] );
        
		$this->load->view ( "Aficiones/crearPost", $datos );
	}
    
}
?>
