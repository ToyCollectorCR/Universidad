<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EstudianteModel
 *
 * @author fd_se
 */

require_once 'basedatos/conexion.php';
require_once 'Estudiante.php';

class EstudianteModel {
    
    private $bd;
    
    function __construct() {
        $this->bd = new ConexionBD();
    }
    
    public function listarEstudiantes(){
        $estudiantes = array();
        $this->bd->getConeccion();
        $sql="SELECT * FROM ESTUDIANTES";
        
        $registros = $this->bd->executeQueryReturnData($sql);
        
        $this->bd->cerrarConeccion();
        
        foreach ($registros as $row){
            $estudiante = new Estudiante($row['cedula'],$row['nombre'],$row['apellido'],$row['edad']);
            array_push($estudiantes, $estudiante);
        }
        return $estudiantes;
        
        }

}
