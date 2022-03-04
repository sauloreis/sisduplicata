<?php
session_start();



$user = $_SESSION['usuarioNome'];

//informção do head
$title = 'Pesquisar Duplicata';
// require_once('includes/head.php');
require_once ('Duplicata.php');




if (isset($_SESSION['usuarioId']) and isset($_SESSION['usuarioEmail'])) {

    
    if (isset($_POST['buttonSearch'])){   	

    	$duplicata = new Duplicata();
    	$duplicata = $duplicata->searchDuplicata($_POST);    	

    	$res = $duplicata;		

	}



	//chama o formulario de procura da duplicata  em html e o inicio da tabela<table> 
	require_once("includes/formsearchduplicata.php");

	//limpado campos de erro
	if(isset($_SESSION['error'])){
		
		unset($_SESSION['error']['campoVazio']);
		unset($_SESSION['error']['somenteNumber']);
		unset($_SESSION['error']['naoEcontrado']);
		
	}    
	//se existir um resultado da pesquisa  entra no if e percorre cada linha da pesquisa 
	
    if (isset($stid)) { 
    	
		
		while($r = oci_fetch_array($stid,OCI_RETURN_NULLS+OCI_ASSOC) ){
			
			$cod = "{$r['CODCLI']}{$r['DUPLIC']}{$r['PREST']}";
			$codCli =$r['CODCLI'] ;
			$duplicata= $r['DUPLIC'];
			$prestacao =$r['PREST'] ;
			$dados = array(
				$codCob =>$r['CODCOB'] ,
				$dtVenc => $r['DTVENC'],
				$valor => $r['VALOR'],
				$vpago => $r['VPAGO'],
			);
			


			$dataPaga = "{$r['DTPAG']}";
			
        	echo"<tr>"; //<!-- inicio da linha da tabela       -->
        	echo "
        	 	<td><div class='form-check'>
  					<input class='form-check-input' type='checkbox' value='{$dataPaga}' id='checkbox{$cod}'
					   onclick='valCheckBox($codCli,$duplicata,$prestacao,$cod,$dados)'>
  					<label class='form-check-label' for='checkbox{$cod}'>
    				
  					</label>
				</div>
				</td>";
					
        	 foreach ($r as $key => $value) {        	 	
				
        	 	echo "<td>
				  <label class='form-check-label' for='checkbox{$cod}'>
				 {$value}
				 </td>";
				        	 	

        	  }
        	  

				
			echo"</tr>";//<!-- fim da linha da tabela       -->		

	
        } // fechamento do while

   
        
    }else{
    	//header(location: index.php);

    } //fechamento do if

	

    // inclui o formulario para atualizar a data 
        require_once("includes/formupdatedata.php");

} else {
		$_SESSION['error']['notAuthorized']= "Crie uma conta ou faça o login";
     	header("location: index.php");        
    die;

 }

 
?>
<script src="js/form.js"></script>

