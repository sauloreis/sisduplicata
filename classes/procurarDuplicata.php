<?php
require_once("../config/ConOracle.php");

// if (!isset($_SESSION['usuarioId']) and !isset($_SESSION['usuarioEmail'])) {
//     $_SESSION['error']['notAuthorized'] = "faça o login ou crie uma conta";
// 		header("Location: ../index.php");
//         die;
// }

if(!empty($_POST['DUPLIC']) || !empty($_POST['CODCLI'])){

    $duplicata =isset($_POST['DUPLIC'])?filter_var($_POST['DUPLIC'],FILTER_SANITIZE_NUMBER_INT):NULL;
    $prestacao =isset($_POST['PREST'])?filter_var($_POST['PREST'],FILTER_SANITIZE_NUMBER_INT):NULL;
    $codCliente=isset($_POST['CODCLI'])?filter_var($_POST['CODCLI'],FILTER_SANITIZE_NUMBER_INT):NULL;
    if($duplicata != NULL || $codCliente != NULL){


        if($duplicata != '' && $codCliente != '' && $prestacao != ""){
					$sql = "select CODCLI,PREST,DUPLIC,VALOR,DTVENC,CODCOB,VPAGO,TXPERM,DTPAG,DTEMISSAO,OPERACAO,DTDESC,PERDESC";
					$sql.=",CODFILIAL,STATUS,CODUSUR from PCPREST Where DUPLIC='{$duplicata}' and codcli='{$codCliente}' and PREST =$prestacao ";
				}elseif ($duplicata != '' && $prestacao != "" ){
					$sql = "select CODCLI,PREST,DUPLIC,VALOR,DTVENC,CODCOB,VPAGO,TXPERM,DTPAG,DTEMISSAO,OPERACAO,DTDESC,PERDESC";
					$sql.=",CODFILIAL,STATUS,CODUSUR from PCPREST Where DUPLIC='{$duplicata}'  and PREST =$prestacao ";
				}elseif ($codCliente != '' && $prestacao != "" ){
					$sql = "select CODCLI,PREST,DUPLIC,VALOR,DTVENC,CODCOB,VPAGO,TXPERM,DTPAG,DTEMISSAO,OPERACAO,DTDESC,PERDESC";
					$sql.=",CODFILIAL,STATUS,CODUSUR from PCPREST Where codcli='{$codCliente}' and PREST =$prestacao ";
				}else{
					$sql = "select CODCLI,PREST,DUPLIC,VALOR,DTVENC,CODCOB,VPAGO,TXPERM,DTPAG,DTEMISSAO,OPERACAO,DTDESC,PERDESC";
					$sql.=",CODFILIAL,STATUS,CODUSUR from PCPREST Where DUPLIC='{$duplicata}' or codcli='{$codCliente}'  ";
				}	
        
        $con = new ConOracle();
        $link = $con->conectar();
        $stid = oci_parse($link, $sql); 
        oci_execute($stid,OCI_COMMIT_ON_SUCCESS);
        // $res  = $stid;
        
        require_once("../includes/formsearchduplicata.php");

        if (isset($stid)) { 
    	
		
            while($r = oci_fetch_array($stid,OCI_RETURN_NULLS+OCI_ASSOC) ){
                
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
        require_once("../includes/formupdatedata.php");
        return $stid;

        oci_close($con); 	
    }else{
        echo("Entrando no else");
        $_SESSION['erro']['somenteNumber']='somente numero!';
    }

    
}else{
    echo("Entrando no else");
    $_SESSION['erro']['campoVazio']='Preencha pelo menos um campo CODCLIENTE ou DUPLICATA!';

}
