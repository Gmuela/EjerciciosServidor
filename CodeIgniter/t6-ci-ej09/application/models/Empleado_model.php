<?php

class Empleado_model extends CI_Model{    
    
    public $nombre;
    
    public $apellidos;
    
    public $iddemp;
    
    public $iddep;
    
    function getEmpleados(){
        
        $this->load->database();
        
        $empleados = $this->db->get("empleados")->result();
        
        return $empleados;
        
    }
    
    function getEmpleadosDep(){
        
        $this->load->database(); 
            
        $sql="SELECT e.nombre as nombre, e.apellido as apellido, d.nombre as depnombre FROM empleados e, departamentos d WHERE e.iddep=d.iddep";

        $nombre = $this->db->query($sql)->result();       

         return $nombre;
    }
    
    function getEmpleadosDepSelect($iddep){
        
        $this->load->database(); 
            
        $sql="SELECT e.nombre as nombre, e.apellidos as apellidos, d.nombre as depnombre FROM empleados e, departamentos d WHERE e.iddep=$iddep and e.iddep=d.iddep";

        $nombre = $this->db->query($sql)->result();       

        return $nombre;
    }
    
   
    
}


?>
