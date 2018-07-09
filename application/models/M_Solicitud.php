<?php

class M_solicitud extends  CI_Model{
    function __construct(){
        parent::__construct();
    }

    function insertarDatos($insertNegocio, $tabla){
        $this->db->insert($tabla, $insertNegocio);
        $sql = $this->db->insert_id();
        if($this->db->affected_rows() != 1) {
            throw new Exception('Error al insertar');
            $data['error'] = EXIT_ERROR;
        }
        return array("error" => EXIT_SUCCESS, "msj" => MSJ_INS, "id_negocio" => $sql);
    }
    
    function insertarDemasDatos($insertPersona, $tabla1, $insertContacto, $tabla3){
    	$this->db->insert($tabla1, $insertPersona);
        $sql = $this->db->insert_id();
        if($this->db->affected_rows() != 1) {
            throw new Exception('Error al insertar');
            $data['error'] = EXIT_ERROR;
        }
        $this->db->insert($tabla3, $insertContacto);
        $sql = $this->db->insert_id();
        if($this->db->affected_rows() != 1) {
            throw new Exception('Error al insertar');
            $data['error'] = EXIT_ERROR;
        }
        return array('error' => EXIT_SUCCESS,'msj' => MSJ_UPT);
    }
}