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

            return UsuarioDAO::createUsuario($usuario);

        } else {
            return FALSE;
        }
    }

    function Logar($email, $senha) {

        return UsuarioDAO::logar($email, $senha);
    }

    function Logout($email, $senha) {

        return UsuarioDAO::Logout();

    }

}

?>
