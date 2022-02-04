<?php
session_start();

//informção do head
$title = 'Pesquisar Duplicata';
require_once('includes/head.php');

require_once ('Duplicata.php');

if (isset($_SESSION['user'])) {

    $_SESSION['user']='helenilson';
    
    $usuario = $_SESSION['user'];
    

    
    if (isset($_POST['buttonSearch'])){   	

    	$duplicata = new Duplicata();
    	$duplicata = $duplicata->searchDuplicata($_POST);    	

    	$res = $duplicata;

	}

	if(isset($_POST['salvarData']) ){

    	
    	$duplicata = new Duplicata();
    	$duplicata = $duplicata->alterarDataPagamento($_POST);

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

    if (isset($res)) { 
    	

    	
        foreach($res as $col ) {
				
			echo "<pre>";
        	var_dump($col);
        	echo "</pre>";
        	echo"<tr>"; //<!-- inicio da linha da tabela       -->
        	echo "
        	 	<td><div class='form-check'>
  					<input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
  					<label class='form-check-label' for='flexCheckDefault'>
    				
  					</label>
				</div>
				</td>";
					//echo "<td>{$value}</td>";
        	 foreach ($col as $key => $value) {        	 	

        	 	echo "<td>{$key}=>{$value}</td>";

        	 	//echo $value;
			//echo "<br>";

        	  }
        	  

				
			echo"</tr>";//<!-- fim da linha da tabela       -->		

	
        } // fechamento do while

   
        
    }else{
    	//header(location: index.php);

    } //fechamento do if

    // inclui o formulario para atualizar a data 
        require_once("includes/formupdatedata.php");

} else {
     //header("location: index.php");
         var_dump($_SESSION);
    die;

 }

