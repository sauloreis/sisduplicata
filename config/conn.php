<?php

//oci_connect(usuario, senha, banco)
// configuração do BD

class ConOracle
{
	public function conectar(){
		//$config = "config.ini"; //configuração local nilson
		$config = "configOraLocal.ini"; //configuração local TESTE
		//$config = "configOra.ini"; //configuração remoto PRODUÇÃO
		$configOra =parse_ini_file($config); 

		$oraConexao = oci_connect(
			$configOra['ORACLE_USER'],
			$configOra['ORACLE_PASSWORD'],
			$configOra['ORACLE_BD'],
			'AL32UTF8'								
								);

		if(!$oraConexao){
			$e = oci_error();
    		trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}

		return $oraConexao;
	}
	
}