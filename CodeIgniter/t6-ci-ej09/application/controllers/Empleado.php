<?php
class Empleado extends CI_Controller {

	function crear() {
		enmarcar ( $this, 'empleado/crear' );
	}

	function listar() {
		
        $this->load->model("empleado_model");
        $this->load->model("departamento_model");
            
        $datos["empleados"] = $this->empleado_model->getEmpleadosDep();      
        $datos["departamentos"] = $this->departamento_model->leerTodos();      
                 
        
        enmarcar($this, 'empleado/listar',$datos);
        
    
	}
    
    function listarPost() {
		
        $this->load->model("empleado_model");
        $this->load->model("departamento_model");
            
        $datos["empleados"] = $this->empleado_model->getEmpleadosDepSelect($_REQUEST['iddep']);      
        $datos["departamentos"] = $this->departamento_model->leerTodos();      
                 
        
        enmarcar($this, 'empleado/listar',$datos);
        
    
	}
}
?>