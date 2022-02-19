<?php


// acesso somente para que tiver atuorização
// if (!isset($_SESSION['usuarioId']) and !isset($_SESSION['usuarioEmail'])) {
//     $_SESSION['error']['notAuthorized'] = "faça o login ou crie uma conta";
// 		header("Location: ../index.php");
//         die;
// }


if (isset($_POST['token'])) {
    require_once("../config/conn.php");

  //  Error_reporting(0);

    $emailUser = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL): "";
    $usuario = isset($_POST['username']) ? filter_var($_POST['username'], FILTER_SANITIZE_STRING): "";
    $matricula =isset($_POST['matricula']) ? filter_var($_POST['matricula'], FILTER_SANITIZE_NUMBER_INT): "";

     $con = new ConOracle();
	 $link = $con->conectar();
	

    if ($emailUser != "") {

        $sql = "SELECT EMAIL FROM g4m_user_producao where EMAIL= '$emailUser' ";
        $stid = oci_parse($link, $sql); 
      
        oci_execute($stid,OCI_COMMIT_ON_SUCCESS);
        
        
        

            if ($email =  oci_fetch_assoc($stid)) {
                echo "<div class='alert alert-danger my-2' role='alert'>";
                echo " e-mail já cadastrado";
                echo "</div>";
                
            }else{
               echo"<div class='email-disponivel'></div>";
               
            }
        
    }

    if ($usuario != "") {

        $sql = "SELECT LOGIN FROM g4m_user_producao where LOGIN= '$usuario' ";
        $stid = oci_parse($link, $sql); 
      
        oci_execute($stid,OCI_COMMIT_ON_SUCCESS);

        if ($email =  oci_fetch_assoc($stid)) {
            echo "<div class='alert alert-danger my-2' role='alert'>";
            echo " Username já cadastrado";
            echo "</div>";
        } else {
           echo"<div class='username-diponivel'></div>";
        }
    }

    //matricula

    if ($matricula != "") {

        $sql = "SELECT LOGIN FROM g4m_user_producao where MATRICULA= '$matricula' ";
        $stid = oci_parse($link, $sql); 
      
        oci_execute($stid,OCI_COMMIT_ON_SUCCESS);

        if ($email =  oci_fetch_assoc($stid)) {
            echo "<div class='alert alert-danger my-2' role='alert'>";
            echo " Matricula já existe";
            echo "</div>";
        }else{
            echo"<div class=' matricula'></div>";
        } 
    }
   
     oci_close($link); 

} else {

    header('location: index.php');
}


    
   
	    	
    
    


