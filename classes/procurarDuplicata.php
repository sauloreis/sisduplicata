<?php
session_start();
require_once "../ConOracle.php";

if (!isset($_SESSION['usuarioId']) and !isset($_SESSION['usuarioEmail'])) {
    $_SESSION['error']['notAuthorized'] = "faça o login ou crie uma conta";
		header("Location: ../index.php");
        die;
}
if(!empty($_POST['DUPLIC']) || !empty($_POST['CODCLI'])){

    $duplicata =isset($_POST['DUPLIC'])?filter_var($_POST['DUPLIC'],FILTER_SANITIZE_NUMBER_INT):NULL;
    $prestacao =isset($_POST['PREST'])?filter_var($_POST['PREST'],FILTER_SANITIZE_NUMBER_INT):NULL;
    $codCliente=isset($_POST['CODCLI'])?filter_var($_POST['CODCLI'],FILTER_SANITIZE_NUMBER_INT):NULL;
    if($duplicata != NULL || $codCliente != NULL){
        $sql = "select CODCLI,PREST,DUPLIC,VALOR,DTVENC,CODCOB,VPAGO,TXPERM,DTPAG,DTEMISSAO,OPERACAO,DTDESC,PERDESC";
        $sql.=",CODFILIAL,STATUS,CODUSUR from PCPREST Where DUPLIC='{$duplicata}' or codcli='{$codCliente}' ";
        
        $con = new ConOracle();
        $link = $con->conectar();
       $stid = oci_parse($link, $sql); 
       oci_execute($stid,OCI_COMMIT_ON_SUCCESS);
       $res  = $stid;
        
        return $res;
    }else{
        $_SESSION['error']['somenteNumber']='somente numero!';
    }

    
}else{

    $_SESSION['error']['campoVazio']='Preencha pelo menos um campo CODCLIENTE ou DUPLICATA!';

}
