<?php

require_once("../Util/ClassSerialization.php");
require_once("../Model/Curso.php");
include ("./connection.php");

class CursoDAO {

    private $serialize;

    public function __construct() {
        $this->serialize = new ClassSerialization();
    }

    function createCurso(Curso $curso){
        $mysqli = new mysqli('localhost', 'root', 'root', 'mooc');
        $nomeCurso=$curso->getNomeCurso();
        $chaveCurso = $curso->getChaveCurso();
        $descricao = $curso->getDescricao();
        $professor = $curso->getIdProfessor();

        $sql = "insert into curso (nomeCurso, chaveCurso, descricao, idProfessor) values
        ('$nomeCurso', '$chaveCurso', '$descricao', '$professor')";

        $query = $mysqli->query($sql);

        return $query->affected_rows;

    }

    public static function getCursos()
    {
        $conn = new mysqli('localhost', 'root', 'root', 'mooc');

        $sql = "select * from curso";

        $re = $conn->query($sql);

        if (!$re) {
            Log::write($conn->error, __METHOD__);
            return false;
        }

        $cursos = [];
        while ($row = $re->fetch_assoc()) {
            $cursos[] = $row;
        }

        return $cursos;
    }

}


?>
