<?php

//oci_connect(usuario, senha, banco)

class ConOracle
{
	private $ora_user='TESTE';
	private $ora_senha='testefourmares';
	private $ora_bd ="	(DESCRIPTION =
	  (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.0.222)(PORT = 1521))
	  (CONNECT_DATA =
		(SERVER = DEDICATED)
	   (SID= DBTESTE)
	  )
	)";
	public function conectar(){

		$oraConexao = oci_connect($this->ora_user, $this->ora_senha, $this->ora_bd);

		if(!$oraConexao){
			$e = oci_error();
    		trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}

		return $oraConexao;
	}
	
}