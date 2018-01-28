<?php

$req = filter_input(INPUT_GET, "req"); //Obtemos o valor de REQ que é passado através da URL
require_once("../Controller/CursoController.php");

$cursoController = new CursoController();

if ($req) {
  
    if ($req == "1") {
        //Cadastrar
        require_once("../Model/Curso.php");
        
        $curso = new Curso();
        
        $curso->setNomeCurso(filter_input(INPUT_POST, "nomeCurso"));
        $curso->setChaveCurso(filter_input(INPUT_POST, "chaveCurso"));
        $curso->setDescricao(filter_input(INPUT_POST, 'descricao'));
        $curso->setIdProfessor(filter_input(INPUT_POST, 'idProfessor'));
        
        return $cursoController->CadastrarCurso($curso);
    }
    
    
}

?>