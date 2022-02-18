$(document).ready(function () {

    
    userNameExist();
    userEmailExist();
    registerUser();
    checkEmptyImput();
    loadPage();

    //vericando se o username ja existe cadastrado
    function userNameExist() {
        $('#username').blur(function (event) {

            if ($('#username').val().length > 0) {
                $.ajax({
                    url: 'classes/usuarios.php',
                    method: 'POST',
                    data: $('#username,#token').serialize(),

                    success: function (data) {
                        $('#username').css({ "border": "1px solid #F00", "padding": "2px" });
                        $('#user_exist').html(data);
                        if ($('#user_exist').hide()) {
                            $('#user_exist').show()
                        }
                        setTimeout(function () {
                            $('#user_exist').hide()
                        }, 2000);

                    }
                });
            }
        });
    }
    //verificar se o email ja existi
    function userEmailExist() {

        $('#email').blur(function (event) {

            if ($('#email').val().length > 0) {

                $.ajax({
                    url: 'classes/usuarios.php',
                    method: 'POST',
                    data: $('#email,#token').serialize(),
                    success: function (data) {
                        $('#email_exist').html(data);
                        $('#email').css({ "border": "1px solid #F00", "padding": "2px" });
                        if ($('#email_exist').hide()) {
                            $('#email_exist').show()
                        }
                        setTimeout(function () {
                            $('#email_exist').hide()
                        }, 2000);

                    }

                });
            }
        });
    }

    // função que verificar se o input esta vazio

    function checkEmptyImput() {
        //
        $('input').blur(function () {
            if ($(this).val() == "") {
                $(this).css({ "border": "1px solid #F00", "padding": "2px" });
            } else {
                $(this).css({ "border": "1px solid #27ae60", "padding": "2px" });
            }
        });
    }
    // função que cadastra usuarios
    function registerUser() {
        $('#cadastrar').click(function (event) {
            let cont = 0;
            $('#formularioCadastro input').each(function () {
                if ($(this).val() == "") {
                    $(this).css({ "border": "1px solid #F00", "padding": "2px" });
                    cont++;
                }
            });
            if (cont == 0) {
                $.ajax({
                    url: 'classes/user_cadastro.php',
                    method: 'POST',
                    data: $('#formularioCadastro').serialize(),
                    success: function (data) {
                        cleanForm();
                        $('#txtAlert').html(data);
                        if ($('#alertBalon-erro').hide()) {
                            $('#alertBalon-erro').show()
                        }
                        setTimeout(function() {
                            $('#alertBalon-erro').hide()
                        }, 3000);

                        setTimeout(function(){
                            window.location.href = 'login';
                        },5000);

                    }

                });

                //$('#formularioCadastro').submit(); 
            } else {
                $('#formularioCadastro').submit(function () {
                    return false;
                });
            }




            return false;
        });
    }

    //limpando formulario 
    function cleanForm(){
        $('#formularioCadastro').each(function(){
            this.reset();
        });
    }
    // carregando as paginas

    function loadPage(){
        $("#duplicata").click(function () {
            console.log("Duplicata clicado");
            $('.loadPG').load("../searchDuplicata.php");
            // $('.container-caixa').hide();
            return false;
    
        });
    
    }

}); //ready