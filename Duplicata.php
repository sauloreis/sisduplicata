<?php
// Class Duplicata 
// 

require_once "ConOracle.php";

class Duplicata
{
	

	public function searchDuplicata($post)
	{			


		if(isset($post['buttonSearch']) and !empty($post['duplicata']) || !empty($post['codCliente'])){

			$duplicata =isset($post['duplicata'])?filter_var($post['duplicata'],FILTER_SANITIZE_NUMBER_INT):NULL;
			$prestacao =isset($post['prestacao'])?filter_var($post['prestacao'],FILTER_SANITIZE_NUMBER_INT):NULL;
			$codCliente=isset($post['codCliente'])?filter_var($post['codCliente'],FILTER_SANITIZE_NUMBER_INT):NULL;
			if($duplicata != NULL || $codCliente != NULL){
				$sql = "select * from PCPREST Where DUPLIC='{$duplicata}' or CODCLI ='{$codCliente}'";
		  	
			    $res = $this->executeSql($sql);
			   

			    return $res;
			}else{
				$_SESSION['erro']['somenteNumber']='somente numero!';
			}

		    
		}else{

			$_SESSION['erro']['campoVazio']='Preencha pelo menos um campo CODCLIENTE ou DUPLICATA!';

		}
	}

	public function  alterarDataPagamento($post){
		
		$duplicata =isset($post['DUPLIC'])?filter_var($post['DUPLIC'],FILTER_SANITIZE_NUMBER_INT):NULL;
		$prestacao =isset($post['PREST'])?filter_var($post['PREST'],FILTER_SANITIZE_NUMBER_INT):NULL;
		$codCliente=isset($post['CODCLI'])?filter_var($post['CODCLI'],FILTER_SANITIZE_NUMBER_INT):NULL;
		$DataPagamento = isset($post['alterardtaPagamento'])?$post['alterardtaPagamento']:0000-00-00;

		
	    $sql = "update PCPREST  set DTPAG='$DataPagamento' Where DUPLIC = '$duplicata' and PREST= '$prestacao' and CODCLI='$codCliente'";
	    
	   	
	    $res = $this->executeSql($sql);

		    return $res;
	    

	}

	public function executeSql($sql){
			
		$con = new ConOracle();
	    $link = $con->conectar();
	    $stid = oci_parse($link, $sql);

	   
	    	oci_execute($stid);
	    	
	    		
	   	$nrows = oci_fetch_all($stid,$res);
			
	    	// var_dump($nrows);
	    	// echo'<pre>';
	    	// var_dump($res);
	    	// echo'</pre>';
			 
			 	

	    	 return $res;

	    	 oci_close($con); 				       
   	
	}
}


