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
        if (!isset($_SESSION['usuarioID']) || $_SESSION['tipo'] != "2") {  //Verifica se há seções e se é aluno
            session_destroy();      //Destroi a seção por segurança
            header("Location: ../index.php");
            exit; //Redireciona o visitante para login
        }
        ?>
        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.min.css">
        <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/site.js" type="text/javascript"></script>

    </head>
    <body>
        <div class=" col-md-12 ">
            <div class="col-md-3 text-left"><p>MOOC ACESSICILIDADE</p> </div>
            <div class="col-md-6 text-center">
                <button type="button" class="btn-lg btn-info" data-toggle="modal" data-target="#modalLogin">Novo Curso</button>
            </div>
            <div class="text-right">

                <button type="button" class="btn-lg btn-danger" data-toggle="modal" data-target="#modalCadastro">Sair</button>
            </div>
        </div>
        <hr />
        <?php
        // put your code here
        ?>
    </body>
</html>
