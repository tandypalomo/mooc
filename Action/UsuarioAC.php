<?php
 
$req = filter_input(INPUT_GET, "req"); //Obtemos o valor de REQ que é passado através da URL

if ($req) {
    require_once("../Controller/UsuarioController.php");
    $usuarioController = new UsuarioController();
 
    if ($req == "1") {
        //Cadastrar
        require_once("../Model/Usuario.php");
        $usuario = new Usuario();
        
        $usuario->setNome(filter_input(INPUT_POST, "txtNome"));
        $usuario->setEmail(filter_input(INPUT_POST, "txtEmail"));
        $usuario->setCpf(filter_input(INPUT_POST, "cpf"));
        $usuario->setSenha(filter_input(INPUT_POST, "senha"));
        $usuario->setTelefone(filter_input(INPUT_POST, "txtTelefone"));
        
        
        
        echo $usuarioController->Cadastrar($usuario);
    }
 
 
    if ($req == "2") {
        //Retornar todos
        echo $usuarioController->RetornarTodos();
    }
}

?>