function valCheckBox(codClie, codDuplica, prestacao,value, codCob,dtVenc, valor, vpago) {
    let dataUsername = $('.sessionusername').attr('data-user');
    let dataUserId= $('.usuarioId').attr('data-id');
    let datahorasistema  =$('.datahorasistema').attr('data-horasis'); 
    let nomeIpMaquina  =$('.nome-ip-maquina').attr('data-nome-ip-maquina');  
    
    let checkbox = $("#checkbox" + value).val();

    let horaSistema =$('#datahorasistema');
    let duplicata = $('#DUPLIC');
    let presta = $('#PREST');
    let codCliente = $('#CODCLI');
    let cob = $('#codcob');
    let Venc= $('#dtvenc');    
    let val= $('#valor');
    let valpago= $('#vpago');
    let user =$('#usuarioNome');
    let maquina = $('#maquina');
    let dataPagamento = $("#dtaPagamento");
    
    let userId = $('#usuarioId'); 

    dataPagamento.val(checkbox) ;
    codCliente.val(codClie) ;
    duplicata.val(codDuplica);
    presta.val(prestacao);
    cob.val(codCob); 
    Venc.val(dtVenc) ;
    val.val(valor) ;
    valpago.val(vpago) ;
    user.val(dataUsername);
    userId.val(dataUserId);
    horaSistema.val(datahorasistema);
    maquina.val(nomeIpMaquina);
    

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


  

}); //ready