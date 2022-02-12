

function valCheckBox(codClie,codDuplica,prestacao,value){
    
    let checkbox = document.querySelector("#checkbox"+ value).value;   
    let dataPagamento = document.querySelector("#dtaPagamento");
    dataPagamento.value = checkbox;

    let codCliente = document.querySelector("[name='CODCLI']");
    codCliente.value =codClie ;
    let duplicata = document.querySelector("[name='DUPLIC']");
    duplicata.value =codDuplica ;
    let presta = document.querySelector("[name='PREST']");
    presta.value =prestacao ;
    

}

$(document).ready(function(){
    // atualiza a data pagamento da duplicta
    $("#salvarData").click(function(){
        if($('#alterardtaPagamento').val().length > 0){           
            
            $.ajax({
                url:'classes/alterarDataPagamento.php',
                method:'post',
                data: $('#atualizarData').serialize(),                  
                success: function(data){
                   if(data){                  
                       atualizarPagina();
                   }else{
                       alert("Erro ao atualizar");
                   }
                }
            });
        }else{
            let alert =$('#alertBalon');
            alert.removeClass('alert-success');
            alert.addClass('alert-danger');
            alert.removeClass('fade');
            alert.addClass('show');
            setTimeout(function(){
                alert.hide();
            },3000);
            $("#txtAlert").text("campo alterar data não pode ser vazio");
            alert.css({"top":"2vh",
                       "left":"20vw"
                    });
           $("#alterardtaPagamento").css("border","1px solid red");
        }
    });
    //atualiza a pagina da duplicata
    function atualizarPagina(){
        
        $.ajax({
            url:'classes/procurarDuplicata.php',
            method:'post',
            data:$('#atualizarData').serialize(),
            success: function(data){           
 
                location.reload();

                $('#alertBalon').removeClass('fade');
                $('#alertBalon').addClass('show');
                setTimeout( function(){
                    $('#alertBalon').hide();
                },3000);
                
                
            }
        });
    }

    //vericando se o username ja existe cadastrado
  
        $('#username').blur(function(event) {
           
            if ($('#username').val().length > 0) {
                $.ajax({
                    url: 'classes/usuarios.php',
                    method: 'POST',
                    // data: $('#username').serialize(),
                    data: $('#username,#token').serialize(),

                    success: function(data) {
                        $('#user_exist').html(data);
                        if($('#user_exist').hide()){
                            $('#user_exist').show()
                        }
                        setTimeout(function(){
                            $('#user_exist').hide()
                        },2000);
                       
                    }
                });
            }
        });
        //verificar se o email ja existi
        $('#email').blur(function(event) {

            if ($('#email').val().length > 0) {

                $.ajax({
                    url: 'classes/usuarios.php',
                    method: 'POST',
                    data: $('#email,#token').serialize(),
                    success: function(data) {
                        $('#email_exist').html(data);
                        if($('#email_exist').hide()){
                            $('#email_exist').show()
                        }
                        setTimeout(function(){
                            $('#email_exist').hide()
                        },2000);
                        
                    }

                });
            }
        });

         //cadastrar
         $('input').blur(function(){
             if($(this).val() == ""){
                $(this).css({"border" : "1px solid #F00", "padding": "2px"});
             }else{
                $(this).css({"border" : "1px solid #27ae60", "padding": "2px"});
             }
         });
         $('#cadastrar').click(function(event) {
             let cont = 0
            $('#formularioCadastro input').each(function(){
                if($(this).val() == ""){
                    $(this).css({"border" : "1px solid #F00", "padding": "2px"});
                    cont++;
                }
                if(cont == 0){
                    $.ajax({
                        url: 'classes/user_cadastro.php',
                        method: 'POST',
                        data: $('#formularioCadastro').serialize(),
                        success: function(data) {
                            alert(data);
                            // location.reload();
                           

                        }
    
                    });

                   //$('#formularioCadastro').submit(); 
                }else{
                    $('#formularioCadastro').submit(function(){
                        return false;
                    }); 
                }
            });
            

               
            
        });
  
    

});//ready



