<?php

$req = filter_input(INPUT_GET, "req"); //Obtemos o valor de REQ que é passado através da URL
require_once("../Controller/UsuarioController.php");

if ($req) {

    $usuarioController = new UsuarioController();

    if ($_REQUEST["req"]=="0") {
        session_start();
        session_destroy();
        header("Location: ../index.html");
        exit;
    }

    if ($req == "1") {
        //Cadastrar
        require_once("../Model/Usuario.php");
        $usuario = new Usuario();

        $usuario->setNome(filter_input(INPUT_POST, "txtNome"));
        $usuario->setEmail(filter_input(INPUT_POST, "txtEmail"));
        $usuario->setCpf(filter_input(INPUT_POST, "cpf"));
        $usuario->setSenha(filter_input(INPUT_POST, "senha"));
        $usuario->setTelefone(filter_input(INPUT_POST, "txtTelefone"));
        $usuario->setTipo(filter_input(INPUT_POST, "tipo"));



        return $usuarioController->Cadastrar($usuario);
    }


    if ($req == "2") {
        //Retornar todos
        echo $usuarioController->RetornarTodos();
    }


    if ($req == "3") {

        $email = filter_input(INPUT_POST, "email");
        $senha = filter_input(INPUT_POST, "senha");

        return $usuarioController->Logar($email, $senha);
    }
}
?>
