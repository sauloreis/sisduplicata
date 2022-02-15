$(document).ready(function() {

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
                    if ($('#user_exist').hide()) {
                        $('#user_exist').show()
                    }
                    setTimeout(function() {
                        $('#user_exist').hide()
                    }, 2000);

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
                    if ($('#email_exist').hide()) {
                        $('#email_exist').show()
                    }
                    setTimeout(function() {
                        $('#email_exist').hide()
                    }, 2000);

                }

            });
        }
    });

    //cadastrar
    $('input').blur(function() {
        if ($(this).val() == "") {
            $(this).css({ "border": "1px solid #F00", "padding": "2px" });
        } else {
            $(this).css({ "border": "1px solid #27ae60", "padding": "2px" });
        }
    });
    $('#cadastrar').click(function(event) {
        let cont = 0;
        $('#formularioCadastro input').each(function() {
            if ($(this).val() == "") {
                $(this).css({ "border": "1px solid #F00", "padding": "2px" });
                cont++;
            }
            if (cont == 0) {
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
            } else {
                $('#formularioCadastro').submit(function() {
                    return false;
                });
            }
        });




    });

    // carregando as paginas
    $("#duplicata").click(function() {
        console.log("Duplicata clicado");
        $('.loadPG').load("../searchDuplicata.php");
        // $('.container-caixa').hide();
        return false;

    });







}); //ready