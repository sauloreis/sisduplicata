<?php

//oci_connect(usuario, senha, banco)

class ConOracle
{
	public function conectar(){

		//$config = "config.ini"; //configuração local
		$config = "configOra.ini"; //configuração remoto
		$configOra =parse_ini_file($config); 

		$oraConexao = oci_connect($configOra['ORACLE_USER'],
								  $configOra['ORACLE_PASSWORD'],
								  $configOra['ORACLE_BD']);

		if(!$oraConexao){
			$e = oci_error();
    		trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}

		return $oraConexao;
	}
	
}