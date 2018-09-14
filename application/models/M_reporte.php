<?php

class M_reporte extends  CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getDatosUser() {
        $sql = "SELECT n.*,
                       p.*,
                       ce.*,
                       n.telefono AS phone
                  FROM negocio n,
                       persona p,
                       contacto_emergencia ce
                 WHERE n.id_negocio = p._id_negocio
                   AND n.id_negocio = ce._id_negocio";
        $result = $this->db->query($sql);
        return $result->result();
    }
    function getDocumento($id){
        $sql    = "SELECT imagen 
                     FROM persona
                    WHERE _id_negocio = ".$id."";
        $result = $this->db->query($sql);
        return $result->result();
    }
    function getBlankDocumento($id){
        $sql    = "SELECT imagen2 
                     FROM persona
                    WHERE _id_negocio = ".$id."";
        $result = $this->db->query($sql);
        return $result->result();
    }
    function verificaUsuario($usuario){
        $sql    = "SELECT * 
                     FROM negocio
                    WHERE correo LIKE ?";
        $result = $this->db->query($sql, array($usuario));
        return $result->result();
    }
    function guardarEncuesta($arrayInsert, $tabla){
        $this->db->insert($tabla, $arrayInsert);
        $sql = $this->db->insert_id();
        if($this->db->affected_rows() != 1) {
            throw new Exception('Error al insertar');
            $data['error'] = EXIT_ERROR;
        }
        return array('error' => EXIT_SUCCESS,'msj' => MSJ_UPT);
    }
    function getDatosEncuesta(){
        $sql = "SELECT e.*,
                       n.primer_nombre,
                       n.apellidos
                  FROM encuesta e,
                       negocio n
                 WHERE e.id_negocio = n.id_negocio";
        $result = $this->db->query($sql);
        return $result->result();
    }
}