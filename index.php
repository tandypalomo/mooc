<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MOOC</title>
        <style>
            *{
                margin:0 auto;
                padding: 0;
                font-family: "Segoe UI";
            }

            body{
                background-color: #EEE;
            }

            h1{
                font-weight: 300;
                text-align: center;
            }

            ul{
                list-style: none;
            }

            .centro{
                max-width: 600px;
                width:100%;
                background-color: #FFF;
                border:2px solid #CCC;
                box-shadow: 0 0 5px #000;
            }

            .texto{
                font-weight: bold;
            }

            .break{
                margin-bottom:10px;
            }

            #dvForm{
                padding:10px;
            }

            input[type=text]{
                padding: 5px;
                width:100%;
                max-width:550px;
                outline-color: pink;
            }

            input[type=button]{
                padding: 5px;
                outline: none;
            }
        </style>
    </head>
    <body>
        <div id="dvCentro" class="centro">
            <h1>Cadastro Usuário</h1>
            <br />
            <hr />
            <div id="dvForm">
                <ul>
                    <li class="texto">Nome: </li>
                    <li class="break"><input type="text" placeholder="" id="txtNome" /></li>

                    <li class="texto">E-mail:</li>
                    <li class="break"><input type="text" placeholder="" id="txtEmail" /></li>

                    <li class="texto">CPF:</li>
                    <li class="break"><input type="text" placeholder="" id="cpf" /></li>

                    <li class="texto">Senha:</li>
                    <li class="break"><input type="password" placeholder="" id="senha" /></li>

                    <li class="texto">Telefone:</li>
                    <li class="break"><input type="text" placeholder="" id="txtTelefone" /></li>

                    <li class="texto" id="resultado"></li>
                    <li class="break"><input type="button" id="btnCadastrar" value="Cadastrar" /></li>
                    <a href="View/login.php">Login</a>
                </ul>
            </div>
        </div>

        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $("#btnCadastrar").click(function () {

                    //Abaixo é montado um obejto com o mesmo nome do campo, pois no Action programamos para reeber estes nomes;
                    //O nome do formulário do HTML não interfere no nome dado aos itens do Objeto, porém tando na Action quando no Objeto devem ter os mesmos nomes.
                    //Documentação: http://api.jquery.com/jquery.ajax/           

                    var dados = {
                        txtNome: $("#txtNome").val(),
                        txtEmail: $("#txtEmail").val(),
                        cpf: $("#cpf").val(),
                        senha: $("#senha").val(),
                        txtTelefone: $("#txtTelefone").val()
                    };

                    $.ajax({
                        url: "Action/UsuarioAC.php?req=1",
                        type: "post",
                        dataType: "html",
                        data: dados,
                        success: function (result) {
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

