<?php


class Usuario {
 
    private $nome;
    private $email;
    private $telefone;
    private $senha;
    private $cpf;
    private $tipo;
 

    
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
