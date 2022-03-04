<?php
	session_start();	

	//O campo usuário e senha preenchido entra no if para validar
	if($_POST['email']!='' and $_POST['senha']!=''){
		$usuario =  $_POST['email']; //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha =  $_POST['senha'];
		$senha = md5($senha);
		
		//Incluindo a conexão com banco de dados
		require_once("config/conn.php");	
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$sql = "SELECT * FROM g4m_user_producao WHERE email = '$usuario' and senha = '$senha' ";
		$con = new ConOracle();
	    $link = $con->conectar();
	    $stid = oci_parse($link, $sql);

	   
	    oci_execute($stid);
  			
		while ($resultado = oci_fetch_array($stid,OCI_RETURN_NULLS+OCI_ASSOC) ){
			foreach($resultado as $key => $value){
				$usuarioId = $resultado['ID'];
				$usuarioNome = $resultado['NOME'];
				$niveisDeacesso = $resultado['NIVEIS_ACESSO'];
				$usuarioEmail = $resultado['EMAIL'];
				$password = $resultado['SENHA'];
			}
			
		}
		

		
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if($usuarioEmail === $usuario){
			if($password === $senha ){
				$_SESSION['usuarioId'] = $usuarioId;
				$_SESSION['usuarioNome'] = $usuarioNome;
				$_SESSION['niveisDeacesso'] = $niveisDeacesso;
				$_SESSION['usuarioEmail'] = $usuarioEmail;

				header("location: admin");
				

			}else{
				$_SESSION['error']['loginErro'] = "Usuário ou senha Inválido";
				header("Location: index.php");
			}
			
		
		}else{
			//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
			//redireciona o usuario para a página de login	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['error']['loginErro'] = "Usuário ou senha Inválido";
			header("Location: index.php");

			
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['error']['campvazio'] = "Todos os campos devem ser preechidos";
		header("Location: index.php");
		
	}
?>