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

    public static function getCurso()
    {
        $cursos = CursoDAO::getCursos();
        // while($resultado = mysqli_fetch_assoc($qryLista)){
        //   $vetor[] = array_map('utf8_encode', $resultado);
        // }
        if ($cursos) {
            http_response_code(200);
            echo json_encode($cursos);
        }
        else{
          http_response_code(400);
          echo 'Não foi possível carregar as categorias';
        }
    }

    // public static function getAula()
    // {
    //     $aulas = CursoDAO::getAula();
    //     // while($resultado = mysqli_fetch_assoc($qryLista)){
    //     //   $vetor[] = array_map('utf8_encode', $resultado);
    //     // }
    //     if ($aulas) {
    //         http_response_code(200);
    //         echo json_encode($aulas);
    //     }
    //     else{
    //       http_response_code(400);
    //       echo 'Não foi possível carregar as categorias';
    //     }
    // }
}


?>
