<?php

require_once "../ConOracle.php";


if(isset($_POST['CODCLI']) ){


    $duplicata =isset($_POST['DUPLIC'])?filter_var($_POST['DUPLIC'],FILTER_SANITIZE_NUMBER_INT):NULL;
    $prestacao =isset($_POST['PREST'])?filter_var($_POST['PREST'],FILTER_SANITIZE_NUMBER_INT):NULL;
    $codCliente=isset($_POST['CODCLI'])?filter_var($_POST['CODCLI'],FILTER_SANITIZE_NUMBER_INT):NULL;
    $DataPagamento = isset($_POST['alterardtaPagamento'])?$_POST['alterardtaPagamento']:0000-00-00;
    
    $date = new DateTime($DataPagamento);
    $dataPagamento = $date->format('d-m-Y');
  
    
    $sql = "update PCPREST  set DTPAG='$dataPagamento' Where DUPLIC = '$duplicata' and PREST= '$prestacao' and CODCLI='$codCliente'";
    
   
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

    
    


}