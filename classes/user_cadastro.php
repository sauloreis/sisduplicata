<?php

if (isset($_POST['token'])) {
    require_once "../ConOracle.php";

    $nome=isset($_POST['nome'])?filter_var($_POST['nome'],FILTER_SANITIZE_STRING):"";
    $username=isset($_POST['username'])?filter_var($_POST['username'],FILTER_SANITIZE_STRING):"";
    $email=isset($_POST['email'])?filter_var($_POST['email'],FILTER_SANITIZE_EMAIL):"";
    $password=isset($_POST['password'])?filter_var($_POST['password'],):"";
    $setor=isset($_POST['setor'])?filter_var($_POST['setor'],FILTER_SANITIZE_STRING):"";
    $nivel=isset($_POST['nivel'])?filter_var($_POST['nivel'],FILTER_SANITIZE_NUMBER_INT):"";
    $password=md5($password);

    $sql = "Insert into G4M_USER (ID,MATRICULA,NOME,LOGIN,EMAIL,SETOR,SENHA,DIRETORIA,NIVEIS_ACESSO) values ('1','1','Saulo Reis','Saulo.antao','saulo.antao@grupo4mares.com.br','TI','1234','estrategico','1'); ";
        $stid = oci_parse($link, $sql); 
      
        oci_execute($stid,OCI_COMMIT_ON_SUCCESS);

}else{
    header("location: index.php");
}