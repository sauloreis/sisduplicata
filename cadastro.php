<?php 
    session_start();


    $erro_msg_campos_vazio = isset($_SESSION['erro_preencha_campos']) ? $_SESSION['erro_preencha_campos'] : "";
    $erro_msg_user_no_exist = isset($_SESSION['erro_usuario_no_exist']) ? $_SESSION['erro_usuario_no_exist'] : "";
    $token = hash('sha512', rand(100, 1000));
    $_SESSION['token'] = $token;

    
    // title
    $title = 'Cadastrar-se';
    require_once("includes/head.php");
    
   
?>

<div class="container">
    <div class="d-flex mt-3 justify-content-center ">
        <form class="col-sm-6 border p-3 rounded  " id="formularioCadastro">

        <h4 class="form-signin-heading p-4 d-flex justify-content-center">Cadastrar-se</h4>
        
            
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
            </div>
             
            <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                <div id="user_exist"></div>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                 <input type="email" class="form-control" name="email"id="email">
                 <div id="email_exist" ></div>    
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" name="password"id="inputPassword4">
                </div>
            </div>
           
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="setor">Setor</label>
                <input type="text" class="form-control" id="setor" name="setor">
                </div>
                <div class="form-group col-md-4">
                <label for="inputState">nivel</label>
                <select id="inputState" class="form-control" name="nivel">
                    <option selected>Escolha</option>
                    <option value='1'>nivel1</option>
                    <option value='2'>nivel2</option>
                    <option value='3'>nivel3</option>
                </select>
                </div>
                
            </div>
            <?php
                            if ($erro_msg_user_no_exist != "") {
                                echo "<div class='alert alert-danger my-2' role='alert'> <small>";
                                    echo $erro_msg_user_no_exist;
                                echo "</smal></div>";
                                unset($_SESSION['erro_usuario_no_exist']);
                            }
                            if ($erro_msg_campos_vazio != "") {

                                echo "<div class='alert alert-danger my-2' role='alert'> <small>";
                                echo $erro_msg_campos_vazio;

                                echo "</smal></div>";
                                unset($_SESSION['erro_preencha_campos']);
                            }
                ?>
             <input type="hidden" value="<?=$_SESSION['token']?>" name="token" id="token">
            <div class="d-flex d-flex justify-content-center">

            <button class="btn btn-primary" id="cadastrar">Sign in</button>
            <p class="d-flex ml-2 mt-3  align-items-center ">ou</p>
			<a class="d-flex ml-2  align-items-center " href="index.php"  >Faça login</a>

            </div>
           
        </form>
     </div>
</div>