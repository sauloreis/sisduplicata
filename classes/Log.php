<?php
 /**
  *   classe que Rregistra o log no banco
  */

      
class Log
{
    public function __construct($data)
    {
        
        require_once("../config/conn.php");
        require_once('./Vardump.php');
        
        if(isset($_POST['usuarioNome']) && isset($_POST['usuarioId'])){
                //que são no formato date [DATA_SISTEMA]
                $data_sistema = isset($_POST['datahorasistema']) ? $_POST['datahorasistema']: "";
                $date = date_create($data_sistema);
                $data_sistema = date_format($date,'Y/m/d h:m:s');                             
                
                $duplic = isset($_POST['DUPLIC']) ? filter_var($_POST['DUPLIC'],FILTER_SANITIZE_SPECIAL_CHARS) : "";
                $prest  = isset($_POST['PREST']) ? filter_var($_POST['PREST'],FILTER_SANITIZE_EMAIL) : "";
                $codcli = isset($_POST['CODCLI']) ? filter_var($_POST['CODCLI'],FILTER_SANITIZE_SPECIAL_CHARS) : "";
                $codcob = isset($_POST['codcob']) ? filter_var($_POST['codcob'],FILTER_SANITIZE_SPECIAL_CHARS) : "";
                //que são no formato date [ DTVENC]

                $dtvenc = isset($_POST['dtvenc']) ? $_POST['dtvenc'] : "";
                $dtvenc = $this->formartData($dtvenc);
                
                $valor = isset($_POST['valor']) ? filter_var($_POST['valor'],FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION) : "";
                
                //que são no formato date [DTPAGATUAL]
                $dtpagatual = isset($_POST['alterardtaPagamento']) ? $_POST['alterardtaPagamento'] : "";
                $dtpagatual = $this->formartData($dtpagatual);                

                $vpago = isset($_POST['vpago']) ? filter_var($_POST['vpago'],FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION) : "";
                $programa = 'Sisduplicata';
                $usuario  = isset($_POST['usuarioNome']) ? filter_var($_POST['usuarioNome'],FILTER_SANITIZE_SPECIAL_CHARS) : "";
                $maquina  = isset($_POST['maquina']) ? filter_var($_POST['maquina'],FILTER_SANITIZE_SPECIAL_CHARS) : "";
                //que são no formato date [DTPAGANT]
                $dtpagant = isset($_POST['dtaPagamento']) ? $_POST['dtaPagamento']: "";
                $dtpagant = $this->formartData($dtpagant);
               

                $usuarioId = isset($_POST['usuarioId']) ? filter_var($_POST['usuarioId'],FILTER_SANITIZE_NUMBER_INT) : "";

                $sql  = "Insert into g4m_user_prod_log";
                $sql .=" (DATA_SISTEMA,DUPLIC,PREST,CODCLI,CODCOB,DTVENC,VALOR,DTPAGATUAL,VPAGO,PROGRAMA,USUARIO,MAQUINA,DTPAGANT,IDUSER)"; 
                $sql .=" values (TO_DATE(nvl('','$data_sistema'),'YYYY/MM/DD HH24:MI:SS'), $duplic,'$prest',$codcli,'$codcob',TO_DATE('$dtvenc','YYYY/MM/DD'), $valor,";
                $sql .="TO_DATE('$dtpagatual','yyyy/MM/dd'), $vpago,'$programa','$usuario','$maquina',TO_DATE('$dtpagant','YYYY/MM/DD'), '$usuarioId')";
                
                

                $con = new ConOracle();
                $link = $con->conectar();
                $stid = oci_parse($link, $sql);   
            
                oci_execute($stid);
                // oci_commit($link);
                if ($nrows =oci_num_rows( $stid)) {

                    echo " LOG Registrado com sucesso";                   
                    
                }else{                    
                    echo  " Erro ao registrar log";
                    
                }
                oci_close($link); 
        
            }


    }
    /**
     *  formata data
     **/
    
    public function formartData($data){

        $date = date_create($data);
        $newData_sistema = date_format($date,'Y/m/d');
        return $newData_sistema;
        
    }
}