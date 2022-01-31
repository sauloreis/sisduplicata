<?php

	
//Criar a conexao

/**
 * 
 */
class Con
{

	private $servidor = "localhost";
	private $usuario = "root";
	private $senha = "8211";
	private $dbname = "pcprest";
		
	
	public function conectar()
	{
		

		$conn = mysqli_connect(
			$this->servidor, 
			$this->usuario, 
			$this->senha, 
			$this->dbname
		);
		
		if(!$conn){
			
			die("Falha na conexao: " . mysqli_connect_error());
		}

		return $conn;
	}
}	
	
