<?php

require_once "conexao.php";

class Duplicata
{
	

	public function searchDuplicata($post)
	{			
		if(isset($post['buttonSearch']) ){

			$duplicata =isset($post['duplicata'])?filter_var($post['duplicata'],FILTER_SANITIZE_NUMBER_INT):0;
			$prestacao =isset($post['prestacao'])?filter_var($post['prestacao'],FILTER_SANITIZE_NUMBER_INT):0;
			$codCliente=isset($post['codCliente'])?filter_var($post['codCliente'],FILTER_SANITIZE_NUMBER_INT):0;
			

			$con = new Con();
		    $link = $con->conectar();
		    $sql = "select * from PCPREST Where DUPLIC = '$duplicata' and PREST= '$prestacao' and CODCLI='$codCliente'";
		   

		    $res = mysqli_query($link, $sql);

		    if ($res) { 

		    	return $res;	        
		        
		      }
		}else{
			echo 'sem dados doido';
		}
	}

	public function  alterarDataPagamento($post){
		
		$duplicata =isset($post['DUPLIC'])?filter_var($post['DUPLIC'],FILTER_SANITIZE_NUMBER_INT):0;
		$prestacao =isset($post['PREST'])?filter_var($post['PREST'],FILTER_SANITIZE_NUMBER_INT):0;
		$codCliente=isset($post['CODCLI'])?filter_var($post['CODCLI'],FILTER_SANITIZE_NUMBER_INT):0;

		$DataPagamento = isset($post['alterardtaPagamento'])?$post['alterardtaPagamento']:0000-00-00;

		$con = new Con();
	    $link = $con->conectar();
	    $sql = "update PCPREST  set DTPAG='$DataPagamento' Where DUPLIC = '$duplicata' and PREST= '$prestacao' and CODCLI='$codCliente'";

	   

	    $res = mysqli_query($link, $sql);

	    if ($res) { 
	    	
	    	return $res;	        
	        
	      }else{
	      	echo ("erro ao atualizar");
	      }

		

	}
}


