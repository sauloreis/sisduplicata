<?php
require_once "../ConOracle.php";

if(isset($_POST['buttonSearch']) and !empty($_POST['duplicata']) || !empty($_POST['codCliente'])){

    $duplicata =isset($_POST['duplicata'])?filter_var($_POST['duplicata'],FILTER_SANITIZE_NUMBER_INT):NULL;
    $prestacao =isset($_POST['prestacao'])?filter_var($_POST['prestacao'],FILTER_SANITIZE_NUMBER_INT):NULL;
    $codCliente=isset($_POST['codCliente'])?filter_var($_POST['codCliente'],FILTER_SANITIZE_NUMBER_INT):NULL;
    if($duplicata != NULL || $codCliente != NULL){
        $sql = "select CODCLI,PREST,DUPLIC,VALOR,DTVENC,CODCOB,VPAGO,TXPERM,DTPAG,DTEMISSAO,OPERACAO,DTDESC,PERDESC";
        $sql.=",CODFILIAL,STATUS,CODUSUR from PCPREST Where DUPLIC='{$duplicata}' or codcli='{$codCliente}' ";
        
        $con = new ConOracle();
        $link = $con->conectar();
       $stid = oci_parse($link, $sql); 
       oci_execute($stid,OCI_COMMIT_ON_SUCCESS);
       

        return $stid;
    }else{
        $_SESSION['erro']['somenteNumber']='somente numero!';
    }

    
}else{

    $_SESSION['erro']['campoVazio']='Preencha pelo menos um campo CODCLIENTE ou DUPLICATA!';

}
