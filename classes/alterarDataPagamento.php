<?php
/*
*
*   conecta no banco de dados e  retorna o numero de linhas afetadas
*
*/


require_once("../config/ConOracle.php");
// acesso somente para que tiver atuorização
// if (!isset($_SESSION['usuarioId']) and !isset($_SESSION['usuarioEmail'])) {
//     $_SESSION['error']['notAuthorized'] = "faça o login ou crie uma conta";
// 		header("Location: ../index.php");
//         die;
// }

if(isset($_POST['CODCLI']) ){


    $duplicata =isset($_POST['DUPLIC'])?filter_var($_POST['DUPLIC'],FILTER_SANITIZE_NUMBER_INT):NULL;
    $prestacao =isset($_POST['PREST'])?filter_var($_POST['PREST'],FILTER_SANITIZE_NUMBER_INT):NULL;
    $codCliente=isset($_POST['CODCLI'])?filter_var($_POST['CODCLI'],FILTER_SANITIZE_NUMBER_INT):NULL;
    $DataPagamento = isset($_POST['alterardtaPagamento'])?$_POST['alterardtaPagamento']:0000-00-00;
    var_dump($DataPagamento);
    $date = date_create($DataPagamento);
    $dataPagamento = date_format($date,'Y/m/d');
    echo"<br>";
    var_dump($dataPagamento);
    
    
    $sql = "update PCPREST  set DTPAG= TO_DATE('$dataPagamento','YYYY-MM-DD') Where DUPLIC = '$duplicata' and PREST= '$prestacao' and CODCLI='$codCliente'";
    
   var_dump($sql);
    $con = new ConOracle();
	 $link = $con->conectar();
	$stid = oci_parse($link, $sql); 

	oci_execute($stid,OCI_COMMIT_ON_SUCCESS);	    	
	    		
	   	$nrows =oci_num_rows( $stid);
			
	    	if($nrows === 1 ){
                $_SESSION['nrowsAffcted'] = "Atualizado com sucesso";
                
                echo "Atualizado com sucesso";
            }else{
                $_SESSION['nrowsAffcted'] = "Erro ao atualizar os dados tente novamente";
            }
	    
	    	 oci_close($link); 

    
    


}else{
    echo('AterarDataPagamento fala : Não tem nada vindo dai doido!');
}