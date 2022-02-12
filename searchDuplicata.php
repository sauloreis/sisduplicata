<?php
session_start();

//informção do head
$title = 'Pesquisar Duplicata';

require_once ('Duplicata.php');

//usuario de teste 
$_SESSION['usuarioId']=1;
$_SESSION['usuarioEmail']='helenilson';

if (isset($_SESSION['usuarioId']) and isset($_SESSION['usuarioEmail'])) {

    
    if (isset($_POST['buttonSearch'])){   	

    	$duplicata = new Duplicata();
    	$duplicata = $duplicata->searchDuplicata($_POST);    	

    	$res = $duplicata;

		

	}

	

	//chama o formulario que procura a duplicata em html e o inicio da tabela 
	require_once("includes/formsearchduplicata.php");

	//limpado campos de erro
	if(isset($_SESSION['erro'])){
		
		unset($_SESSION['erro']['campoVazio']);
		unset($_SESSION['erro']['somenteNumber']);
		unset($_SESSION['erro']['naoEcontrado']);
		
	}    
	var_dump($res);
    if (isset($res)) { 
    	
		
		while($r = oci_fetch_array($res,OCI_RETURN_NULLS+OCI_ASSOC) ){
			
			$cod = "{$r['CODCLI']}{$r['DUPLIC']}{$r['PREST']}";
			$codCli =$r['CODCLI'] ;
			$duplicata= $r['DUPLIC'];
			$prestacao =$r['PREST'] ;
			$dataPaga = "{$r['DTPAG']}";
			
        	echo"<tr>"; //<!-- inicio da linha da tabela       -->
        	echo "
        	 	<td><div class='form-check'>
  					<input class='form-check-input' type='checkbox' value='{$dataPaga}' id='checkbox{$cod}'
					   onclick='valCheckBox($codCli,$duplicata,$prestacao,$cod)'>
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
		$_SESSION['msgUserNotAutorized']= "Crie uma conta ou faça o login";
     header("location: index.php");
        
    die;

 }



