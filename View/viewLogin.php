<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MOOC</title>

        <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.min.css"> 
    </head>
    <body>
        <div id="dvCentro" class="centro">
            <div>
                <h1>Login</h1>
            </div>

            <hr />
            <div id="dvForm">
                <ul>

                    <li class="texto">E-mail:</li>
                    <li class="break"><input class="input-lg" type="text" placeholder="" id="email" /></li>

                    <li class="texto">Senha:</li>
                    <li class="break"><input class="input-lg" type="password" placeholder="" id="senha" /></li>

                    <li class="texto" id="resultado"></li>
                    <li class="break"><input class="btn-success" type="button" id="btnLogar" value="Entrar" /></li>
                    <a href="../index.php">Cadastrar</a>
                </ul>
            </div>
        </div>


        <script>
            $(document).ready(function () {
                $("#btnLogar").click(function () {

                    //Abaixo é montado um obejto com o mesmo nome do campo, pois no Action programamos para reeber estes nomes;
                    //O nome do formulário do HTML não interfere no nome dado aos itens do Objeto, porém tando na Action quando no Objeto devem ter os mesmos nomes.
                    //Documentação: http://api.jquery.com/jquery.ajax/           

                    var dados = {
                        email: $("#email").val(),
                        senha: $("#senha").val()
                    };

                    $.ajax({
                        url: "../Action/UsuarioAC.php?req=3",
                        type: "post",
                        dataType: "html",
                        data: dados,
                        success: function (result) {
                            // 0->aluno 1->professor 2->admin
                            if (result =='0') {
                                location.href='alunoLogado.php';
                            }
                            if (result =='1') {
                                location.href='professorLogado.php';
                            }
                            $("#resultado").html(result);
                        },
                        error: function (result) {
                            console.log(result);
                        }

                    });
                });
            });
        </script>
    </body>
</html>

