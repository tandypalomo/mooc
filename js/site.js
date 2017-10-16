            $(document).ready(function () {
                $("#btnCadastrar").click(function () {          

                    var dados = {
                        txtNome: $("#txtNome").val(),
                        txtEmail: $("#txtEmail").val(),
                        cpf: $("#cpf").val(),
                        senha: $("#senha").val(),
                        txtTelefone: $("#txtTelefone").val(),
                        tipo: $("#tipo").val()
                    };

                    $.ajax({
                        url: "Action/UsuarioAC.php?req=1",
                        type: "post",
                        dataType: "html",
                        data: dados,
                        success: function (result) {
                            location.href = '#'
                        },
                        error: function (result) {
                            console.log(result);
                        }

                    });
                });
                
                
                $("#btnLogar").click(function () {

                    var dados = {
                        email: $("#emailLogin").val(),
                        senha: $("#senhaLogin").val()
                    };

                    $.ajax({
                        url: "../Action/UsuarioAC.php?req=3",
                        type: "post",
                        dataType: "html",
                        data: dados,
                        success: function (result) {
                            // 0->aluno 1->professor 2->admin
                            if (result =='0') {
                                location.href='View/alunoLogado.php';
                            }
                            if (result =='1') {
                                location.href='View/professorLogado.php';
                            }
                            $("#resultado").html(result);
                        },
                        error: function (result) {
                            console.log(result);
                        }

                    });
                });
                
                
            });

