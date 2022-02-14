function valCheckBox(codClie, codDuplica, prestacao, value) {

    let checkbox = document.querySelector("#checkbox" + value).value;
    let dataPagamento = document.querySelector("#dtaPagamento");
    dataPagamento.value = checkbox;

    let codCliente = document.querySelector("[name='CODCLI']");
    codCliente.value = codClie;
    let duplicata = document.querySelector("[name='DUPLIC']");
    duplicata.value = codDuplica;
    let presta = document.querySelector("[name='PREST']");
    presta.value = prestacao;


}

$(document).ready(function() {

    $("#salvarData").click(function() {
        if ($('#alterardtaPagamento').val().length > 0) {


            $.ajax({
                url: 'classes/alterarDataPagamento.php',
                method: 'post',
                data: $('#atualizarData').serialize(),
                success: function(data) {
                    if (data) {

                        atualizarPagina();
                    } else {
                        alert("Erro ao atualizar");
                    }
                }
            });
        } else {
            alert("campo alterar data não pode ser vazio");
        }
    });

    function atualizarPagina() {

        $.ajax({
            url: 'classes/procurarDuplicata.php',
            method: 'post',
            data: $('#atualizarData').serialize(),
            success: function(data) {

                location.reload();
                $('#alertBalon').removeClass('fade');
                $('#alertBalon').addClass('show');

            }
        });
    }

    // carregar paginas atraves do menu


    $('#searchduplicata').submit(function() { return false; });


    $("#buttonSearch").click(function() {
        $.ajax({
            url: 'classes/procurarDuplicata.php',
            method: 'post',
            data: $('#searchduplicata').serialize(),
            success: function(data) {
                console.log(data[[
                    []
                ]]);
                $('.loadPG').load("searchDuplicata.php");


                //location.reload();
                // $('#alertBalon').removeClass('fade');
                // $('#alertBalon').addClass('show');

            }
        });
    });
    // Página de cadastro de perfumes
    $("#duplicata").click(function() {

        $('.loadPG').load("searchDuplicata.php");
        // $('.container-caixa').hide();
        return false;

    });


}); //ready