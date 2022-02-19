<?php 
    session_start();
    if(isset($_SESSION['niveisDeacesso'])){
        //var_dump($_SESSION['niveisDeacesso']);
        $nivelAcesso = isset($_SESSION['niveisDeacesso']) ? $_SESSION['niveisDeacesso'] : "";
    }

    if (!isset($_SESSION['usuarioId']) and !isset($_SESSION['usuarioEmail'])) {
            $_SESSION['error']['notAuthorized'] = "faça o login ou crie uma conta";
        		header("Location: ../index.php");
                die;
        }
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
                 
                  <a class="" href="index.php"><img src="../assets/img/logo-grupo4mares-85x28.png" alt=""></a>                  
                  
              </div>
              <div class=" col-md-2 close d-flex justify-content-center align-items-center ">
                      <i class="fa fa-times" aria-hidden="true"></i>
                  </div> 
                </div>

                <div class="row d-flex mt-5 justify-content-center">
                    <div class="menu-list col-md-10 d-flex ">
                        <ul class=" col-md-12 ">
                         <?php
                             if($nivelAcesso == 2 || $nivelAcesso == 1 )//estrategico
                                echo"<li id='duplicata' class='link-menu'>
                                        <i  class='fas fa-file-signature '></i>
                                        <a href='searchDuplicata'><span class='text-menu'>Duplicata</span>
                                        </a>
                                        <ul style='display:none;' class ='submenu'>
                                            <li>                                                
                                                <a href='searchDuplicata'>Duplicata
                                            </a>
                                            </li>
                                        </ul>
                                     </li>";
                        
                            
                             if($nivelAcesso == 3 || $nivelAcesso == 1 ) //comercial
                                 echo"<li class='link-menu'>
                                         <i class='fas fa-cogs'></i>
                                         <a href='comercial'><span class='text-menu '>comercial</span>
                                         </a>
                                       </li>";
                           
                            
                              if($nivelAcesso == 4 || $nivelAcesso ==1) //operacional
                                echo" <li class='link-menu'>
                                        <i class='fas fa-user-friends'></i>
                                        <a href='operacional'><span class='text-menu '>operacional</span>
                                        </a>
                                       </li>";
                            
                            
                              if($nivelAcesso == 1)
                                 echo"<li class='link-menu'>
                                        <i class='fas fa-user-friends'></i>
                                        <a href='administrativo'><span class='text-menu '>Admistrador</span>
                                        </a>
                                      </li>";
                            ?>
                        </ul>
                    </div>
                    
                </div>
                <div class="row">
                    <div class=" power col-md-12 d-flex justify-content-end align-items-center"> 
                    <a href="sair"><i class="fa fa-power-off"></i></a>
                 </div>
                </div>
                
            </div>
                <div class="bar ">
                     <i class=" fa fa-bars" ></i>            
                </div>
            <div class="box-content col-md-9">
                <div class="row">
                    <div class="menu-top  col-md-12 d-flex justify-content-end align-items-center"> 
                    <span>Bem vindo <?php echo $_SESSION['usuarioNome'];?></span>
                    <div class="icon-user"><i class="fas fa-user-circle"></i>
                    </div>
                    </div>
                </div>
                    <div class="row col-md-12">
                        <div class="container-content mt-4 col-md-12">

                           <div class="container mt=4">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                                        <li class="breadcrumb-item active" id='breadcrumb-item-active'aria-current="page"></li>
                                    </ol>
                                </nav>
                            </div>
 


                            <div  class="loadPG col-md-12">



                                <?php 
                                echo "<div class='boxescontent'>";
                                    
                        if($nivelAcesso == 2 || $nivelAcesso == 1 ){//estrategico  
                                 echo " <div class='caixa'>";
                                        
                                       
                                            echo" <div class='link-menu-box'>             
                                                    <a href='searchDuplicata'>
                                                        <i  class='fas fa-file-signature '></i>
                                                        <span >Duplicata</span>
                                                    </a>
                                                  </div>
                                                ";
                                        
                                echo"</div>";
                            }
                        if($nivelAcesso == 3 || $nivelAcesso == 1 ){//comercial
                               echo"<div class='caixa'>";
                                        
                                       
                                        echo" <div class='link-menu-box'>
                                                <a href='comercial'>
                                                     <i class='fas fa-cogs'></i>
                                                    <span >comercial</span>
                                                </a>
                                              </div>
                                            ";
                                        
                               echo" </div>";
                           }
                        if($nivelAcesso == 4 || $nivelAcesso == 1 ){//operacional
                              echo" <div class='caixa' >";
                                        echo" <div class='link-menu-box'>
                                                <a href='operacional'>
                                                    <i class='fas fa-user-friends'></i>
                                                    <span >operacional</span>
                                                </a>
                                              </div>
                                            ";
                                        
                              echo" </div>";
                          }
                            if($nivelAcesso == 1 ){//Admistrador
                              echo"<div class='caixa'>";  
                                        echo" <div class='link-menu-box'>
                                                <a href='administrativo'>
                                                     <i class='fas fa-user-friends'></i>
                                                    <span >Admistrador</span>
                                                </a>
                                              </div>
                                            ";
                                        
                                echo" </div>";
                            }
                         echo" </div>"; 
                         ?>      
                            </div>
                        </div>
                    </div>
            
        </div>
    </div>






    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <script src="myscript.js"></script>
    <script src="../assets/js/script.js"></script>
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