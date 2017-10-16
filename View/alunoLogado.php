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
        if (!isset($_SESSION['usuarioID']) || $_SESSION['tipo']!="0") {  //Verifica se há seções e se é aluno
            session_destroy();      //Destroi a seção por segurança
            header("Location: ../index.php");
            exit; //Redireciona o visitante para login
        }
        ?>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div id="vocabulary" class="vocabulary-container">

                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12 vocabulary-category-list-container">
                        <br>
                        <br>
                        <br>
                        <h4 class="text-center">Meus cursos</h4>
                        <div class="list-group vocabulary-list" id="cursosList"></div>
                    </div>
                    <div class="col-md-9">
                        <br>   
                        <div class="text-center">
                            <h2><b>VOCABULÁRIOS EM LIBRAS</b></h2>
                        </div>
                        <br> 
                        <figure class="vocabulary-video text-center">
                            <a href="#">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/o3jiqXwuZGE" frameborder="0" allowfullscreen></iframe>
                            </a>
                        </figure>
                        <!--                alteração aqui-->
                        <h4 class="text-center"><b><span id="chosenWord">-</span></b></h4>
                        <div class="row">

                            <div class="col-md-6 col-sm-6 text-left">

                                <div class="btn-group">
                                    
                                </div>
                            </div>


                            <div class="item_introtext text-right col-md-6 col-sm-6">
                                <a class="readmore wordEvaluation" 
                                   href="#" 
                                   data-type="positivo"
                                   style="float:center; margin-top:0px; font-size: 20px; color: green; padding-left: 120px">
                                    <i class="glyphicon glyphicon-thumbs-up positivo"><span  id="vocabularyPlus">0</span></i>
                                </a>
                                <a class="readmore wordEvaluation" 
                                   href="#" 
                                   data-type="negativo"
                                   style="float:center; margin-top:0px; font-size: 20px; color: red">
                                    <i class="glyphicon glyphicon-thumbs-down negativo"> <span id="vocabularyMinus">0</span></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
