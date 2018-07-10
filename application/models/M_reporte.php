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
}