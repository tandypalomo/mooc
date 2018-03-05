$(document).ready(function () {

    $("#btnCadastraCurso").click(function () {

        var dados = {
            nomeCurso: $("#nomeCurso").val(),
            chaveCurso: $("#chaveCurso").val(),
            descricao: $("#descricao").val(),
            idProfessor: $('#idProfessor').val()
        };


        $.ajax({
                        url: "../Action/ProfessorAC.php?req=cadastrarCurso",
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

    getCurso();

});

function getCurso()
{
  $.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: '../Action/ProfessorAC.php?req=getCurso',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){

			for(var i=0;dados.length>i;i++){
				$('#cursos').append('<li>'+dados[i].nomeCurso+'<ul id="aula"'+ dados[i].id +'></ul></li>');
			}

      // $.ajax({
      //   type:'post',		//Definimos o método HTTP usado
      //   dataType: 'json',	//Definimos o tipo de retorno
      //   url: '../Action/ProfessorAC.php?req=getAula',//Definindo o arquivo onde serão buscados os dados
      //   success: function(aulas){
      //
      //     for(var i=0;dados.length>i;i++){
      //
      //       $('#cursos').append('<li>'+dados[i].nomeCurso+'</li>');
      //     }
      //   }
      // });
		}
	});

}
