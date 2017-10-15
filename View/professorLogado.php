<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
        session_start();  //A seção deve ser iniciada em todas as páginas
        if (!isset($_SESSION['usuarioID']) || $_SESSION['tipo']!='1') {  //Verifica se há seções e se é professor
            session_destroy();      //Destroi a seção por segurança
            header("Location: viewLogin.php");
            exit; //Redireciona o visitante para login
        }
        ?>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>PROFESSOR LOGADO</h1>
        <?php
        echo $_SESSION['tipo'];
        ?>
    </body>
</html>
