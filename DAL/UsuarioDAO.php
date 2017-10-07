<?php

require_once("../Util/ClassSerialization.php");
require_once("../Model/Usuario.php");
require_once("../Model/Usuario.php");
include './connection.php';

class UsuarioDAO {

    private $serialize;

    public function __construct() {
        $this->serialize = new ClassSerialization();
    }

    function Cadastrar(Usuario $usuario) {
        if ($usuario->getNome() != "" && $usuario->getEmail() != "" && $usuario->getTelefone() != "") {
            return "Cadastrado. Nome: {$usuario->getNome()} E-mail: {$usuario->getEmail()} Telefone: {$usuario->getTelefone()}";
        } else {
            return "invalido";
        }
    }

    public static function createAluno(Usuario $usuario) {
        $mysqli = new mysqli('localhost', 'root', 'root', 'mooc');
        $nome = $usuario->getNome();
        $cpf = $usuario->getCpf();
        $email = $usuario->getEmail();
        $senha = $usuario->getSenha();
        $telefone = $usuario->getTelefone();
        echo $nome;
        $sql = "insert into aluno (nome, cpf, email, senha, telefone) values 
        ('$nome', '$cpf', '$email', '$senha', '$telefone')";

        $query = $mysqli->query($sql);

        return $query->affected_rows;
    }

    public static function loginAluno() {

        $sql = "select * from aluno where email='" . $login . "' and senha='" . $senha . "'";
        $resultados = mysql_query($sql)or die(mysql_error());
        $res = mysql_fetch_array($resultados); //
        if (@mysql_num_rows($resultados) == 0) {
            return FALSE;
        } else
            return TRUE;
    }

    public function RetornarTodos() {
        sleep(1); //Pausa proposital para explicação do beforeSend e complete do AJAX.
        try {
            $listaUsuario = [];

            for ($i = 0; $i < 10; $i++) {
                $usuario = new Usuario();
                $usuario->setNome("Nome: {$i}");
                $usuario->setEmail("mail@dominio.com");
                $usuario->setTelefone("(18) 998{$i}");

                $listaUsuario[] = $usuario;
            }

            return $this->serialize->serialize($listaUsuario);
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

}

?>