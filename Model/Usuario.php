<?php

//include './connection.php';

class Usuario {
 
    private $nome;
    private $email;
    private $telefone;
    private $senha;
    private $cpf;
    private $tipo;
 
//    public static function createAluno($nome, $cpf, $email, $senha, $telefone ){
//        $mysqli = new mysqli('localhost', 'root', 'root', 'mooc');
//        
//        $sql = "insert into aluno (nome, cpf, email, senha, telefone) values 
//        ('$nome', '$cpf', '$email', '$senha', '$telefone')";
//
//        $query = $mysqli->query($sql);
//
//        return $query->affected_rows;   
//    }
    
    function getNome() {
        return $this->nome;
    }
 
    function getEmail() {
        return $this->email;
    }
    
    function getCpf() {
        return $this->cpf;
    }
    
    function getSenha() {
        return $this->senha;
    }
 
    function getTelefone() {
        return $this->telefone;
    }
    
    function getTipo() {
        return $this->tipo;
    }
 
    function setNome($nome) {
        $this->nome = $nome;
    }
 
    function setEmail($email) {
        $this->email = $email;
    }
    
    function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    
    function setSenha($senha) {
        $this->senha = $senha;
    }
 
    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    
    function setTipo($tipo){
        $this->tipo = $tipo;
    }
 

}

 ?>
