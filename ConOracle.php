<?php

class ConOracle
{
	private $ora_user=;
	private $ora_senha=;
	private $ora_bd ="(description= (retry_count=20)(retry_delay=3)
		(address=(protocol=tcps)(port=1522)
		(host=adb.us-phoenix-1.oraclecloud.com))
		(connect_data=(service_name=ge20d02f51cea69_dbpcprest_high.adb.oraclecloud.com))(security=(ssl_server_cert_dn='CN=adwc.uscom-east-1.oraclecloud.com, OU=Oracle BMCS US, O=Oracle Corporation, L=Redwood City, ST=California, C=US')))";
	public function conectar(){

		$oraConexao = ocilogon(
			$this->ora_user,
			$this->ora_senha,
			$this->ora_bd
		);

		if($oraConexao){
			echo "conexao bem sucedida";
		}else{
			echo "Erro na conexao";
		}
	}
	
}