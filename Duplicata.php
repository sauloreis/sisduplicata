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
				if($duplicata != '' && $codCliente != '' && $prestacao != ""){
					$sql = "select CODCLI,PREST,DUPLIC,VALOR,DTVENC,CODCOB,VPAGO,TXPERM,DTPAG,DTEMISSAO,OPERACAO,DTDESC,PERDESC";
					$sql.=",CODFILIAL,STATUS,CODUSUR from PCPREST Where DUPLIC='{$duplicata}' and codcli='{$codCliente}' and PREST =$prestacao ";
				}elseif ($duplicata != '' && $prestacao != "" ){
					$sql = "select CODCLI,PREST,DUPLIC,VALOR,DTVENC,CODCOB,VPAGO,TXPERM,DTPAG,DTEMISSAO,OPERACAO,DTDESC,PERDESC";
					$sql.=",CODFILIAL,STATUS,CODUSUR from PCPREST Where DUPLIC='{$duplicata}'  and PREST =$prestacao ";
				}elseif ($codCliente != '' && $prestacao != "" ){
					$sql = "select CODCLI,PREST,DUPLIC,VALOR,DTVENC,CODCOB,VPAGO,TXPERM,DTPAG,DTEMISSAO,OPERACAO,DTDESC,PERDESC";
					$sql.=",CODFILIAL,STATUS,CODUSUR from PCPREST Where codcli='{$codCliente}' and PREST =$prestacao ";
				}else{
					$sql = "select CODCLI,PREST,DUPLIC,VALOR,DTVENC,CODCOB,VPAGO,TXPERM,DTPAG,DTEMISSAO,OPERACAO,DTDESC,PERDESC";
					$sql.=",CODFILIAL,STATUS,CODUSUR from PCPREST Where DUPLIC='{$duplicata}' or codcli='{$codCliente}'  ";
				}


				
				
				
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
		
		$date = new DateTime($DataPagamento);
		$dataPagamento = $date->format('d-m-Y');
		
	    $sql = "update PCPREST  set DTPAG='$dataPagamento' Where DUPLIC = '$duplicata' and PREST= '$prestacao' and CODCLI='$codCliente'";
	    
	    $res = $this->executeSql($sql);

		    return $res;
			return $duplicata;
			return $codCliente;

	}

	public function executeSql($sql){
		//$query ="SELECT COUNT(*) AS NUMBER_OF_ROWS FROM  ($sql)";	
		//var_dump($query);
		$con = new ConOracle();
	    $link = $con->conectar();
	    $stid = oci_parse($link, $sql);
		//oci_define_by_name($stid, 'NUMBER_OF_ROWS', $number_of_rows);
	   
	    	oci_execute($stid,OCI_COMMIT_ON_SUCCESS);
			
			//var_dump($number_of_rows);

			//var_dump($stid);
	    	
	    		
	   //	$nrows = oci_fetch_all($stid,$res);
			
	    	//var_dump($stid);
	    	// echo'<pre>';
	    	// var_dump($res);
	    	// echo'</pre>';
			 
			 	
			
	    	 return $stid;

	    	 oci_close($con); 				       
   	
	}
}


