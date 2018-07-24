<?php
class M_reportes extends  CI_Model{
    function __construct(){
        parent::__construct();
    }
    function getDatosTabla(){
        $sql = "SELECT s.*,
                     u.nombre_completo,
               u.Empresa,
               u.Email,
               u.Telefono,
                       u.Contactado,
                       u.Pais,
                       COALESCE(DATE_FORMAT(u.fecha_sol, '%d/%m/%Y %H:%i %p'), '00/00/0000 00:00') AS fecha_sol,
                       u.Cargo,
                       u.Relacion,
                       u.checks
          FROM usuario u,
               solicitud s
         WHERE u.Id_solicitud = s.Id
      ORDER BY u.fecha_sol DESC";
        $result = $this->db->query($sql, array());
        return $result->result();
    }
    function getDatosTablaIdioma($idioma){
      $sql = "SELECT s.*,
                     u.nombre_completo,
                     u.Empresa,
                     u.Email,
                     u.Telefono,
                     u.Contactado,
                     u.Pais,
                     COALESCE(DATE_FORMAT(u.fecha_sol, '%d/%m/%Y %H:%i %p'), '00/00/0000 00:00') AS fecha_sol,
                     u.Cargo,
                     u.Relacion
                FROM usuario u,
                     solicitud s
                WHERE u.Id_solicitud = s.Id
                  AND s.Id_lenguaje = ?";
        $result = $this->db->query($sql, array($idioma));
        return $result->result();
    }
    function getInfoDetails($id){
        $sql = "SELECT u.nombre_completo,
                       u.Email,
                       u.Telefono,
                       (CASE WHEN u.Contactado = 0 THEN 'No precisa'
                             WHEN u.Contactado = 1 THEN 'Email'
                             WHEN u.Contactado = 2 THEN 'Télefono' 
                             WHEN u.Contactado = 3 THEN 'Ambos' END) AS Contactado,
                       COALESCE(DATE_FORMAT(u.fecha_sol, '%d/%m/%Y %H:%i %p'), '00/00/0000 00:00') AS fecha_sol,
                       u.Pais,
                       u.Cargo,
                       u.Relacion,
                       u.checks,
                       u.idioma,
                       u.lugar_aceptacion
                  FROM usuario u
                  WHERE u.Id_solicitud = ?";
        $result = $this->db->query($sql, array($id));
        return $result->result();
    }
}