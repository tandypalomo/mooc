<?php

require_once("../DAL/UsuarioDAO.php");

//require_once("../Model/UsuarioModel.php");

class UsuarioController {

    private $usuarioDAO;

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();
    }

    function Cadastrar(Usuario $usuario) {

        if ($usuario->getNome() != "" && $usuario->getEmail() != "") {

            return UsuarioDAO::createAluno($usuario);
            
        } else {
            return "invalido";
        }
    }

    public function RetornarTodos() {
        return $this->usuarioDAO->RetornarTodos();
    }

    function Logar($email, $senha) {

        echo UsuarioDAO::logar($email, $senha);
    }

}

?>
