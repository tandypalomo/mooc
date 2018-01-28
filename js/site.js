function loadCategories() {

    var $container = $("#vocabulary");
    $.ajax('/vocabulary-categories', {
        type: 'GET',
        dataType: 'json',
        success: function (categories) {

            cats = categories.map(function (item) {
                if (item.categoria.trim() !== "") {
                    return '<a class="list-group-item list-group-item-action category-item" href="#" data-category="' + item.categoria + '">' + item.categoria + ' <span class="badge">' + item.total + '</span></a>';
                }
            });

            $container.find("#categoryList").html(cats.join(''));

            categoryList = categories.map(function (item) {
                if (item.categoria.trim() !== "") {
                    return '<option value="' + item.categoria + '">' + item.categoria + '</option>';
                }
            });

            $(".categoryList").html(categoryList.join(''));
        },
        error: function (jqXHR) {
            alert(jqXHR.responseText);
        }
    });
  }

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
                    alert("Cadastro realizado");
                    location.href = 'index.php'
                },
                error: function (result) {
                    alert("Ocorreu um erro!");
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
                    //0->aluno 1->professor 2->admin
                    if (result == '0') {
                        location.href = 'View/alunoLogado.php';
                    }
                    if (result == '1') {
                        location.href = 'View/professorLogado.php';
                    }
                    if (result == '2') {
                        location.href = 'View/interpreteLogado.php';
                    }
                    $("#resultado").html(result);
                },
                error: function (result) {
                    alert("Erro inesperado!")
                }

            });
        });


}
);
