<?php
class Aficiones_model extends CI_Model {

	public $idAfic;
	public $nombre;

	function crear($nombreAficion) {

		$this->nombre=$nombreAficion;

		$this->db->insert("Aficiones",$this);

		return true;
	}

    function getAficiones(){

        $this->load->database();

        $aficiones = $this->db->get("aficiones")->result();

        return $aficiones;

    }
}
