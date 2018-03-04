$(document).ready(function () {

    $("#btnCadastraCurso").click(function () {

        var dados = {
            nomeCurso: $("#nomeCurso").val(),
            chaveCurso: $("#chaveCurso").val(),
            descricao: $("#descricao").val(),
            idProfessor: $('#idProfessor').val()
        };


        $.ajax({
                        url: "../Action/ProfessorAC.php?req=1",
                        type: "post",
                        dataType: "html",
                        data: dados,
                        success: function (result) {
                            alert("Cadastro realizado");
                            location.href = '../View/professorLogado.php'
                        },
                        error: function (result) {
                            alert("ocorreu um erro!");
                            console.log(result);
                        }

                    });
    });

    function getAulas()
    {
      $.get('../Action/ProfessorAC.php?req=getAulas', function(response) {
        var investData = response.data;

      }, 'json');
    }

});
