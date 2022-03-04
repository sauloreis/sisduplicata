<?php

if (isset($_POST['token'])) {

    require_once("../config/conn.php");    

    $matricula= isset($_POST['matricula']) ? filter_var($_POST['matricula'],FILTER_SANITIZE_NUMBER_INT) : "";
    $nome     = isset($_POST['nome']) ? filter_var($_POST['nome'],FILTER_SANITIZE_SPECIAL_CHARS) : "";
    $username = isset($_POST['username']) ? filter_var($_POST['username'],FILTER_SANITIZE_SPECIAL_CHARS) : "";
    $email    = isset($_POST['email']) ? filter_var($_POST['email'],FILTER_SANITIZE_EMAIL) : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    $setor    = isset($_POST['setor']) ? filter_var($_POST['setor'],FILTER_SANITIZE_SPECIAL_CHARS) : "";
    $diretoria= isset($_POST['Diretoria']) ? filter_var($_POST['Diretoria'],FILTER_SANITIZE_NUMBER_INT) : "";

    $password=md5($password);

    switch ($diretoria){
        case '1':
            $diretoria =1;
            $nivelAcesso =1;
            break;
        case '2':
            $diretoria =2;
            $nivelAcesso =2;
            break;
        case '3':
            $diretoria =3;
            $nivelAcesso =3;
            break;
        default:
            $diretoria =4;
            $nivelAcesso =4;
            break;
    }


   
    //verificando se o usuário já existe
    $chekemail = checkEmailexist($email);
    $checkUser = checkUserExist($username);
    // $checkMatriculaExist=checkMatriculaExist($matricula);

    if ($chekemail == false && $checkUser == false ) {

        $sql = "Insert into g4m_user_producao (MATRICULA,NOME,LOGIN,EMAIL,SETOR,SENHA,DIRETORIA,NIVEIS_ACESSO)"; 
        $sql .= " values ('$matricula','$nome','$username','$email','$setor','$password','$diretoria', '$nivelAcesso')"; 
         
        $con = new ConOracle();
        $link = $con->conectar();
        $stid = oci_parse($link, $sql);   
      
        oci_execute($stid);
        // oci_commit($link);
        if ($nrows =oci_num_rows( $stid)) {
           
            echo " cadastrado com sucesso";

        }else{
            
            echo  " Erro ao cadastrar";    
        }
        oci_close($link); 
    }else{
        echo "O usuário ou email já existe ";
    }

    
}else{
    // header("location: index.php");
}

function checkEmailexist($emailUser){

    if ($emailUser != "") {
   
        $con = new ConOracle();
	    $link = $con->conectar();
        $sql = "SELECT EMAIL FROM g4m_user_producao where EMAIL= '$emailUser' ";
        $stid = oci_parse($link, $sql); 
      
        oci_execute($stid,OCI_COMMIT_ON_SUCCESS);      

       $res = oci_fetch_assoc($stid);
        return $res;
            
        oci_close($link); 
        
    }   
}

function checkUserExist($usuario){
    if ($usuario != "") {

        $con = new ConOracle();
	    $link = $con->conectar();
        $sql = "SELECT LOGIN FROM g4m_user_producao where LOGIN= '$usuario' ";
        $stid = oci_parse($link, $sql); 
      
        oci_execute($stid,OCI_COMMIT_ON_SUCCESS);
        $res = oci_fetch_assoc($stid);
        return $res;
        oci_close($link);        
    }

function checkMatriculaExist($matricula){
    if ($matricula != "") {

        $con = new ConOracle();
        $link = $con->conectar();
        $sql = "SELECT LOGIN FROM g4m_user_producao where MATRICULA= '$matricula' ";
        $stid = oci_parse($link, $sql); 
      
        oci_execute($stid,OCI_COMMIT_ON_SUCCESS);
        $res = oci_fetch_assoc($stid);
        return $res;
        oci_close($link);        
    }
    
}
}