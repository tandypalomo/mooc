<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Curso{
    private $nomeCurso;
    private $chaveCurso;
    private $descricao;
    private $professor;
    
    function getNomeCurso(){
        return $this->nomeCurso;    
    }
    
    function getChaveCurso(){
        return $this->chaveCurso;
    }
    
    function getDescricao(){
        return $this->descricao;
    }
    
    function getIdProfessor(){
        return $this->professor;
    }
    
    function setNomeCurso($nomeCurso){
        $this->nomeCurso = $nomeCurso;
    }
    
    function setChaveCurso($chaveCurso){
        $this->chaveCurso = $chaveCurso;
    }
    
    function  setDescricao($descricao){
        $this->descricao = $descricao;
    }
    
    function setIdProfessor($professor){
        $this->professor = $professor;
    }
    
}

?>