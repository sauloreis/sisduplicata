<?php 
    session_start();
    $_SESSION['usuario']='helenilson';
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="menu col-md-3 ">
                <div class="row menu-main-topo">
                    <div class="logo col-md-10  d-flex justify-content-center align-items-center ">                 
                 
                  <a class="" href="index.php"><img src="../imagens/logo-grupo4mares-85x28.png" alt=""></a>                  
                  
              </div>
              <div class=" col-md-2 close d-flex justify-content-center align-items-center ">
                      <i class="fa fa-times" aria-hidden="true"></i>
                  </div> 
                </div>

                <div class="row d-flex mt-5 justify-content-center">
                    <div class="menu-list col-md-10 d-flex ">
                        <ul class=" col-md-12 ">
                            <li id="duplicata"><i  class="fas fa-file-signature"></i></i><a href="#"><span class="text-menu">Duplicata</span></a></li>
                            <li><i class="fas fa-cogs"></i><a href="#"><span class="text-menu">Serviços</span></a></li>
                            <li><i class="fas fa-user-friends"></i></i><a href="#"><span class="text-menu">Usuarios</span></a></li>
                        </ul>
                    </div>
                    
                </div>
                <div class="row">
                    <div class=" power col-md-12 d-flex justify-content-end align-items-center"> 
                    <a href="/sair"><i class="fa fa-power-off"></i></a>
                 </div>
                </div>
                
            </div>
                <div class="bar ">
                     <i class=" fa fa-bars" ></i>            
                </div>
            <div class="box-content col-md-9">
                <div class="row">
                    <div class="menu-top  col-md-12 d-flex justify-content-end align-items-center"> 
                    <span>Bem vindo <?php echo $_SESSION['usuario'];?></span>
                    <div class="icon-user"><i class="fas fa-user-circle"></i>
                    </div>
                    </div>
                </div>
                    <div class="row col-md-12">
                        <div class="container-content mt-4 col-md-12">   
                            <div class="loadPG col-md-12">

                            </div>
                     </div>
            </div>
            
        </div>
    </div>






    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="../js/jquery-3.6.0.min.js"></script>

    <script src="myscript.js"></script>
    <script src="../js/script.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>