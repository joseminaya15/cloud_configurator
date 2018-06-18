<?php

class M_solicitud extends  CI_Model{
    function __construct(){
        parent::__construct();
    }

    function insertarDatos($arrayInsert, $tabla){
        $this->db->insert($tabla, $arrayInsert);
        $sol = $this->db->insert_id();
        if($this->db->affected_rows() != 1) {
            throw new Exception('Error al insertar');
            $data['error'] = EXIT_ERROR;
        }
        return array("error" => EXIT_SUCCESS, "msj" => MSJ_INS, "Id" => $sol);
    }
    function updateDatos($arrayData, $id, $tabla){
        $this->db->where('Id'  , $id);
        $this->db->update($tabla, $arrayData);
        if ($this->db->trans_status() == false) {
            throw new Exception('No se pudo actualizar los datos');
        }
        return array('error' => EXIT_SUCCESS,'msj' => MSJ_UPT);
    }
    function getRespUsuario($id_persona) {
        $sql = "SELECT s.* 
                  FROM usuario u,
                       solicitud s
                WHERE s.Id = u.Id_solicitud
                 AND u.Id_persona = ?;";
        $result = $this->db->query($sql, array($id_persona));
        return $result->result();
    }
    function datos($id) {
        $sql = "SELECT * 
                  FROM solicitud
                 WHERE Id = ?";
        $result = $this->db->query($sql, array($id));
        return $result->result();
    }
}