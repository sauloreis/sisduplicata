<?php
	session_start();	
	//Incluindo a conexão com banco de dados
	require_once("ConOracle.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario =  $_POST['email']; //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha =  $_POST['senha'];
		//$senha = md5($senha);
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$sql = "SELECT * FROM G4M_USER WHERE email = '$usuario' and senha = '$senha' ";
		$con = new ConOracle();
	    $link = $con->conectar();
	    $stid = oci_parse($link, $sql);

	   
	    	oci_execute($stid);
		while ($resultado = oci_fetch_array($stid,OCI_RETURN_NULLS+OCI_ASSOC) ){
		foreach($resultado as $key => $value){
			$_SESSION['usuarioId'] = $resultado['ID'];
			$_SESSION['usuarioNome'] = $resultado['NOME'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['NIVEIS_ACESSO'];
			$_SESSION['usuarioEmail'] = $resultado['EMAIL'];
		}
			
		}
		

		
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			//$_SESSION['usuarioId'] = $resultado['id'];
			//$_SESSION['usuarioNome'] = $resultado['nome'];
			//$_SESSION['usuarioNiveisAcessoId'] = $resultado['NIVEIS_ACESSO'];
			//$_SESSION['usuarioEmail'] = $resultado['email'];
			if($_SESSION['usuarioNiveisAcessoId'] == 1){
				echo('niveis_acesso');
				header("Location: searchduplicata.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
				echo('niveis_acesso 2');
				header("Location: colaborador.php");
			}else{
				echo('niveis_acesso 3');
				//header("Location: cliente.php");
				var_dump($_SESSION);
			}
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: index.php");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: index.php");
	}
?>