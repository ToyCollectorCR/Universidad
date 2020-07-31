<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EstudianteController
 *
 * @author fd_se
 */

require_once 'model/EstudianteModel.php';

class EstudianteController {
   
    private $model;
    
    function __construct() {
        $this->model = new EstudianteModel();
                
    }

    public function listarEstudiantes(){
        $estudiantes = $this->model->listarEstudiantes();
        require_once 'view/include/header.php';
        require_once 'view/estudiante/listar.php';
        require_once 'view/include/footer.php';
        
    }
        
    
    
}
