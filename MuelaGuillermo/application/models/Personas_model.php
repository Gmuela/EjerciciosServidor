<?php

class Personas_model extends CI_Model{

    public $idPers;
    public $nombre;

    function crear($nombrePersona){

        $this->nombre=$nombrePersona;

		$this->db->insert("Personas",$this);

		return true;
    }


    function getPersonas(){

        $this->load->database();

        $personas = $this->db->get("personas")->result();

        return $personas;

    }


}


?>
