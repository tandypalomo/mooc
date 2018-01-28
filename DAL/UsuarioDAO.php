<?php

require_once("../Util/ClassSerialization.php");
require_once("../Model/Usuario.php");
include ("./connection.php");

class UsuarioDAO {

    private $serialize;

    public function __construct() {
        $this->serialize = new ClassSerialization();
    }

    public static function createUsuario(Usuario $usuario) {
        $mysqli = new mysqli('localhost', 'root', 'root', 'mooc');
        $nome = $usuario->getNome();
        $cpf = $usuario->getCpf();
        $email = $usuario->getEmail();
        $senha = $usuario->getSenha();
        $telefone = $usuario->getTelefone();
        $tipo = $usuario->getTipo();

        $sql = "insert into usuario (nome, cpf, email, senha, telefone, tipo) values
        ('$nome', '$cpf', '$email', '$senha', '$telefone', '$tipo')";

        $query = $mysqli->query($sql);

        return $query->affected_rows;
    }

    function logar($email, $senha) {
        $mysqli = new mysqli('localhost', 'root', 'root', 'mooc');

        $sql = "SELECT * from usuario where email=" . $email . " and senha=" . $senha . "";
        $resultados = $mysqli->query($sql);
        $res=mysqli_fetch_array($resultados);
        if (mysqli_num_rows($resultados)>0) {

            if (!isset($_SESSION)) {  //verifica se há sessão aberta
                session_start();  //Inicia seção
                //Abrindo seções
                $_SESSION['usuarioID'] = $res['id'];
                $_SESSION['nomeUsuario'] = $res['nome'];
                $_SESSION['email'] = $res['email'];
                $_SESSION['tipo'] = $res['tipo'];
                echo $_SESSION['tipo'];
                exit;
            }
        } else {

            return "Login ou senha invalido";
        }
    }

}

?>
