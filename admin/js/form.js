function valCheckBox(codClie, codDuplica, prestacao, value) {
    
    
    let checkbox = document.querySelector("#checkbox" + value).value;
    let dataPagamento = document.querySelector("#dtaPagamento");
    let codCliente = document.querySelector('#CODCLI');
    let duplicata = document.querySelector('#DUPLIC');
    let presta = document.querySelector('#PREST');

    dataPagamento.value = checkbox;
    codCliente.value = codClie;
    duplicata.value = codDuplica;
    presta.value = prestacao;


}

$(document).ready(function() {

    $("#salvarData").click(function() {
        
        if ($('#alterardtaPagamento').val().length > 0) {
            let codCliente = $('#CODCLI').val();
            let prestacao = $('#PREST').val();
            let codDuplica = $('#DUPLIC').val();
            
           
            $.ajax({
                url: '../classes/alterarDataPagamento.php',
                method: 'post',
                data: $('#atualizarData').serialize(),
                success: function(data) {
                     console.log(data);
                    if (data) {
                       atualizarPagina(codDuplica, prestacao,codCliente);
                    } else {
                        alert("Erro ao atualizar");
                    }
                }
            });

        } else {
            alert("campo alterar data não pode ser vazio");
        }
    });
    
    function atualizarPagina(duplicata,prestacao,codcliente) {
            console.log('duplicata ='+duplicata+"<br>");
            console.log('prestação ='+prestacao+"<br>");
            console.log('codigo do cliente ='+codcliente+"<br>");
            
        $.ajax({
                url: '../classes/procurarDuplicata.php',
                method: 'post',
                data: {DUPLIC:duplicata,PREST:prestacao, CODCLI:codcliente},
                success: function(data) {
                   
                    $('.loadPG').html(data).fadeIn();

                // location.reload();
                $('#alertBalon').removeClass('fade');
                $('#alertBalon').addClass('show');
                setTimeout(function(){
                    $('#alertBalon').removeClass('show');
                $('#alertBalon').addClass('fade');
                },4000);

            }
        });
    }


    $('#searchduplicata').submit(function() {

        if (($('#codduplicata').val() != "") || ($('#codCliente').val() != "")) {

            $.ajax({
                url: '../classes/procurarDuplicata.php',
                method: 'post',
                data: $('#searchduplicata').serialize(),
                success: function(data) {
                   
                    $('.loadPG').html(data).fadeIn();
                    

                    //location.reload();
                    // $('#alertBalon').removeClass('fade');
                    // $('#alertBalon').addClass('show');

                }
            });
        } else {
            $('#alertBalon-erro').attr("style", 'display:inline; z-index:1');
            $('#alertBalon-erro').removeClass('alert-success');
            $('#alertBalon-erro').addClass('alert-danger');
            $('#txtAlert').append('preencha com o código duplicata ou código do cliente');

            setTimeout(function() {
                $('#alertBalon-erro').attr("style", 'display:none');
                $('#txtAlert').empty();
            }, 3000);

        }
        return false;
    });


    // $("#buttonSearch").click(function() {
    //     alert('clicado');
    //     let codDuplica = $('#codduplicata').val();
    //     let codCliente = $('#codCliente').val();

    //     // if (($('#codduplicata').val() != "") || ($('#codCliente').val() != "")) {
    //     //     console.log("if");
    //     //     $.ajax({
    //     //         url: '../classes/procurarDuplicata.php',
    //     //         method: 'post',
    //     //         data: $('#searchduplicata').serialize(),
    //     //         success: function(data) {
    //     //             console.log(data);
    //     //             // $('.loadPG').load("searchDuplicata.php");


    //     //             //location.reload();
    //     //             // $('#alertBalon').removeClass('fade');
    //     //             // $('#alertBalon').addClass('show');

    //     //         }
    //     //     });
    //     // } else {
    //     //     $('#alertBalon').removeClass('fade');
    //     //     $('#alertBalon').addClass('show');
    //     // }
    //     return false;
    // });







}); //ready