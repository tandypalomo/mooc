<?php

require_once("../DAL/CursoDAO.php");
require_once("../Model/Curso.php");

class CursoController {

    private $cursoDAO;

    function __construct() {
        $this->cursoDAO = new CursoDAO();
    }
    
    
    function CadastrarCurso(Curso $curso) {

        if ($curso->getNomeCurso() != "" ) {
            
            return CursoDAO::createCurso($curso);
            
        } else {
            return FALSE;
        }
    }

}


?>

