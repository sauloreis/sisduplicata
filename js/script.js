function valCheckBox(codClie,codDuplica,prestacao,value){

    
    let checkbox = document.querySelector("#checkbox"+ value).value;
   
    let dataPagamento = document.querySelector("#dtaPagamento");
    dataPagamento.value = checkbox;

    let codCliente = document.querySelector("[name='CODCLI']");
    codCliente.value =codClie ;
    let duplicata = document.querySelector("[name='DUPLIC']");
    duplicata.value =codDuplica ;
    let presta = document.querySelector("[name='PREST']");
    presta.value =prestacao ;
    

}



