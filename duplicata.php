<?php

require_once('head.php');
require_once ('Duplicata.php');
// if (isset($_SESSION['user'])) {

    // var_dump($_SESSION);
    
    // $usuario = $_SESSION['user'];
    // 
    
    if(isset($_POST['buttonSearch']) ){
   	

    	$duplicata = new Duplicata();
    	$duplicata = $duplicata->searchDuplicata($_POST);

    	$res = $duplicata;


	}
	if(isset($_POST['salvarData']) ){

    	
    	$duplicata = new Duplicata();
    	$duplicata = $duplicata->alterarDataPagamento($_POST);

    	$res = $duplicata;


	}

?>

	<div class="container">


				<div>
					<form action="duplicata.php" method="POST">

					  <div class="form-group col-sm-3 ">
					    <label for="duplicata">Duplicata</label>
					    <input type="text" name="duplicata" class="form-control" id="duplicata" placeholder="Duplicata">
					  </div>
					  <div class="form-group col-sm-3 ">
					    <label for="prestacao">Prestação</label>
					    <input type="text" name="prestacao" class="form-control" id="prestacao" placeholder="Prestação">
					  </div>

				  		<div class="form-group col-sm-3 ">
						    <label for="codCliente">Cod Cliente</label>
						    <input type="text" name="codCliente" class="form-control" id="codCliente" placeholder="Codigo do Cliente">

							
						</div>

						<div class="-sm-2 buton ">
							<input type="submit" class="btn btn-primary " name='buttonSearch' value="Procurar">
						</div>

					</form>

				</div>
		<div class="table-responsive">
			<table class="table  table-condensed table-bordered table-hover table-sm">

				<thead >
					<tr>
						<th scope="col">CODCLIENTE </th>
					    <th scope="col">PRESTACAO </th>
					    <th scope="col">DUPLICATA </th>
					    <th scope="col">VALOR </th>
					    <th scope="col">DT VENCIMENTO </th>
					    <th scope="col">CODCOB </th>
					    <th scope="col">VALOR PAGO </th>
					    <th scope="col">TXPERM </th>
					    <th scope="col">DATA PAGAMENTO </th>
					    <th scope="col">DTEMISSAO </th>
					    <th scope="col">OPERACAO </th>
					    <th scope="col">DTDESC </th>
					    <th scope="col">PERDESC </th>
					    <th scope="col">CODFILIAL </th>
					    <th scope="col">STATUS </th>
					    <th scope="col">CODUSUR </th>
					    <th scope="col">VALORDESC </th>
					    <th scope="col">DTULTALTER </th>
					    <th scope="col">BOLETO </th>
					    <th scope="col">NUMBANCO </th>
					    <th scope="col">NUMAGENCIA </th>
					    <th scope="col">NUMCHEQUE </th>
					    <th scope="col">DTLANCCH </th>
					    <th scope="col">DTBAIXA </th>
					    <th scope="col">CODBAIXA </th>
					    <th scope="col">NUMCAR </th>
					    <th scope="col">DTDESD </th>
					    <th scope="col">DTFECHA </th>
					    <th scope="col">NOSSONUMBCO </th>
					    <th scope="col">OBS </th>
					    <th scope="col">ALINEA </th>
					    <th scope="col">NUMTRANS </th>
					    <th scope="col">VLDEVOL </th>
					    <th scope="col">DTDEVOL </th>
					    <th scope="col">DTLANCPRORROG </th>
					    <th scope="col">DTVENCORIG </th>
					    <th scope="col">CODSUPERVISOR </th>
					    <th scope="col">CODBANCO </th>
					    <th scope="col">CODCOBBANCO </th>
					    <th scope="col">DTCXMOT </th>
					    <th scope="col">TIPO </th>
					    <th scope="col">LINHADIG </th>
					    <th scope="col">CODBARRA </th>
					    <th scope="col">DTBORDER </th>
					    <th scope="col">NUMTRANSVENDA </th>
					    <th scope="col">CODFUNCCXMOT </th>
					    <th scope="col">CODFUNCFECHA </th>
					    <th scope="col">VALORORIG </th>
					    <th scope="col">CODCOBORIG </th>
					    <th scope="col">CODEPTO </th>
					    <th scope="col">OBS2 </th>
					    <th scope="col">NUMTRANSVENDOR </th>
					    <th scope="col">TXVENDORCLI </th>
					    <th scope="col">DTVENDOR </th>
					    <th scope="col">TXVENDORBCO </th>
					    <th scope="col">DTFECHAVENDOR </th>
					    <th scope="col">PERCOM </th>
					    <th scope="col">VALORLIQCOM </th>
					    <th scope="col">VLTXBOLETO </th>
					    <th scope="col">TIPOPRORROG </th>
					    <th scope="col">DTSAIDA </th>
					    <th scope="col">CODFILIALNF </th>
					    <th scope="col">NOSSONUMBCO2 </th>
					    <th scope="col">CODMOTORISTA </th>
					    <th scope="col">CODFUNCVALE </th>
					    <th scope="col">CODHISTVALE </th>
					    <th scope="col">TIPOESTORNO </th>
					    <th scope="col">DTESTORNO </th>
					    <th scope="col">CODBANCOCUSTODIA </th>
					    <th scope="col">DTCUSTODIA </th>
					    <th scope="col">NUMCUSTODIA </th>
					    <th scope="col">DTPAGCOMISSAO </th>
					    <th scope="col">DVCOB </th>
					    <th scope="col">CODFUNCULTALTER </th>
					    <th scope="col">DTREGCARTEIRA </th>
					    <th scope="col">NUMTRANSENTDEVCLI </th>
					    <th scope="col">NUMPED </th>
					    <th scope="col">DTINCLUSAO </th>
					    <th scope="col">CODFUNCINC </th>
					    <th scope="col">CODFUNCDESD </th>
					    <th scope="col">DTULTESTORNO </th>
					    <th scope="col">CODFUNCESTORNO </th>
					    <th scope="col">CODFUNCDESD1 </th>
					    <th scope="col">CONTRATOVENDOR </th>
					    <th scope="col">DTREMVENDOR </th>
					    <th scope="col">CODFUNCVEND </th>
					    <th scope="col">NUMCONTACORRENTE </th>
					    <th scope="col">HORADESD </th>
					    <th scope="col">MINUTODESD </th>
					    <th scope="col">HORAFECHA </th>
					    <th scope="col">MINUTOFECHA </th>
					    <th scope="col">CGCCPFCH </th>
					    <th scope="col">CODUSUR2 </th>
					    <th scope="col">NUMCHECKOUT </th>
					    <th scope="col">CODFUNCCHECKOUT </th>
					    <th scope="col">COMPENSACAOBCO </th>
					    <th scope="col">NUMLOTECUSTODIA </th>
					    <th scope="col">DVAGENCIA </th>
					    <th scope="col">DVCONTA </th>
					    <th scope="col">DVCHEQUE </th>
					    <th scope="col">CODUSUR3 </th>
					    <th scope="col">ROTDESD </th>
					    <th scope="col">PERCOM2 </th>
					    <th scope="col">PERCOM3 </th>
					    <th scope="col">CODBANCOVENDOR </th>
					    <th scope="col">TIPOPORTADOR </th>
					    <th scope="col">CODPORTADOR </th>
					    <th scope="col">CODOCORRBAIXA </th>
					    <th scope="col">DIGITAO </th>
					    <th scope="col">NUMBORDERO </th>
					    <th scope="col">DTBORDERO </th>
					    <th scope="col">CODFUNCBORDERO </th>
					    <th scope="col">OBSFINANC </th>
					    <th scope="col">VLTXVENDOR </th>
					    <th scope="col">VLTXIOF </th>
					    <th scope="col">NUMDIASCARENCIA </th>
					    <th scope="col">NUMDIASPRAZOPROTESTO </th>
					    <th scope="col">CODBANCOCM </th>
					    <th scope="col">PERCOMSUP </th>
					    <th scope="col">VALORLIQCOMSUP </th>
					    <th scope="col">VLCONTRATOVENDOR </th>
					    <th scope="col">VLCUSTODOCVENDOR </th>
					    <th scope="col">DTCANCEL </th>
					    <th scope="col">CARTORIO </th>
					    <th scope="col">CODBLOCO </th>
					    <th scope="col">CODCOBRADOR </th>
					    <th scope="col">NUMRECIBO </th>
					    <th scope="col">CODESTABELECIMENTO </th>
					    <th scope="col">NUMCAIXAFISCAL </th>
					    <th scope="col">NUMNEGOCIACAO </th>
					    <th scope="col">VALORDESCORIG </th>
					    <th scope="col">NSUTEF </th>
					    <th scope="col">DTVENCVALE </th>
					    <th scope="col">GERACAORAZAOAUXILIAR </th>
					    <th scope="col">NUMECF </th>
					    <th scope="col">DTEXPORTACAOSERVINT </th>
					    <th scope="col">EXPORTADOSERVINT </th>
					    <th scope="col">IMPORTADOSERVPRINC </th>
					    <th scope="col">DTIMPORTACAOSERVPRINC </th>
					    <th scope="col">AGRUPADO </th>
					    <th scope="col">CODADMCARTAO </th>
					    <th scope="col">PRESTTEF </th>
					    <th scope="col">PARCELAMENTOTEF </th>
					    <th scope="col">CODUSURPGCOMISSAO </th>
					    <th scope="col">DTEMISSAOORIG </th>
					    <th scope="col">ORIGEMBOLETO </th>
					    <th scope="col">TIPOOPERACAOTEF </th>
					    <th scope="col">CODBANDEIRATEF </th>
					    <th scope="col">BLOQDESDEMITENTEDIF </th>
					    <th scope="col">CODAUTORIZACAOTEF </th>
					    <th scope="col">NUMCARTAO </th>
					    <th scope="col">NUMLOTECARTAOTEF </th>
					    <th scope="col">BAIXACONCILIADA </th>
					    <th scope="col">CODFUNCCONCIL </th>
					    <th scope="col">DTCONCIL </th>
					    <th scope="col">DTCONCILVENC </th>
					    <th scope="col">CODFUNCCONCILVENC </th>
					    <th scope="col">SOMATXBOLETO </th>
					    <th scope="col">PERMITEESTORNO </th>
					    <th scope="col">VALORESTORNO </th>
					    <th scope="col">CODEMITENTEPEDIDO </th>
					    <th scope="col">DTDESCONTOTITBCO </th>
					    <th scope="col">DATAHORAMINUTOBAIXA </th>
					    <th scope="col">DTPAGCOMISSAOPROF </th>
					    <th scope="col">DTCRIACAO </th>
					    <th scope="col">CHEQUETERCEIRO </th>
					    <th scope="col">HORAESTORNO </th>
					    <th scope="col">MINUTOESTORNO </th>
					    <th scope="col">DTINCLUSAOMANUAL </th>
					    <th scope="col">DTBAIXACRED </th>
					    <th scope="col">QTPARCELASPOS </th>
					    <th scope="col">CODCOBPOS </th>
					    <th scope="col">DTLIBERACAOFECHAMENTO </th>
					    <th scope="col">CODBARRA2 </th>
					    <th scope="col">CODBANCOCM2 </th>
					    <th scope="col">LINHADIG2 </th>
					    <th scope="col">DTVENCANTERIOR </th>
					    <th scope="col">CODAGENTECOBRANCA </th>
					    <th scope="col">DTDEFAGENTE </th>
					    <th scope="col">DTPROCESSAMENTO </th>
					    <th scope="col">NUMREMESSA </th>
					    <th scope="col">NOMEARQUIVO </th>
					    <th scope="col">CODBCOCUSTODIA </th>
					    <th scope="col">OBSCUSTODIA </th>
					    <th scope="col">DTDESCONTADO </th>
					    <th scope="col">DTABERTURACONTA </th>
					    <th scope="col">CODUSURANT </th>
					    <th scope="col">CODFUNCPRORROG </th>
					    <th scope="col">HOBPERCOMSUP </th>
					    <th scope="col">HOBPERCOMMOT </th>
					    <th scope="col">CODUSUR4 </th>
					    <th scope="col">PERCOM4 </th>
					    <th scope="col">DTPAGCOMISSAO2 </th>
					    <th scope="col">DTPAGCOMISSAO3 </th>
					    <th scope="col">DTPAGCOMISSAO4 </th>
					    <th scope="col">CODBANCOBAIXA </th>
					    <th scope="col">NUMCARANTERIOR </th>
					    <th scope="col">CODPROFISSIONAL </th>
					    <th scope="col">NUMSEQRETORNO </th>
					    <th scope="col">ARQRETORNO </th>
					    <th scope="col">IDTITULO </th>
					    <th scope="col">IDCOB </th>
					    <th scope="col">DTENVIOSERASA </th>
					    <th scope="col">DTLIBERACAOENTREGA </th>
					    <th scope="col">CODFUNCLIBERACAOENTREGA </th>
					    <th scope="col">DADOSECF </th>
					    <th scope="col">ROTINALANC </th>
					    <th scope="col">PROTESTO </th>
					    <th scope="col">DTCXMOTHHMMSS </th>
					    <th scope="col">VLRDESPBANCARIAS </th>
					    <th scope="col">VLRDESPCARTORAIS </th>
					    <th scope="col">VLRIMPRENDAORGPUB </th>
					    <th scope="col">VLRCONTSOCIALORGPUB </th>
					    <th scope="col">VLRPISORGPUB </th>
					    <th scope="col">VLRCOFINSORGPUB </th>
					    <th scope="col">VLRICMSRETORGPUB </th>
					    <th scope="col">VLROUTRASDEDUCOESORGPUB </th>
					    <th scope="col">VLTXIOFCOMPLEMENTAR </th>
					    <th scope="col">VLRTOTDESPESASEJUROS </th>
					    <th scope="col">CNPJCISP </th>
					    <th scope="col">RESPONSAVELPAG </th>
					    <th scope="col">NUMASSOCDNI </th>
					    <th scope="col">DTASSOCIADNICLI </th>
					    <th scope="col">CODFUNCDNICLI </th>
					    <th scope="col">EQUIPLANC </th>
					    <th scope="col">ROTINALANCULTALT </th>
					    <th scope="col">FUNCLANC </th>
					    <th scope="col">DTRETIRADASERASA </th>
					    <th scope="col">NUMTRANSVENDAST </th>
					    <th scope="col">NUMTRANSENT </th>
					    <th scope="col">VLROUTROSACRESC </th>
					    <th scope="col">STATUSSCI </th>
					    <th scope="col">ENVIADOQIS </th>
					    <th scope="col">CODSTATUSCOB </th>
					    <th scope="col">TXPERMPREVISTO </th>
					    <th scope="col">DTRECEBIMENTOPREVISTO </th>
					    <th scope="col">TXPERMPREVREAL </th>
					    <th scope="col">OBSTITULO </th>
					    <th scope="col">HISTORIGDESDOBRAMENTO </th>
					    <th scope="col">CODCRED </th>
					    <th scope="col">NUMCARTAOCRM </th>
					    <th scope="col">NSUHOST </th>
					    <th scope="col">NUMFECHAMENTOMOVCX </th>
					    <th scope="col">DTMOVIMENTOCX </th>
					    <th scope="col">APLICAACRESCPJISENTA </th>
					    <th scope="col">CALCBASEREDICMSTRANSF </th>
					    <th scope="col">CALCULARICMSSITTRIBUT060 </th>
					    <th scope="col">CODFISCALBONIFIC </th>
					    <th scope="col">CODFISCALBONIFICINTER </th>
					    <th scope="col">CODFISCALBONIFICINTERNASC </th>
					    <th scope="col">CODFISCALBROKERDEVENT </th>
					    <th scope="col">CODFISCALDEVCLIBONIFICINTER </th>
					    <th scope="col">CODFISCALDEVCLIBONINTERNASC </th>
					    <th scope="col">CODFISCALDEVCLIINTER </th>
					    <th scope="col">CODFISCALDEVCLIINTERNASC </th>
					    <th scope="col">CODFISCALDEVCLIPF </th>
					    <th scope="col">CODFISCALDEVCLIPFINTER </th>
					    <th scope="col">CODFISCALDEVCLIPFINTERNASC </th>
					    <th scope="col">CODFISCALDEVCLIPROENTINTERNASC </th>
					    <th scope="col">CODFISCALDEVCLIPRONTAENT </th>
					    <th scope="col">CODFISCALDEVCLIPRONTAENTINTER </th>
					    <th scope="col">CODFISCALDEVCOMODATOEST </th>
					    <th scope="col">CODFISCALDEVCOMODATOINTER </th>
					    <th scope="col">CODFISCALDEVISENTOST </th>
					    <th scope="col">CODFISCALDEVISENTOSTINTER </th>
					    <th scope="col">CODFISCALDEVISENTOSTINTERNASC </th>
					    <th scope="col">CODFISCALDEVISEORGAOPUBEST </th>
					    <th scope="col">CODFISCALDEVISEORGAOPUBINTER </th>
					    <th scope="col">CODFISCALDEVMERCCONSIG </th>
					    <th scope="col">CODFISCALDEVMERCCONSIGINTER </th>
					    <th scope="col">CODFISCALDEVTRANSF </th>
					    <th scope="col">CODFISCALDEVTRANSFENT </th>
					    <th scope="col">CODFISCALDEVTRANSFENTINTER </th>
					    <th scope="col">CODFISCALDEVTRANSFINTER </th>
					    <th scope="col">CODFISCALENTBENEFICEST </th>
					    <th scope="col">CODFISCALENTBENEFICINTEREST </th>
					    <th scope="col">CODFISCALENTBENEFINTERNAC </th>
					    <th scope="col">CODFISCALENTDEVTRANSFVIR </th>
					    <th scope="col">CODFISCALENTDEVTRANSFVIRINTER </th>
					    <th scope="col">CODFISCALENTDEVTRFFILRET </th>
					    <th scope="col">CODFISCALENTTRANSFVIR </th>
					    <th scope="col">CODFISCALENTTRANSFVIRINTER </th>
					    <th scope="col">CODFISCALENTTRFFILRET </th>
					    <th scope="col">CODFISCALENTTRFFILRETINTER </th>
					    <th scope="col">CODFISCALENVCOMODATOEST </th>
					    <th scope="col">CODFISCALENVCOMODATOINTER </th>
					    <th scope="col">CODFISCALESTORNO </th>
					    <th scope="col">CODFISCALESTORNOSAIDAINTER </th>
					    <th scope="col">CODFISCALINTER </th>
					    <th scope="col">CODFISCALINTERNASC </th>
					    <th scope="col">CODFISCALINTERNASCPF </th>
					    <th scope="col">CODFISCALINTERNASCTV9 </th>
					    <th scope="col">CODFISCALINTERPF </th>
					    <th scope="col">CODFISCALINTERTV9 </th>
					    <th scope="col">CODFISCALINTER_MC </th>
					    <th scope="col">CODFISCALISENTOST </th>
					    <th scope="col">CODFISCALISENTOSTINTER </th>
					    <th scope="col">CODFISCALISENTOSTINTERNASC </th>
					    <th scope="col">CODFISCALMERCCONSIG </th>
					    <th scope="col">CODFISCALMERCCONSIGINTER </th>
					    <th scope="col">CODFISCALMERCCONSIGINTERNASC </th>
					    <th scope="col">CODFISCALPF </th>
					    <th scope="col">CODFISCALPRONTAENT </th>
					    <th scope="col">CODFISCALPRONTAENTINTER </th>
					    <th scope="col">CODFISCALPRONTAENTINTERNASC </th>
					    <th scope="col">CODFISCALSAIDBENEFEST </th>
					    <th scope="col">CODFISCALSAIDBENEFINTEREST </th>
					    <th scope="col">CODFISCALSAIDBENEFINTERNAC </th>
					    <th scope="col">CODFISCALSAIDDEVTRANSFVIR </th>
					    <th scope="col">CODFISCALSAIDDEVTRANSFVIRINTER </th>
					    <th scope="col">CODFISCALSAIDDEVTRFFILRET </th>
					    <th scope="col">CODFISCALSAIDTRANSFVIR </th>
					    <th scope="col">CODFISCALSAIDTRANSFVIRINTER </th>
					    <th scope="col">CODFISCALSAIDTRFFILRET </th>
					    <th scope="col">CODFISCALSAIDTRFFILRETINTER </th>
					    <th scope="col">CODFISCALSIMPENTFUT </th>
					    <th scope="col">CODFISCALSIMPENTFUTINTER </th>
					    <th scope="col">CODFISCALSRESTSR </th>
					    <th scope="col">CODFISCALSREXT </th>
					    <th scope="col">CODFISCALSRINTE </th>
					    <th scope="col">CODFISCALSTFONTEEST </th>
					    <th scope="col">CODFISCALSTFONTEINTEREST </th>
					    <th scope="col">CODFISCALSTFONTEINTERNAC </th>
					    <th scope="col">CODFISCALSUFRAMA </th>
					    <th scope="col">CODFISCALSUFRAMAINTER </th>
					    <th scope="col">CODFISCALTRANSF </th>
					    <th scope="col">CODFISCALTRANSFENT </th>
					    <th scope="col">CODFISCALTRANSFENTINTER </th>
					    <th scope="col">CODFISCALTRANSFF </th>
					    <th scope="col">CODFISCALTRANSFFINTER </th>
					    <th scope="col">CODFISCALTRANSFFINTERNASC </th>
					    <th scope="col">CODFISCALTRANSFINTER </th>
					    <th scope="col">CODFISCALTRANSFINTERNASC </th>
					    <th scope="col">CODFISCALTRANSFSAIDAEST </th>
					    <th scope="col">CODFISCALTRANSFSAIDAINT </th>
					    <th scope="col">CODFISCALTRIANGULAR </th>
					    <th scope="col">CODFISCALTRIANGULARINTER </th>
					    <th scope="col">CODFISCALTRIANGULARINTERNASC </th>
					    <th scope="col">CODFISCALTRIANGULARINTERNASCPF </th>
					    <th scope="col">CODFISCALTRIANGULARINTERPF </th>
					    <th scope="col">CODFISCALTRIANGULARPF </th>
					    <th scope="col">CODFISCALTROCA </th>
					    <th scope="col">CODFISCALTROCAINTER </th>
					    <th scope="col">CODFISCALTROCAINTERNASC </th>
					    <th scope="col">CODFISCALTV9 </th>
					    <th scope="col">CODFISCALVENDACONSIG </th>
					    <th scope="col">CODFISCALVENDACONSIGINTER </th>
					    <th scope="col">CODFISCALVENDACONSIGINTERNASC </th>
					    <th scope="col">CODFISCALVENDAENTFUT </th>
					    <th scope="col">CODFISCALVENDAENTFUTINTER </th>
					    <th scope="col">CODFISCALVENDAPRONTAENT </th>
					    <th scope="col">CODFISCALVENDAPRONTAENTINTER </th>
					    <th scope="col">CODFISCALVENISEORGAOPUBEST </th>
					    <th scope="col">CODFISCALVENISEORGAOPUBINTER </th>
					    <th scope="col">CODFISCENTDEVTRFFILRETINTER </th>
					    <th scope="col">CODFISCSAIDDEVTRFFILRETINTER </th>
					    <th scope="col">CODICMCONSUMIDOR </th>
					    <th scope="col">CODICMNRPA </th>
					    <th scope="col">CODICMPF </th>
					    <th scope="col">CODICMPRODRURAL </th>
					    <th scope="col">CODICMSIMPLESNAC </th>
					    <th scope="col">CODICMTABNRPA </th>
					    <th scope="col">CODICMTABPF </th>
					    <th scope="col">CODICMTABTRANSF </th>
					    <th scope="col">CODICM_MC </th>
					    <th scope="col">CODPRODGNRE </th>
					    <th scope="col">DESCICMSREDUZBASEICMS </th>
					    <th scope="col">DTFIMVIGENCIA </th>
					    <th scope="col">GERACODFISCALENTDEVTRANSFVIR </th>
					    <th scope="col">GERACODFISCALENTTRANSFVIR </th>
					    <th scope="col">GERACODFISCALENTTRFFILRET </th>
					    <th scope="col">GERACODFISCALSAIDDEVTRANSFVIR </th>
					    <th scope="col">GERACODFISCALSAIDTRANSFVIR </th>
					    <th scope="col">GERACODFISCALSAIDTRFFILRET </th>
					    <th scope="col">GERACODFISCENTDEVTRFFILRET </th>
					    <th scope="col">GERACODFISCSAIDDEVTRFFILRET </th>
					    <th scope="col">GRUPONFTRIBUT </th>
					    <th scope="col">ISENCAOICMSORGAOPUB </th>
					    <th scope="col">ISENCAOSTORGAOPUB </th>
					    <th scope="col">ISENTAICMSBONIFIC </th>
					    <th scope="col">ISENTNUMEMPENHO </th>
					    <th scope="col">IVAFONTE </th>
					    <th scope="col">IVA_MC </th>
					    <th scope="col">MENSAGEM2 </th>
					    <th scope="col">MENSAGEMNRPA </th>
					    <th scope="col">MOSTRARPVENDASEMIPI </th>
					    <th scope="col">MOSTRARPVENDASEMST </th>
					    <th scope="col">OBSISEORGAOPUB1 </th>
					    <th scope="col">OBSISEORGAOPUB2 </th>
					    <th scope="col">OBSPF </th>
					    <th scope="col">OBSPF2 </th>
					    <th scope="col">OBSSIMPLES </th>
					    <th scope="col">OBSSUFRAMA </th>
					    <th scope="col">OBSTRANSF </th>
					    <th scope="col">OBSTRIBUT_GNRE </th>
					    <th scope="col">OBS_INFORMATIVO </th>
					    <th scope="col">PAGTONOMEDESTTRANSF </th>
					    <th scope="col">PAGTONOMEDESTTRANSFTAB </th>
					    <th scope="col">PAGTONOMEDOCLIENTE </th>
					    <th scope="col">PAGTONOMEDOREMETENTE </th>
					    <th scope="col">PAGTONOMEREMETTRANSF </th>
					    <th scope="col">PAGTONOMEREMETTRANSFTAB </th>
					    <th scope="col">PAUTAFONTE </th>
					    <th scope="col">PAUTA_MC </th>
					    <th scope="col">PERACRESCIMOCUSTO </th>
					    <th scope="col">PERACRESCIMOFUNCEP </th>
					    <th scope="col">PERACRESCIMONRPA </th>
					    <th scope="col">PERACRESCIMOPF </th>
					    <th scope="col">PERACRESCISMOPF </th>
					    <th scope="col">PERBASEREDNRPA </th>
					    <th scope="col">PERBASEREDSIMPLESNAC </th>
					    <th scope="col">PERBASEREDTRANSFENT </th>
					    <th scope="col">PERCACREPFVLACIMAPERMITIDO </th>
					    <th scope="col">PERCACRESCBASEPFEST </th>
					    <th scope="col">PERCACRESCBASEPFINT </th>
					    <th scope="col">PERCACRESICMSPF_PI </th>
					    <th scope="col">PERCAGREGADORST </th>
					    <th scope="col">PERCBASECALCREPASSE </th>
					    <th scope="col">PERCBASEREDADICIONAL </th>
					    <th scope="col">PERCBASEREDADICIONALINTER </th>
					    <th scope="col">PERCBASEREDCONSUMIDOR </th>
					    <th scope="col">PERCBASEREDST </th>
					    <th scope="col">PERCBASEREDSTFONTE </th>
					    <th scope="col">PERCBASEREDSTTRANSF </th>
					    <th scope="col">PERCBASEREDST_MC </th>
					    <th scope="col">PERCBASEREDTRANFSAID </th>
					    <th scope="col">PERCBASERED_MC </th>
					    <th scope="col">PERCBASESTRJ </th>
					    <th scope="col">PERCDESCCOFINS </th>
					    <th scope="col">PERCDESCPIS </th>
					    <th scope="col">PERCDIFALIQUOTAS </th>
					    <th scope="col">PERCDIFALIQUOTASTAB </th>
					    <th scope="col">PERCICMSCOMPLEMENTAR </th>
					    <th scope="col">PERCIVAMEX </th>
					    <th scope="col">PERCIVAPAUTA </th>
					    <th scope="col">PERCREDPVENDASIMPLESNAC </th>
					    <th scope="col">PERCTRIBUTOS </th>
					    <th scope="col">PERDESCCUSTOTRANSF </th>
					    <th scope="col">PERDESCICMISENCAO </th>
					    <th scope="col">PERDESCPISSUFRAMA </th>
					    <th scope="col">PERDESCREPASSE </th>
					    <th scope="col">PERDESCSUFRAMA </th>
					    <th scope="col">PERDIFEREIMENTOICMS </th>
					    <th scope="col">PERPAUTAICMS </th>
					    <th scope="col">PERPAUTAICMSINTER </th>
					    <th scope="col">PRODTRANSFTRIBRJ </th>
					    <th scope="col">REDUZBASEICMDECRETOMARANHAO </th>
					    <th scope="col">SITTRIBSTFONTEPF </th>
					    <th scope="col">SITTRIBSTFONTEPJ </th>
					    <th scope="col">SITTRIBUTBNFTV1 </th>
					    <th scope="col">SITTRIBUTBONIFIC </th>
					    <th scope="col">SITTRIBUTECF </th>
					    <th scope="col">SITTRIBUTISENTOST </th>
					    <th scope="col">SITTRIBUTISEORGAOPUB </th>
					    <th scope="col">SITTRIBUTNRPA </th>
					    <th scope="col">SITTRIBUTORGAOPUB </th>
					    <th scope="col">SITTRIBUTPAUTAICMS </th>
					    <th scope="col">SITTRIBUTPAUTAICMSPF </th>
					    <th scope="col">SITTRIBUTPF </th>
					    <th scope="col">SITTRIBUTSIMPLESNAC </th>
					    <th scope="col">SITTRIBUTSUFRAMA </th>
					    <th scope="col">SITTRIBUTTRANSFENT </th>
					    <th scope="col">SITTRIBUTTV7 </th>
					    <th scope="col">SITTRIBUTTV8 </th>
					    <th scope="col">SITTRIBUT_MC </th>
					    <th scope="col">TIPOCALCULOGNRE </th>
					    <th scope="col">TIPOCALCULOGNRETAB </th>
					    <th scope="col">TIPOCALCULOGNRETRANSF </th>
					    <th scope="col">TIPOCALCULOGNRETRANSFTAB </th>
					    <th scope="col">USAALIQICMSSIMPLESNACIONAL </th>
					    <th scope="col">USABASEICMSREDUZIDA </th>
					    <th scope="col">USACFOPBNFPARABRINDE </th>
					    <th scope="col">USAISENCAOICMSVP </th>
					    <th scope="col">USAPAUTASEMIVA </th>
					    <th scope="col">USAPERCBASEREDASSOC </th>
					    <th scope="col">USAPERCBASEREDDIST </th>
					    <th scope="col">USAPERCBASEREDFARMA </th>
					    <th scope="col">USAPERCBASEREDHOSP </th>
					    <th scope="col">USAPERCBASEREDMEDICO </th>
					    <th scope="col">USAPERCBASEREDOPE </th>
					    <th scope="col">USAPERCBASEREDOPF </th>
					    <th scope="col">USAPERCBASEREDOPM </th>
					    <th scope="col">USAPMCBASEST </th>
					    <th scope="col">USAREDBASEICMSFONTEST </th>
					    <th scope="col">USAVALORULTENTBASEST </th>
					    <th scope="col">USAVALORULTENTBASEST2 </th>
					    <th scope="col">USAVALORULTENTBASESTFONTE </th>
					    <th scope="col">USAVLULTENTMEDIOBASEST </th>
					    <th scope="col">UTILIZAPARCADICFECP </th>
					    <th scope="col">UTILIZAPERCBASEREDPF </th>
					    <th scope="col">UTILIZAPERCBASEREDVENCONSIGN </th>
					    <th scope="col">VLPAUTAICMSINTEREST </th>
					    <th scope="col">VLPAUTASEMIVA </th>
					    <th scope="col">ZERARBASEICMSORGPUBSUFRAMA </th>
					    <th scope="col">DTIMPRESSAO </th>
					    <th scope="col">DTINICIOVIGENCIA </th>
					    <th scope="col">CODFILIALREC </th>
					    <th scope="col">DTTRANSACAOCC </th>
					    <th scope="col">CODCLICC </th>
					    <th scope="col">TIPOVENDORDESC </th>
					    <th scope="col">CORRESPONDENTE </th>
					    <th scope="col">ROTINAPAG </th>
					    <th scope="col">ROTINAFECHA </th>
					    <th scope="col">ROTINADESD </th>
					    <th scope="col">CNPJCREDENCCARTAO </th>
					    <th scope="col">NUMRESUMO </th>
					    <th scope="col">PDV </th>
					    <th scope="col">CODBAIXACARTAOREDE </th>
					    <th scope="col">ROTINAINSERT </th>
					    <th scope="col">CODEDITAL </th>
					    <th scope="col">CODCOBSEFAZ </th>
					    <th scope="col">BANDEIRACARTAO </th>
					    <th scope="col">RAZAOCREDENCCARTAO </th>
					    <th scope="col">IDPAGAMENTO </th>
					    <th scope="col">IDPAGAMENTOLOCAL </th>
					    <th scope="col">SERIALPOS </th>
					    <th scope="col">IDRESPFISCAL </th>
					    <th scope="col">VLTROCO </th>
					    <th scope="col">VALORMULTA </th>
					    <th scope="col">NUMPROTOOCHQ </th>
					    <th scope="col">HASH </th>
					    <th scope="col">VERSAOHASH </th>
					    <th scope="col">PASTAARQUIVOBOLETO </th>
					    <th scope="col">PERCOMLIQ </th>
					    <th scope="col">NUMOS </th>
					    <th scope="col">CREDPAGCOMISSMED </th>
					    <th scope="col">TIPOOPEREDITAL </th>
					    <th scope="col">DATACONSOLIDACAOPREFAT </th>
					    <th scope="col">TIPOCORBAN </th>
					    <th scope="col">VALORENTFUT </th>
					    <th scope="col">PROCESSADORTRANSPAGDIGITAL </th>
					    <th scope="col">NUMTRANSPAGDIGITAL </th>
					    <th scope="col">NSUPAGDIGITAL </th>
					    <th scope="col">CARTEIRADIGITAL </th>
					    <th scope="col">NOMECARTEIRADIGITAL </th>
					    <th scope="col">ARQUIVOSERASA</th>
					</tr>
				</thead>

<?php    

    if ($res) { 

    	
        while ($r = mysqli_fetch_assoc($res)) {
        	 

            $CODCLI= $r['CODCLI'];
			$PREST= $r['PREST'];
			$DUPLIC= $r['DUPLIC'];
			$VALOR= $r['VALOR'];
			$DTVENC= $r['DTVENC'];
			$CODCOB= $r['CODCOB'];
			$VPAGO= $r['VPAGO'];
			$TXPERM= $r['TXPERM'];
			$DTPAG= $r['DTPAG'];
			$DTEMISSAO= $r['DTEMISSAO'];
			$OPERACAO= $r['OPERACAO'];
			$DTDESC= $r['DTDESC'];
			$PERDESC= $r['PERDESC'];
			$CODFILIAL= $r['CODFILIAL'];
			$STATUS= $r['STATUS'];
			$CODUSUR= $r['CODUSUR'];
			$VALORDESC= $r['VALORDESC'];
			$DTULTALTER= $r['DTULTALTER'];
			$BOLETO= $r['BOLETO'];
			$NUMBANCO= $r['NUMBANCO'];
			$NUMAGENCIA= $r['NUMAGENCIA'];
			$NUMCHEQUE= $r['NUMCHEQUE'];
			$DTLANCCH= $r['DTLANCCH'];
			$DTBAIXA= $r['DTBAIXA'];
			$CODBAIXA= $r['CODBAIXA'];
			$NUMCAR= $r['NUMCAR'];
			$DTDESD= $r['DTDESD'];
			$DTFECHA= $r['DTFECHA'];
			$NOSSONUMBCO= $r['NOSSONUMBCO'];
			$OBS= $r['OBS'];
			$ALINEA= $r['ALINEA'];
			$NUMTRANS= $r['NUMTRANS'];
			$VLDEVOL= $r['VLDEVOL'];
			$DTDEVOL= $r['DTDEVOL'];
			$DTLANCPRORROG= $r['DTLANCPRORROG'];
			$DTVENCORIG= $r['DTVENCORIG'];
			$CODSUPERVISOR= $r['CODSUPERVISOR'];
			$CODBANCO= $r['CODBANCO'];
			$CODCOBBANCO= $r['CODCOBBANCO'];
			$DTCXMOT= $r['DTCXMOT'];
			$TIPO= $r['TIPO'];
			$LINHADIG= $r['LINHADIG'];
			$CODBARRA= $r['CODBARRA'];
			$DTBORDER= $r['DTBORDER'];
			$NUMTRANSVENDA= $r['NUMTRANSVENDA'];
			$CODFUNCCXMOT= $r['CODFUNCCXMOT'];
			$CODFUNCFECHA= $r['CODFUNCFECHA'];
			$VALORORIG= $r['VALORORIG'];
			$CODCOBORIG= $r['CODCOBORIG'];
			$CODEPTO= $r['CODEPTO'];
			$OBS2= $r['OBS2'];
			$NUMTRANSVENDOR= $r['NUMTRANSVENDOR'];
			$TXVENDORCLI= $r['TXVENDORCLI'];
			$DTVENDOR= $r['DTVENDOR'];
			$TXVENDORBCO= $r['TXVENDORBCO'];
			$DTFECHAVENDOR= $r['DTFECHAVENDOR'];
			$PERCOM= $r['PERCOM'];
			$VALORLIQCOM= $r['VALORLIQCOM'];
			$VLTXBOLETO= $r['VLTXBOLETO'];
			$TIPOPRORROG= $r['TIPOPRORROG'];
			$DTSAIDA= $r['DTSAIDA'];
			$CODFILIALNF= $r['CODFILIALNF'];
			$NOSSONUMBCO2= $r['NOSSONUMBCO2'];
			$CODMOTORISTA= $r['CODMOTORISTA'];
			$CODFUNCVALE= $r['CODFUNCVALE'];
			$CODHISTVALE= $r['CODHISTVALE'];
			$TIPOESTORNO= $r['TIPOESTORNO'];
			$DTESTORNO= $r['DTESTORNO'];
			$CODBANCOCUSTODIA= $r['CODBANCOCUSTODIA'];
			$DTCUSTODIA= $r['DTCUSTODIA'];
			$NUMCUSTODIA= $r['NUMCUSTODIA'];
			$DTPAGCOMISSAO= $r['DTPAGCOMISSAO'];
			$DVCOB= $r['DVCOB'];
			$CODFUNCULTALTER= $r['CODFUNCULTALTER'];
			$DTREGCARTEIRA= $r['DTREGCARTEIRA'];
			$NUMTRANSENTDEVCLI= $r['NUMTRANSENTDEVCLI'];
			$NUMPED= $r['NUMPED'];
			$DTINCLUSAO= $r['DTINCLUSAO'];
			$CODFUNCINC= $r['CODFUNCINC'];
			$CODFUNCDESD= $r['CODFUNCDESD'];
			$DTULTESTORNO= $r['DTULTESTORNO'];
			$CODFUNCESTORNO= $r['CODFUNCESTORNO'];
			$CODFUNCDESD1= $r['CODFUNCDESD1'];
			$CONTRATOVENDOR= $r['CONTRATOVENDOR'];
			$DTREMVENDOR= $r['DTREMVENDOR'];
			$CODFUNCVEND= $r['CODFUNCVEND'];
			$NUMCONTACORRENTE= $r['NUMCONTACORRENTE'];
			$HORADESD= $r['HORADESD'];
			$MINUTODESD= $r['MINUTODESD'];
			$HORAFECHA= $r['HORAFECHA'];
			$MINUTOFECHA= $r['MINUTOFECHA'];
			$CGCCPFCH= $r['CGCCPFCH'];
			$CODUSUR2= $r['CODUSUR2'];
			$NUMCHECKOUT= $r['NUMCHECKOUT'];
			$CODFUNCCHECKOUT= $r['CODFUNCCHECKOUT'];
			$COMPENSACAOBCO= $r['COMPENSACAOBCO'];
			$NUMLOTECUSTODIA= $r['NUMLOTECUSTODIA'];
			$DVAGENCIA= $r['DVAGENCIA'];
			$DVCONTA= $r['DVCONTA'];
			$DVCHEQUE= $r['DVCHEQUE'];
			$CODUSUR3= $r['CODUSUR3'];
			$ROTDESD= $r['ROTDESD'];
			$PERCOM2= $r['PERCOM2'];
			$PERCOM3= $r['PERCOM3'];
			$CODBANCOVENDOR= $r['CODBANCOVENDOR'];
			$TIPOPORTADOR= $r['TIPOPORTADOR'];
			$CODPORTADOR= $r['CODPORTADOR'];
			$CODOCORRBAIXA= $r['CODOCORRBAIXA'];
			$DIGITAO= $r['DIGITAO'];
			$NUMBORDERO= $r['NUMBORDERO'];
			$DTBORDERO= $r['DTBORDERO'];
			$CODFUNCBORDERO= $r['CODFUNCBORDERO'];
			$OBSFINANC= $r['OBSFINANC'];
			$VLTXVENDOR= $r['VLTXVENDOR'];
			$VLTXIOF= $r['VLTXIOF'];
			$NUMDIASCARENCIA= $r['NUMDIASCARENCIA'];
			$NUMDIASPRAZOPROTESTO= $r['NUMDIASPRAZOPROTESTO'];
			$CODBANCOCM= $r['CODBANCOCM'];
			$PERCOMSUP= $r['PERCOMSUP'];
			$VALORLIQCOMSUP= $r['VALORLIQCOMSUP'];
			$VLCONTRATOVENDOR= $r['VLCONTRATOVENDOR'];
			$VLCUSTODOCVENDOR= $r['VLCUSTODOCVENDOR'];
			$DTCANCEL= $r['DTCANCEL'];
			$CARTORIO= $r['CARTORIO'];
			$CODBLOCO= $r['CODBLOCO'];
			$CODCOBRADOR= $r['CODCOBRADOR'];
			$NUMRECIBO= $r['NUMRECIBO'];
			$CODESTABELECIMENTO= $r['CODESTABELECIMENTO'];
			$NUMCAIXAFISCAL= $r['NUMCAIXAFISCAL'];
			$NUMNEGOCIACAO= $r['NUMNEGOCIACAO'];
			$VALORDESCORIG= $r['VALORDESCORIG'];
			$NSUTEF= $r['NSUTEF'];
			$DTVENCVALE= $r['DTVENCVALE'];
			$GERACAORAZAOAUXILIAR= $r['GERACAORAZAOAUXILIAR'];
			$NUMECF= $r['NUMECF'];
			$DTEXPORTACAOSERVINT= $r['DTEXPORTACAOSERVINT'];
			$EXPORTADOSERVINT= $r['EXPORTADOSERVINT'];
			$IMPORTADOSERVPRINC= $r['IMPORTADOSERVPRINC'];
			$DTIMPORTACAOSERVPRINC= $r['DTIMPORTACAOSERVPRINC'];
			$AGRUPADO= $r['AGRUPADO'];
			$CODADMCARTAO= $r['CODADMCARTAO'];
			$PRESTTEF= $r['PRESTTEF'];
			$PARCELAMENTOTEF= $r['PARCELAMENTOTEF'];
			$CODUSURPGCOMISSAO= $r['CODUSURPGCOMISSAO'];
			$DTEMISSAOORIG= $r['DTEMISSAOORIG'];
			$ORIGEMBOLETO= $r['ORIGEMBOLETO'];
			$TIPOOPERACAOTEF= $r['TIPOOPERACAOTEF'];
			$CODBANDEIRATEF= $r['CODBANDEIRATEF'];
			$BLOQDESDEMITENTEDIF= $r['BLOQDESDEMITENTEDIF'];
			$CODAUTORIZACAOTEF= $r['CODAUTORIZACAOTEF'];
			$NUMCARTAO= $r['NUMCARTAO'];
			$NUMLOTECARTAOTEF= $r['NUMLOTECARTAOTEF'];
			$BAIXACONCILIADA= $r['BAIXACONCILIADA'];
			$CODFUNCCONCIL= $r['CODFUNCCONCIL'];
			$DTCONCIL= $r['DTCONCIL'];
			$DTCONCILVENC= $r['DTCONCILVENC'];
			$CODFUNCCONCILVENC= $r['CODFUNCCONCILVENC'];
			$SOMATXBOLETO= $r['SOMATXBOLETO'];
			$PERMITEESTORNO= $r['PERMITEESTORNO'];
			$VALORESTORNO= $r['VALORESTORNO'];
			$CODEMITENTEPEDIDO= $r['CODEMITENTEPEDIDO'];
			$DTDESCONTOTITBCO= $r['DTDESCONTOTITBCO'];
			$DATAHORAMINUTOBAIXA= $r['DATAHORAMINUTOBAIXA'];
			$DTPAGCOMISSAOPROF= $r['DTPAGCOMISSAOPROF'];
			$DTCRIACAO= $r['DTCRIACAO'];
			$CHEQUETERCEIRO= $r['CHEQUETERCEIRO'];
			$HORAESTORNO= $r['HORAESTORNO'];
			$MINUTOESTORNO= $r['MINUTOESTORNO'];
			$DTINCLUSAOMANUAL= $r['DTINCLUSAOMANUAL'];
			$DTBAIXACRED= $r['DTBAIXACRED'];
			$QTPARCELASPOS= $r['QTPARCELASPOS'];
			$CODCOBPOS= $r['CODCOBPOS'];
			$DTLIBERACAOFECHAMENTO= $r['DTLIBERACAOFECHAMENTO'];
			$CODBARRA2= $r['CODBARRA2'];
			$CODBANCOCM2= $r['CODBANCOCM2'];
			$LINHADIG2= $r['LINHADIG2'];
			$DTVENCANTERIOR= $r['DTVENCANTERIOR'];
			$CODAGENTECOBRANCA= $r['CODAGENTECOBRANCA'];
			$DTDEFAGENTE= $r['DTDEFAGENTE'];
			$DTPROCESSAMENTO= $r['DTPROCESSAMENTO'];
			$NUMREMESSA= $r['NUMREMESSA'];
			$NOMEARQUIVO= $r['NOMEARQUIVO'];
			$CODBCOCUSTODIA= $r['CODBCOCUSTODIA'];
			$OBSCUSTODIA= $r['OBSCUSTODIA'];
			$DTDESCONTADO= $r['DTDESCONTADO'];
			$DTABERTURACONTA= $r['DTABERTURACONTA'];
			$CODUSURANT= $r['CODUSURANT'];
			$CODFUNCPRORROG= $r['CODFUNCPRORROG'];
			$HOBPERCOMSUP= $r['HOBPERCOMSUP'];
			$HOBPERCOMMOT= $r['HOBPERCOMMOT'];
			$CODUSUR4= $r['CODUSUR4'];
			$PERCOM4= $r['PERCOM4'];
			$DTPAGCOMISSAO2= $r['DTPAGCOMISSAO2'];
			$DTPAGCOMISSAO3= $r['DTPAGCOMISSAO3'];
			$DTPAGCOMISSAO4= $r['DTPAGCOMISSAO4'];
			$CODBANCOBAIXA= $r['CODBANCOBAIXA'];
			$NUMCARANTERIOR= $r['NUMCARANTERIOR'];
			$CODPROFISSIONAL= $r['CODPROFISSIONAL'];
			$NUMSEQRETORNO= $r['NUMSEQRETORNO'];
			$ARQRETORNO= $r['ARQRETORNO'];
			$IDTITULO= $r['IDTITULO'];
			$IDCOB= $r['IDCOB'];
			$DTENVIOSERASA= $r['DTENVIOSERASA'];
			$DTLIBERACAOENTREGA= $r['DTLIBERACAOENTREGA'];
			$CODFUNCLIBERACAOENTREGA= $r['CODFUNCLIBERACAOENTREGA'];
			$DADOSECF= $r['DADOSECF'];
			$ROTINALANC= $r['ROTINALANC'];
			$PROTESTO= $r['PROTESTO'];
			$DTCXMOTHHMMSS= $r['DTCXMOTHHMMSS'];
			$VLRDESPBANCARIAS= $r['VLRDESPBANCARIAS'];
			$VLRDESPCARTORAIS= $r['VLRDESPCARTORAIS'];
			$VLRIMPRENDAORGPUB= $r['VLRIMPRENDAORGPUB'];
			$VLRCONTSOCIALORGPUB= $r['VLRCONTSOCIALORGPUB'];
			$VLRPISORGPUB= $r['VLRPISORGPUB'];
			$VLRCOFINSORGPUB= $r['VLRCOFINSORGPUB'];
			$VLRICMSRETORGPUB= $r['VLRICMSRETORGPUB'];
			$VLROUTRASDEDUCOESORGPUB= $r['VLROUTRASDEDUCOESORGPUB'];
			$VLTXIOFCOMPLEMENTAR= $r['VLTXIOFCOMPLEMENTAR'];
			$VLRTOTDESPESASEJUROS= $r['VLRTOTDESPESASEJUROS'];
			$CNPJCISP= $r['CNPJCISP'];
			$RESPONSAVELPAG= $r['RESPONSAVELPAG'];
			$NUMASSOCDNI= $r['NUMASSOCDNI'];
			$DTASSOCIADNICLI= $r['DTASSOCIADNICLI'];
			$CODFUNCDNICLI= $r['CODFUNCDNICLI'];
			$EQUIPLANC= $r['EQUIPLANC'];
			$ROTINALANCULTALT= $r['ROTINALANCULTALT'];
			$FUNCLANC= $r['FUNCLANC'];
			$DTRETIRADASERASA= $r['DTRETIRADASERASA'];
			$NUMTRANSVENDAST= $r['NUMTRANSVENDAST'];
			$NUMTRANSENT= $r['NUMTRANSENT'];
			$VLROUTROSACRESC= $r['VLROUTROSACRESC'];
			$STATUSSCI= $r['STATUSSCI'];
			$ENVIADOQIS= $r['ENVIADOQIS'];
			$CODSTATUSCOB= $r['CODSTATUSCOB'];
			$TXPERMPREVISTO= $r['TXPERMPREVISTO'];
			$DTRECEBIMENTOPREVISTO= $r['DTRECEBIMENTOPREVISTO'];
			$TXPERMPREVREAL= $r['TXPERMPREVREAL'];
			$OBSTITULO= $r['OBSTITULO'];
			$HISTORIGDESDOBRAMENTO= $r['HISTORIGDESDOBRAMENTO'];
			$CODCRED= $r['CODCRED'];
			$NUMCARTAOCRM= $r['NUMCARTAOCRM'];
			$NSUHOST= $r['NSUHOST'];
			$NUMFECHAMENTOMOVCX= $r['NUMFECHAMENTOMOVCX'];
			$DTMOVIMENTOCX= $r['DTMOVIMENTOCX'];
			$APLICAACRESCPJISENTA= $r['APLICAACRESCPJISENTA'];
			$CALCBASEREDICMSTRANSF= $r['CALCBASEREDICMSTRANSF'];
			$CALCULARICMSSITTRIBUT060= $r['CALCULARICMSSITTRIBUT060'];
			$CODFISCALBONIFIC= $r['CODFISCALBONIFIC'];
			$CODFISCALBONIFICINTER= $r['CODFISCALBONIFICINTER'];
			$CODFISCALBONIFICINTERNASC= $r['CODFISCALBONIFICINTERNASC'];
			$CODFISCALBROKERDEVENT= $r['CODFISCALBROKERDEVENT'];
			$CODFISCALDEVCLIBONIFICINTER= $r['CODFISCALDEVCLIBONIFICINTER'];
			$CODFISCALDEVCLIBONINTERNASC= $r['CODFISCALDEVCLIBONINTERNASC'];
			$CODFISCALDEVCLIINTER= $r['CODFISCALDEVCLIINTER'];
			$CODFISCALDEVCLIINTERNASC= $r['CODFISCALDEVCLIINTERNASC'];
			$CODFISCALDEVCLIPF= $r['CODFISCALDEVCLIPF'];
			$CODFISCALDEVCLIPFINTER= $r['CODFISCALDEVCLIPFINTER'];
			$CODFISCALDEVCLIPFINTERNASC= $r['CODFISCALDEVCLIPFINTERNASC'];
			$CODFISCALDEVCLIPROENTINTERNASC= $r['CODFISCALDEVCLIPROENTINTERNASC'];
			$CODFISCALDEVCLIPRONTAENT= $r['CODFISCALDEVCLIPRONTAENT'];
			$CODFISCALDEVCLIPRONTAENTINTER= $r['CODFISCALDEVCLIPRONTAENTINTER'];
			$CODFISCALDEVCOMODATOEST= $r['CODFISCALDEVCOMODATOEST'];
			$CODFISCALDEVCOMODATOINTER= $r['CODFISCALDEVCOMODATOINTER'];
			$CODFISCALDEVISENTOST= $r['CODFISCALDEVISENTOST'];
			$CODFISCALDEVISENTOSTINTER= $r['CODFISCALDEVISENTOSTINTER'];
			$CODFISCALDEVISENTOSTINTERNASC= $r['CODFISCALDEVISENTOSTINTERNASC'];
			$CODFISCALDEVISEORGAOPUBEST= $r['CODFISCALDEVISEORGAOPUBEST'];
			$CODFISCALDEVISEORGAOPUBINTER= $r['CODFISCALDEVISEORGAOPUBINTER'];
			$CODFISCALDEVMERCCONSIG= $r['CODFISCALDEVMERCCONSIG'];
			$CODFISCALDEVMERCCONSIGINTER= $r['CODFISCALDEVMERCCONSIGINTER'];
			$CODFISCALDEVTRANSF= $r['CODFISCALDEVTRANSF'];
			$CODFISCALDEVTRANSFENT= $r['CODFISCALDEVTRANSFENT'];
			$CODFISCALDEVTRANSFENTINTER= $r['CODFISCALDEVTRANSFENTINTER'];
			$CODFISCALDEVTRANSFINTER= $r['CODFISCALDEVTRANSFINTER'];
			$CODFISCALENTBENEFICEST= $r['CODFISCALENTBENEFICEST'];
			$CODFISCALENTBENEFICINTEREST= $r['CODFISCALENTBENEFICINTEREST'];
			$CODFISCALENTBENEFINTERNAC= $r['CODFISCALENTBENEFINTERNAC'];
			$CODFISCALENTDEVTRANSFVIR= $r['CODFISCALENTDEVTRANSFVIR'];
			$CODFISCALENTDEVTRANSFVIRINTER= $r['CODFISCALENTDEVTRANSFVIRINTER'];
			$CODFISCALENTDEVTRFFILRET= $r['CODFISCALENTDEVTRFFILRET'];
			$CODFISCALENTTRANSFVIR= $r['CODFISCALENTTRANSFVIR'];
			$CODFISCALENTTRANSFVIRINTER= $r['CODFISCALENTTRANSFVIRINTER'];
			$CODFISCALENTTRFFILRET= $r['CODFISCALENTTRFFILRET'];
			$CODFISCALENTTRFFILRETINTER= $r['CODFISCALENTTRFFILRETINTER'];
			$CODFISCALENVCOMODATOEST= $r['CODFISCALENVCOMODATOEST'];
			$CODFISCALENVCOMODATOINTER= $r['CODFISCALENVCOMODATOINTER'];
			$CODFISCALESTORNO= $r['CODFISCALESTORNO'];
			$CODFISCALESTORNOSAIDAINTER= $r['CODFISCALESTORNOSAIDAINTER'];
			$CODFISCALINTER= $r['CODFISCALINTER'];
			$CODFISCALINTERNASC= $r['CODFISCALINTERNASC'];
			$CODFISCALINTERNASCPF= $r['CODFISCALINTERNASCPF'];
			$CODFISCALINTERNASCTV9= $r['CODFISCALINTERNASCTV9'];
			$CODFISCALINTERPF= $r['CODFISCALINTERPF'];
			$CODFISCALINTERTV9= $r['CODFISCALINTERTV9'];
			$CODFISCALINTER_MC= $r['CODFISCALINTER_MC'];
			$CODFISCALISENTOST= $r['CODFISCALISENTOST'];
			$CODFISCALISENTOSTINTER= $r['CODFISCALISENTOSTINTER'];
			$CODFISCALISENTOSTINTERNASC= $r['CODFISCALISENTOSTINTERNASC'];
			$CODFISCALMERCCONSIG= $r['CODFISCALMERCCONSIG'];
			$CODFISCALMERCCONSIGINTER= $r['CODFISCALMERCCONSIGINTER'];
			$CODFISCALMERCCONSIGINTERNASC= $r['CODFISCALMERCCONSIGINTERNASC'];
			$CODFISCALPF= $r['CODFISCALPF'];
			$CODFISCALPRONTAENT= $r['CODFISCALPRONTAENT'];
			$CODFISCALPRONTAENTINTER= $r['CODFISCALPRONTAENTINTER'];
			$CODFISCALPRONTAENTINTERNASC= $r['CODFISCALPRONTAENTINTERNASC'];
			$CODFISCALSAIDBENEFEST= $r['CODFISCALSAIDBENEFEST'];
			$CODFISCALSAIDBENEFINTEREST= $r['CODFISCALSAIDBENEFINTEREST'];
			$CODFISCALSAIDBENEFINTERNAC= $r['CODFISCALSAIDBENEFINTERNAC'];
			$CODFISCALSAIDDEVTRANSFVIR= $r['CODFISCALSAIDDEVTRANSFVIR'];
			$CODFISCALSAIDDEVTRANSFVIRINTER= $r['CODFISCALSAIDDEVTRANSFVIRINTER'];
			$CODFISCALSAIDDEVTRFFILRET= $r['CODFISCALSAIDDEVTRFFILRET'];
			$CODFISCALSAIDTRANSFVIR= $r['CODFISCALSAIDTRANSFVIR'];
			$CODFISCALSAIDTRANSFVIRINTER= $r['CODFISCALSAIDTRANSFVIRINTER'];
			$CODFISCALSAIDTRFFILRET= $r['CODFISCALSAIDTRFFILRET'];
			$CODFISCALSAIDTRFFILRETINTER= $r['CODFISCALSAIDTRFFILRETINTER'];
			$CODFISCALSIMPENTFUT= $r['CODFISCALSIMPENTFUT'];
			$CODFISCALSIMPENTFUTINTER= $r['CODFISCALSIMPENTFUTINTER'];
			$CODFISCALSRESTSR= $r['CODFISCALSRESTSR'];
			$CODFISCALSREXT= $r['CODFISCALSREXT'];
			$CODFISCALSRINTE= $r['CODFISCALSRINTE'];
			$CODFISCALSTFONTEEST= $r['CODFISCALSTFONTEEST'];
			$CODFISCALSTFONTEINTEREST= $r['CODFISCALSTFONTEINTEREST'];
			$CODFISCALSTFONTEINTERNAC= $r['CODFISCALSTFONTEINTERNAC'];
			$CODFISCALSUFRAMA= $r['CODFISCALSUFRAMA'];
			$CODFISCALSUFRAMAINTER= $r['CODFISCALSUFRAMAINTER'];
			$CODFISCALTRANSF= $r['CODFISCALTRANSF'];
			$CODFISCALTRANSFENT= $r['CODFISCALTRANSFENT'];
			$CODFISCALTRANSFENTINTER= $r['CODFISCALTRANSFENTINTER'];
			$CODFISCALTRANSFF= $r['CODFISCALTRANSFF'];
			$CODFISCALTRANSFFINTER= $r['CODFISCALTRANSFFINTER'];
			$CODFISCALTRANSFFINTERNASC= $r['CODFISCALTRANSFFINTERNASC'];
			$CODFISCALTRANSFINTER= $r['CODFISCALTRANSFINTER'];
			$CODFISCALTRANSFINTERNASC= $r['CODFISCALTRANSFINTERNASC'];
			$CODFISCALTRANSFSAIDAEST= $r['CODFISCALTRANSFSAIDAEST'];
			$CODFISCALTRANSFSAIDAINT= $r['CODFISCALTRANSFSAIDAINT'];
			$CODFISCALTRIANGULAR= $r['CODFISCALTRIANGULAR'];
			$CODFISCALTRIANGULARINTER= $r['CODFISCALTRIANGULARINTER'];
			$CODFISCALTRIANGULARINTERNASC= $r['CODFISCALTRIANGULARINTERNASC'];
			$CODFISCALTRIANGULARINTERNASCPF= $r['CODFISCALTRIANGULARINTERNASCPF'];
			$CODFISCALTRIANGULARINTERPF= $r['CODFISCALTRIANGULARINTERPF'];
			$CODFISCALTRIANGULARPF= $r['CODFISCALTRIANGULARPF'];
			$CODFISCALTROCA= $r['CODFISCALTROCA'];
			$CODFISCALTROCAINTER= $r['CODFISCALTROCAINTER'];
			$CODFISCALTROCAINTERNASC= $r['CODFISCALTROCAINTERNASC'];
			$CODFISCALTV9= $r['CODFISCALTV9'];
			$CODFISCALVENDACONSIG= $r['CODFISCALVENDACONSIG'];
			$CODFISCALVENDACONSIGINTER= $r['CODFISCALVENDACONSIGINTER'];
			$CODFISCALVENDACONSIGINTERNASC= $r['CODFISCALVENDACONSIGINTERNASC'];
			$CODFISCALVENDAENTFUT= $r['CODFISCALVENDAENTFUT'];
			$CODFISCALVENDAENTFUTINTER= $r['CODFISCALVENDAENTFUTINTER'];
			$CODFISCALVENDAPRONTAENT= $r['CODFISCALVENDAPRONTAENT'];
			$CODFISCALVENDAPRONTAENTINTER= $r['CODFISCALVENDAPRONTAENTINTER'];
			$CODFISCALVENISEORGAOPUBEST= $r['CODFISCALVENISEORGAOPUBEST'];
			$CODFISCALVENISEORGAOPUBINTER= $r['CODFISCALVENISEORGAOPUBINTER'];
			$CODFISCENTDEVTRFFILRETINTER= $r['CODFISCENTDEVTRFFILRETINTER'];
			$CODFISCSAIDDEVTRFFILRETINTER= $r['CODFISCSAIDDEVTRFFILRETINTER'];
			$CODICMCONSUMIDOR= $r['CODICMCONSUMIDOR'];
			$CODICMNRPA= $r['CODICMNRPA'];
			$CODICMPF= $r['CODICMPF'];
			$CODICMPRODRURAL= $r['CODICMPRODRURAL'];
			$CODICMSIMPLESNAC= $r['CODICMSIMPLESNAC'];
			$CODICMTABNRPA= $r['CODICMTABNRPA'];
			$CODICMTABPF= $r['CODICMTABPF'];
			$CODICMTABTRANSF= $r['CODICMTABTRANSF'];
			$CODICM_MC= $r['CODICM_MC'];
			$CODPRODGNRE= $r['CODPRODGNRE'];
			$DESCICMSREDUZBASEICMS= $r['DESCICMSREDUZBASEICMS'];
			$DTFIMVIGENCIA= $r['DTFIMVIGENCIA'];
			$GERACODFISCALENTDEVTRANSFVIR= $r['GERACODFISCALENTDEVTRANSFVIR'];
			$GERACODFISCALENTTRANSFVIR= $r['GERACODFISCALENTTRANSFVIR'];
			$GERACODFISCALENTTRFFILRET= $r['GERACODFISCALENTTRFFILRET'];
			$GERACODFISCALSAIDDEVTRANSFVIR= $r['GERACODFISCALSAIDDEVTRANSFVIR'];
			$GERACODFISCALSAIDTRANSFVIR= $r['GERACODFISCALSAIDTRANSFVIR'];
			$GERACODFISCALSAIDTRFFILRET= $r['GERACODFISCALSAIDTRFFILRET'];
			$GERACODFISCENTDEVTRFFILRET= $r['GERACODFISCENTDEVTRFFILRET'];
			$GERACODFISCSAIDDEVTRFFILRET= $r['GERACODFISCSAIDDEVTRFFILRET'];
			$GRUPONFTRIBUT= $r['GRUPONFTRIBUT'];
			$ISENCAOICMSORGAOPUB= $r['ISENCAOICMSORGAOPUB'];
			$ISENCAOSTORGAOPUB= $r['ISENCAOSTORGAOPUB'];
			$ISENTAICMSBONIFIC= $r['ISENTAICMSBONIFIC'];
			$ISENTNUMEMPENHO= $r['ISENTNUMEMPENHO'];
			$IVAFONTE= $r['IVAFONTE'];
			$IVA_MC= $r['IVA_MC'];
			$MENSAGEM2= $r['MENSAGEM2'];
			$MENSAGEMNRPA= $r['MENSAGEMNRPA'];
			$MOSTRARPVENDASEMIPI= $r['MOSTRARPVENDASEMIPI'];
			$MOSTRARPVENDASEMST= $r['MOSTRARPVENDASEMST'];
			$OBSISEORGAOPUB1= $r['OBSISEORGAOPUB1'];
			$OBSISEORGAOPUB2= $r['OBSISEORGAOPUB2'];
			$OBSPF= $r['OBSPF'];
			$OBSPF2= $r['OBSPF2'];
			$OBSSIMPLES= $r['OBSSIMPLES'];
			$OBSSUFRAMA= $r['OBSSUFRAMA'];
			$OBSTRANSF= $r['OBSTRANSF'];
			$OBSTRIBUT_GNRE= $r['OBSTRIBUT_GNRE'];
			$OBS_INFORMATIVO= $r['OBS_INFORMATIVO'];
			$PAGTONOMEDESTTRANSF= $r['PAGTONOMEDESTTRANSF'];
			$PAGTONOMEDESTTRANSFTAB= $r['PAGTONOMEDESTTRANSFTAB'];
			$PAGTONOMEDOCLIENTE= $r['PAGTONOMEDOCLIENTE'];
			$PAGTONOMEDOREMETENTE= $r['PAGTONOMEDOREMETENTE'];
			$PAGTONOMEREMETTRANSF= $r['PAGTONOMEREMETTRANSF'];
			$PAGTONOMEREMETTRANSFTAB= $r['PAGTONOMEREMETTRANSFTAB'];
			$PAUTAFONTE= $r['PAUTAFONTE'];
			$PAUTA_MC= $r['PAUTA_MC'];
			$PERACRESCIMOCUSTO= $r['PERACRESCIMOCUSTO'];
			$PERACRESCIMOFUNCEP= $r['PERACRESCIMOFUNCEP'];
			$PERACRESCIMONRPA= $r['PERACRESCIMONRPA'];
			$PERACRESCIMOPF= $r['PERACRESCIMOPF'];
			$PERACRESCISMOPF= $r['PERACRESCISMOPF'];
			$PERBASEREDNRPA= $r['PERBASEREDNRPA'];
			$PERBASEREDSIMPLESNAC= $r['PERBASEREDSIMPLESNAC'];
			$PERBASEREDTRANSFENT= $r['PERBASEREDTRANSFENT'];
			$PERCACREPFVLACIMAPERMITIDO= $r['PERCACREPFVLACIMAPERMITIDO'];
			$PERCACRESCBASEPFEST= $r['PERCACRESCBASEPFEST'];
			$PERCACRESCBASEPFINT= $r['PERCACRESCBASEPFINT'];
			$PERCACRESICMSPF_PI= $r['PERCACRESICMSPF_PI'];
			$PERCAGREGADORST= $r['PERCAGREGADORST'];
			$PERCBASECALCREPASSE= $r['PERCBASECALCREPASSE'];
			$PERCBASEREDADICIONAL= $r['PERCBASEREDADICIONAL'];
			$PERCBASEREDADICIONALINTER= $r['PERCBASEREDADICIONALINTER'];
			$PERCBASEREDCONSUMIDOR= $r['PERCBASEREDCONSUMIDOR'];
			$PERCBASEREDST= $r['PERCBASEREDST'];
			$PERCBASEREDSTFONTE= $r['PERCBASEREDSTFONTE'];
			$PERCBASEREDSTTRANSF= $r['PERCBASEREDSTTRANSF'];
			$PERCBASEREDST_MC= $r['PERCBASEREDST_MC'];
			$PERCBASEREDTRANFSAID= $r['PERCBASEREDTRANFSAID'];
			$PERCBASERED_MC= $r['PERCBASERED_MC'];
			$PERCBASESTRJ= $r['PERCBASESTRJ'];
			$PERCDESCCOFINS= $r['PERCDESCCOFINS'];
			$PERCDESCPIS= $r['PERCDESCPIS'];
			$PERCDIFALIQUOTAS= $r['PERCDIFALIQUOTAS'];
			$PERCDIFALIQUOTASTAB= $r['PERCDIFALIQUOTASTAB'];
			$PERCICMSCOMPLEMENTAR= $r['PERCICMSCOMPLEMENTAR'];
			$PERCIVAMEX= $r['PERCIVAMEX'];
			$PERCIVAPAUTA= $r['PERCIVAPAUTA'];
			$PERCREDPVENDASIMPLESNAC= $r['PERCREDPVENDASIMPLESNAC'];
			$PERCTRIBUTOS= $r['PERCTRIBUTOS'];
			$PERDESCCUSTOTRANSF= $r['PERDESCCUSTOTRANSF'];
			$PERDESCICMISENCAO= $r['PERDESCICMISENCAO'];
			$PERDESCPISSUFRAMA= $r['PERDESCPISSUFRAMA'];
			$PERDESCREPASSE= $r['PERDESCREPASSE'];
			$PERDESCSUFRAMA= $r['PERDESCSUFRAMA'];
			$PERDIFEREIMENTOICMS= $r['PERDIFEREIMENTOICMS'];
			$PERPAUTAICMS= $r['PERPAUTAICMS'];
			$PERPAUTAICMSINTER= $r['PERPAUTAICMSINTER'];
			$PRODTRANSFTRIBRJ= $r['PRODTRANSFTRIBRJ'];
			$REDUZBASEICMDECRETOMARANHAO= $r['REDUZBASEICMDECRETOMARANHAO'];
			$SITTRIBSTFONTEPF= $r['SITTRIBSTFONTEPF'];
			$SITTRIBSTFONTEPJ= $r['SITTRIBSTFONTEPJ'];
			$SITTRIBUTBNFTV1= $r['SITTRIBUTBNFTV1'];
			$SITTRIBUTBONIFIC= $r['SITTRIBUTBONIFIC'];
			$SITTRIBUTECF= $r['SITTRIBUTECF'];
			$SITTRIBUTISENTOST= $r['SITTRIBUTISENTOST'];
			$SITTRIBUTISEORGAOPUB= $r['SITTRIBUTISEORGAOPUB'];
			$SITTRIBUTNRPA= $r['SITTRIBUTNRPA'];
			$SITTRIBUTORGAOPUB= $r['SITTRIBUTORGAOPUB'];
			$SITTRIBUTPAUTAICMS= $r['SITTRIBUTPAUTAICMS'];
			$SITTRIBUTPAUTAICMSPF= $r['SITTRIBUTPAUTAICMSPF'];
			$SITTRIBUTPF= $r['SITTRIBUTPF'];
			$SITTRIBUTSIMPLESNAC= $r['SITTRIBUTSIMPLESNAC'];
			$SITTRIBUTSUFRAMA= $r['SITTRIBUTSUFRAMA'];
			$SITTRIBUTTRANSFENT= $r['SITTRIBUTTRANSFENT'];
			$SITTRIBUTTV7= $r['SITTRIBUTTV7'];
			$SITTRIBUTTV8= $r['SITTRIBUTTV8'];
			$SITTRIBUT_MC= $r['SITTRIBUT_MC'];
			$TIPOCALCULOGNRE= $r['TIPOCALCULOGNRE'];
			$TIPOCALCULOGNRETAB= $r['TIPOCALCULOGNRETAB'];
			$TIPOCALCULOGNRETRANSF= $r['TIPOCALCULOGNRETRANSF'];
			$TIPOCALCULOGNRETRANSFTAB= $r['TIPOCALCULOGNRETRANSFTAB'];
			$USAALIQICMSSIMPLESNACIONAL= $r['USAALIQICMSSIMPLESNACIONAL'];
			$USABASEICMSREDUZIDA= $r['USABASEICMSREDUZIDA'];
			$USACFOPBNFPARABRINDE= $r['USACFOPBNFPARABRINDE'];
			$USAISENCAOICMSVP= $r['USAISENCAOICMSVP'];
			$USAPAUTASEMIVA= $r['USAPAUTASEMIVA'];
			$USAPERCBASEREDASSOC= $r['USAPERCBASEREDASSOC'];
			$USAPERCBASEREDDIST= $r['USAPERCBASEREDDIST'];
			$USAPERCBASEREDFARMA= $r['USAPERCBASEREDFARMA'];
			$USAPERCBASEREDHOSP= $r['USAPERCBASEREDHOSP'];
			$USAPERCBASEREDMEDICO= $r['USAPERCBASEREDMEDICO'];
			$USAPERCBASEREDOPE= $r['USAPERCBASEREDOPE'];
			$USAPERCBASEREDOPF= $r['USAPERCBASEREDOPF'];
			$USAPERCBASEREDOPM= $r['USAPERCBASEREDOPM'];
			$USAPMCBASEST= $r['USAPMCBASEST'];
			$USAREDBASEICMSFONTEST= $r['USAREDBASEICMSFONTEST'];
			$USAVALORULTENTBASEST= $r['USAVALORULTENTBASEST'];
			$USAVALORULTENTBASEST2= $r['USAVALORULTENTBASEST2'];
			$USAVALORULTENTBASESTFONTE= $r['USAVALORULTENTBASESTFONTE'];
			$USAVLULTENTMEDIOBASEST= $r['USAVLULTENTMEDIOBASEST'];
			$UTILIZAPARCADICFECP= $r['UTILIZAPARCADICFECP'];
			$UTILIZAPERCBASEREDPF= $r['UTILIZAPERCBASEREDPF'];
			$UTILIZAPERCBASEREDVENCONSIGN= $r['UTILIZAPERCBASEREDVENCONSIGN'];
			$VLPAUTAICMSINTEREST= $r['VLPAUTAICMSINTEREST'];
			$VLPAUTASEMIVA= $r['VLPAUTASEMIVA'];
			$ZERARBASEICMSORGPUBSUFRAMA= $r['ZERARBASEICMSORGPUBSUFRAMA'];
			$DTIMPRESSAO= $r['DTIMPRESSAO'];
			$DTINICIOVIGENCIA= $r['DTINICIOVIGENCIA'];
			$CODFILIALREC= $r['CODFILIALREC'];
			$DTTRANSACAOCC= $r['DTTRANSACAOCC'];
			$CODCLICC= $r['CODCLICC'];
			$TIPOVENDORDESC= $r['TIPOVENDORDESC'];
			$CORRESPONDENTE= $r['CORRESPONDENTE'];
			$ROTINAPAG= $r['ROTINAPAG'];
			$ROTINAFECHA= $r['ROTINAFECHA'];
			$ROTINADESD= $r['ROTINADESD'];
			$CNPJCREDENCCARTAO= $r['CNPJCREDENCCARTAO'];
			$NUMRESUMO= $r['NUMRESUMO'];
			$PDV= $r['PDV'];
			$CODBAIXACARTAOREDE= $r['CODBAIXACARTAOREDE'];
			$ROTINAINSERT= $r['ROTINAINSERT'];
			$CODEDITAL= $r['CODEDITAL'];
			$CODCOBSEFAZ= $r['CODCOBSEFAZ'];
			$BANDEIRACARTAO= $r['BANDEIRACARTAO'];
			$RAZAOCREDENCCARTAO= $r['RAZAOCREDENCCARTAO'];
			$IDPAGAMENTO= $r['IDPAGAMENTO'];
			$IDPAGAMENTOLOCAL= $r['IDPAGAMENTOLOCAL'];
			$SERIALPOS= $r['SERIALPOS'];
			$IDRESPFISCAL= $r['IDRESPFISCAL'];
			$VLTROCO= $r['VLTROCO'];
			$VALORMULTA= $r['VALORMULTA'];
			$NUMPROTOOCHQ= $r['NUMPROTOOCHQ'];
			$HASH= $r['HASH'];
			$VERSAOHASH= $r['VERSAOHASH'];
			$PASTAARQUIVOBOLETO= $r['PASTAARQUIVOBOLETO'];
			$PERCOMLIQ= $r['PERCOMLIQ'];
			$NUMOS= $r['NUMOS'];
			$CREDPAGCOMISSMED= $r['CREDPAGCOMISSMED'];
			$TIPOOPEREDITAL= $r['TIPOOPEREDITAL'];
			$DATACONSOLIDACAOPREFAT= $r['DATACONSOLIDACAOPREFAT'];
			$TIPOCORBAN= $r['TIPOCORBAN'];
			$VALORENTFUT= $r['VALORENTFUT'];
			$PROCESSADORTRANSPAGDIGITAL= $r['PROCESSADORTRANSPAGDIGITAL'];
			$NUMTRANSPAGDIGITAL= $r['NUMTRANSPAGDIGITAL'];
			$NSUPAGDIGITAL= $r['NSUPAGDIGITAL'];
			$CARTEIRADIGITAL= $r['CARTEIRADIGITAL'];
			$NOMECARTEIRADIGITAL= $r['NOMECARTEIRADIGITAL'];
			$ARQUIVOSERASA= $r['ARQUIVOSERASA'];

			?>
		
				<tbody>

				<tr>
						<td><?php echo($CODCLI );?></td>
					    <td><?php echo($PREST );?></td>
					    <td><?php echo($DUPLIC );?></td>
					    <td><?php echo($VALOR );?></td>
					    <td><?php echo($DTVENC );?></td>
					    <td><?php echo($CODCOB );?></td>
					    <td><?php echo($VPAGO );?></td>
					    <td><?php echo($TXPERM );?></td>
					    <td><?php echo($DTPAG );?></td>
					    <td><?php echo($DTEMISSAO );?></td>
					    <td><?php echo($OPERACAO );?></td>
					    <td><?php echo($DTDESC );?></td>
					    <td><?php echo($PERDESC );?></td>
					    <td><?php echo($CODFILIAL );?></td>
					    <td><?php echo($STATUS );?></td>
					    <td><?php echo($CODUSUR );?></td>
					    <td><?php echo($VALORDESC );?></td>
					    <td><?php echo($DTULTALTER );?></td>
					    <td><?php echo($BOLETO );?></td>
					    <td><?php echo($NUMBANCO );?></td>
					    <td><?php echo($NUMAGENCIA );?></td>
					    <td><?php echo($NUMCHEQUE );?></td>
					    <td><?php echo($DTLANCCH );?></td>
					    <td><?php echo($DTBAIXA );?></td>
					    <td><?php echo($CODBAIXA );?></td>
					    <td><?php echo($NUMCAR );?></td>
					    <td><?php echo($DTDESD );?></td>
					    <td><?php echo($DTFECHA );?></td>
					    <td><?php echo($NOSSONUMBCO );?></td>
					    <td><?php echo($OBS );?></td>
					    <td><?php echo($ALINEA );?></td>
					    <td><?php echo($NUMTRANS );?></td>
					    <td><?php echo($VLDEVOL );?></td>
					    <td><?php echo($DTDEVOL );?></td>
					    <td><?php echo($DTLANCPRORROG );?></td>
					    <td><?php echo($DTVENCORIG );?></td>
					    <td><?php echo($CODSUPERVISOR );?></td>
					    <td><?php echo($CODBANCO );?></td>
					    <td><?php echo($CODCOBBANCO );?></td>
					    <td><?php echo($DTCXMOT );?></td>
					    <td><?php echo($TIPO );?></td>
					    <td><?php echo($LINHADIG );?></td>
					    <td><?php echo($CODBARRA );?></td>
					    <td><?php echo($DTBORDER );?></td>
					    <td><?php echo($NUMTRANSVENDA );?></td>
					    <td><?php echo($CODFUNCCXMOT );?></td>
					    <td><?php echo($CODFUNCFECHA );?></td>
					    <td><?php echo($VALORORIG );?></td>
					    <td><?php echo($CODCOBORIG );?></td>
					    <td><?php echo($CODEPTO );?></td>
					    <td><?php echo($OBS2 );?></td>
					    <td><?php echo($NUMTRANSVENDOR );?></td>
					    <td><?php echo($TXVENDORCLI );?></td>
					    <td><?php echo($DTVENDOR );?></td>
					    <td><?php echo($TXVENDORBCO );?></td>
					    <td><?php echo($DTFECHAVENDOR );?></td>
					    <td><?php echo($PERCOM );?></td>
					    <td><?php echo($VALORLIQCOM );?></td>
					    <td><?php echo($VLTXBOLETO );?></td>
					    <td><?php echo($TIPOPRORROG );?></td>
					    <td><?php echo($DTSAIDA );?></td>
					    <td><?php echo($CODFILIALNF );?></td>
					    <td><?php echo($NOSSONUMBCO2 );?></td>
					    <td><?php echo($CODMOTORISTA );?></td>
					    <td><?php echo($CODFUNCVALE );?></td>
					    <td><?php echo($CODHISTVALE );?></td>
					    <td><?php echo($TIPOESTORNO );?></td>
					    <td><?php echo($DTESTORNO );?></td>
					    <td><?php echo($CODBANCOCUSTODIA );?></td>
					    <td><?php echo($DTCUSTODIA );?></td>
					    <td><?php echo($NUMCUSTODIA );?></td>
					    <td><?php echo($DTPAGCOMISSAO );?></td>
					    <td><?php echo($DVCOB );?></td>
					    <td><?php echo($CODFUNCULTALTER );?></td>
					    <td><?php echo($DTREGCARTEIRA );?></td>
					    <td><?php echo($NUMTRANSENTDEVCLI );?></td>
					    <td><?php echo($NUMPED );?></td>
					    <td><?php echo($DTINCLUSAO );?></td>
					    <td><?php echo($CODFUNCINC );?></td>
					    <td><?php echo($CODFUNCDESD );?></td>
					    <td><?php echo($DTULTESTORNO );?></td>
					    <td><?php echo($CODFUNCESTORNO );?></td>
					    <td><?php echo($CODFUNCDESD1 );?></td>
					    <td><?php echo($CONTRATOVENDOR );?></td>
					    <td><?php echo($DTREMVENDOR );?></td>
					    <td><?php echo($CODFUNCVEND );?></td>
					    <td><?php echo($NUMCONTACORRENTE );?></td>
					    <td><?php echo($HORADESD );?></td>
					    <td><?php echo($MINUTODESD );?></td>
					    <td><?php echo($HORAFECHA );?></td>
					    <td><?php echo($MINUTOFECHA );?></td>
					    <td><?php echo($CGCCPFCH );?></td>
					    <td><?php echo($CODUSUR2 );?></td>
					    <td><?php echo($NUMCHECKOUT );?></td>
					    <td><?php echo($CODFUNCCHECKOUT );?></td>
					    <td><?php echo($COMPENSACAOBCO );?></td>
					    <td><?php echo($NUMLOTECUSTODIA );?></td>
					    <td><?php echo($DVAGENCIA );?></td>
					    <td><?php echo($DVCONTA );?></td>
					    <td><?php echo($DVCHEQUE );?></td>
					    <td><?php echo($CODUSUR3 );?></td>
					    <td><?php echo($ROTDESD );?></td>
					    <td><?php echo($PERCOM2 );?></td>
					    <td><?php echo($PERCOM3 );?></td>
					    <td><?php echo($CODBANCOVENDOR );?></td>
					    <td><?php echo($TIPOPORTADOR );?></td>
					    <td><?php echo($CODPORTADOR );?></td>
					    <td><?php echo($CODOCORRBAIXA );?></td>
					    <td><?php echo($DIGITAO );?></td>
					    <td><?php echo($NUMBORDERO );?></td>
					    <td><?php echo($DTBORDERO );?></td>
					    <td><?php echo($CODFUNCBORDERO );?></td>
					    <td><?php echo($OBSFINANC );?></td>
					    <td><?php echo($VLTXVENDOR );?></td>
					    <td><?php echo($VLTXIOF );?></td>
					    <td><?php echo($NUMDIASCARENCIA );?></td>
					    <td><?php echo($NUMDIASPRAZOPROTESTO );?></td>
					    <td><?php echo($CODBANCOCM );?></td>
					    <td><?php echo($PERCOMSUP );?></td>
					    <td><?php echo($VALORLIQCOMSUP );?></td>
					    <td><?php echo($VLCONTRATOVENDOR );?></td>
					    <td><?php echo($VLCUSTODOCVENDOR );?></td>
					    <td><?php echo($DTCANCEL );?></td>
					    <td><?php echo($CARTORIO );?></td>
					    <td><?php echo($CODBLOCO );?></td>
					    <td><?php echo($CODCOBRADOR );?></td>
					    <td><?php echo($NUMRECIBO );?></td>
					    <td><?php echo($CODESTABELECIMENTO );?></td>
					    <td><?php echo($NUMCAIXAFISCAL );?></td>
					    <td><?php echo($NUMNEGOCIACAO );?></td>
					    <td><?php echo($VALORDESCORIG );?></td>
					    <td><?php echo($NSUTEF );?></td>
					    <td><?php echo($DTVENCVALE );?></td>
					    <td><?php echo($GERACAORAZAOAUXILIAR );?></td>
					    <td><?php echo($NUMECF );?></td>
					    <td><?php echo($DTEXPORTACAOSERVINT );?></td>
					    <td><?php echo($EXPORTADOSERVINT );?></td>
					    <td><?php echo($IMPORTADOSERVPRINC );?></td>
					    <td><?php echo($DTIMPORTACAOSERVPRINC );?></td>
					    <td><?php echo($AGRUPADO );?></td>
					    <td><?php echo($CODADMCARTAO );?></td>
					    <td><?php echo($PRESTTEF );?></td>
					    <td><?php echo($PARCELAMENTOTEF );?></td>
					    <td><?php echo($CODUSURPGCOMISSAO );?></td>
					    <td><?php echo($DTEMISSAOORIG );?></td>
					    <td><?php echo($ORIGEMBOLETO );?></td>
					    <td><?php echo($TIPOOPERACAOTEF );?></td>
					    <td><?php echo($CODBANDEIRATEF );?></td>
					    <td><?php echo($BLOQDESDEMITENTEDIF );?></td>
					    <td><?php echo($CODAUTORIZACAOTEF );?></td>
					    <td><?php echo($NUMCARTAO );?></td>
					    <td><?php echo($NUMLOTECARTAOTEF );?></td>
					    <td><?php echo($BAIXACONCILIADA );?></td>
					    <td><?php echo($CODFUNCCONCIL );?></td>
					    <td><?php echo($DTCONCIL );?></td>
					    <td><?php echo($DTCONCILVENC );?></td>
					    <td><?php echo($CODFUNCCONCILVENC );?></td>
					    <td><?php echo($SOMATXBOLETO );?></td>
					    <td><?php echo($PERMITEESTORNO );?></td>
					    <td><?php echo($VALORESTORNO );?></td>
					    <td><?php echo($CODEMITENTEPEDIDO );?></td>
					    <td><?php echo($DTDESCONTOTITBCO );?></td>
					    <td><?php echo($DATAHORAMINUTOBAIXA );?></td>
					    <td><?php echo($DTPAGCOMISSAOPROF );?></td>
					    <td><?php echo($DTCRIACAO );?></td>
					    <td><?php echo($CHEQUETERCEIRO );?></td>
					    <td><?php echo($HORAESTORNO );?></td>
					    <td><?php echo($MINUTOESTORNO );?></td>
					    <td><?php echo($DTINCLUSAOMANUAL );?></td>
					    <td><?php echo($DTBAIXACRED );?></td>
					    <td><?php echo($QTPARCELASPOS );?></td>
					    <td><?php echo($CODCOBPOS );?></td>
					    <td><?php echo($DTLIBERACAOFECHAMENTO );?></td>
					    <td><?php echo($CODBARRA2 );?></td>
					    <td><?php echo($CODBANCOCM2 );?></td>
					    <td><?php echo($LINHADIG2 );?></td>
					    <td><?php echo($DTVENCANTERIOR );?></td>
					    <td><?php echo($CODAGENTECOBRANCA );?></td>
					    <td><?php echo($DTDEFAGENTE );?></td>
					    <td><?php echo($DTPROCESSAMENTO );?></td>
					    <td><?php echo($NUMREMESSA );?></td>
					    <td><?php echo($NOMEARQUIVO );?></td>
					    <td><?php echo($CODBCOCUSTODIA );?></td>
					    <td><?php echo($OBSCUSTODIA );?></td>
					    <td><?php echo($DTDESCONTADO );?></td>
					    <td><?php echo($DTABERTURACONTA );?></td>
					    <td><?php echo($CODUSURANT );?></td>
					    <td><?php echo($CODFUNCPRORROG );?></td>
					    <td><?php echo($HOBPERCOMSUP );?></td>
					    <td><?php echo($HOBPERCOMMOT );?></td>
					    <td><?php echo($CODUSUR4 );?></td>
					    <td><?php echo($PERCOM4 );?></td>
					    <td><?php echo($DTPAGCOMISSAO2 );?></td>
					    <td><?php echo($DTPAGCOMISSAO3 );?></td>
					    <td><?php echo($DTPAGCOMISSAO4 );?></td>
					    <td><?php echo($CODBANCOBAIXA );?></td>
					    <td><?php echo($NUMCARANTERIOR );?></td>
					    <td><?php echo($CODPROFISSIONAL );?></td>
					    <td><?php echo($NUMSEQRETORNO );?></td>
					    <td><?php echo($ARQRETORNO );?></td>
					    <td><?php echo($IDTITULO );?></td>
					    <td><?php echo($IDCOB );?></td>
					    <td><?php echo($DTENVIOSERASA );?></td>
					    <td><?php echo($DTLIBERACAOENTREGA );?></td>
					    <td><?php echo($CODFUNCLIBERACAOENTREGA );?></td>
					    <td><?php echo($DADOSECF );?></td>
					    <td><?php echo($ROTINALANC );?></td>
					    <td><?php echo($PROTESTO );?></td>
					    <td><?php echo($DTCXMOtdHMMSS );?></td>
					    <td><?php echo($VLRDESPBANCARIAS );?></td>
					    <td><?php echo($VLRDESPCARTORAIS );?></td>
					    <td><?php echo($VLRIMPRENDAORGPUB );?></td>
					    <td><?php echo($VLRCONTSOCIALORGPUB );?></td>
					    <td><?php echo($VLRPISORGPUB );?></td>
					    <td><?php echo($VLRCOFINSORGPUB );?></td>
					    <td><?php echo($VLRICMSRETORGPUB );?></td>
					    <td><?php echo($VLROUTRASDEDUCOESORGPUB );?></td>
					    <td><?php echo($VLTXIOFCOMPLEMENTAR );?></td>
					    <td><?php echo($VLRTOTDESPESASEJUROS );?></td>
					    <td><?php echo($CNPJCISP );?></td>
					    <td><?php echo($RESPONSAVELPAG );?></td>
					    <td><?php echo($NUMASSOCDNI );?></td>
					    <td><?php echo($DTASSOCIADNICLI );?></td>
					    <td><?php echo($CODFUNCDNICLI );?></td>
					    <td><?php echo($EQUIPLANC );?></td>
					    <td><?php echo($ROTINALANCULTALT );?></td>
					    <td><?php echo($FUNCLANC );?></td>
					    <td><?php echo($DTRETIRADASERASA );?></td>
					    <td><?php echo($NUMTRANSVENDAST );?></td>
					    <td><?php echo($NUMTRANSENT );?></td>
					    <td><?php echo($VLROUTROSACRESC );?></td>
					    <td><?php echo($STATUSSCI );?></td>
					    <td><?php echo($ENVIADOQIS );?></td>
					    <td><?php echo($CODSTATUSCOB );?></td>
					    <td><?php echo($TXPERMPREVISTO );?></td>
					    <td><?php echo($DTRECEBIMENTOPREVISTO );?></td>
					    <td><?php echo($TXPERMPREVREAL );?></td>
					    <td><?php echo($OBSTITULO );?></td>
					    <td><?php echo($HISTORIGDESDOBRAMENTO );?></td>
					    <td><?php echo($CODCRED );?></td>
					    <td><?php echo($NUMCARTAOCRM );?></td>
					    <td><?php echo($NSUHOST );?></td>
					    <td><?php echo($NUMFECHAMENTOMOVCX );?></td>
					    <td><?php echo($DTMOVIMENTOCX );?></td>
					    <td><?php echo($APLICAACRESCPJISENTA );?></td>
					    <td><?php echo($CALCBASEREDICMSTRANSF );?></td>
					    <td><?php echo($CALCULARICMSSITTRIBUT060 );?></td>
					    <td><?php echo($CODFISCALBONIFIC );?></td>
					    <td><?php echo($CODFISCALBONIFICINTER );?></td>
					    <td><?php echo($CODFISCALBONIFICINTERNASC );?></td>
					    <td><?php echo($CODFISCALBROKERDEVENT );?></td>
					    <td><?php echo($CODFISCALDEVCLIBONIFICINTER );?></td>
					    <td><?php echo($CODFISCALDEVCLIBONINTERNASC );?></td>
					    <td><?php echo($CODFISCALDEVCLIINTER );?></td>
					    <td><?php echo($CODFISCALDEVCLIINTERNASC );?></td>
					    <td><?php echo($CODFISCALDEVCLIPF );?></td>
					    <td><?php echo($CODFISCALDEVCLIPFINTER );?></td>
					    <td><?php echo($CODFISCALDEVCLIPFINTERNASC );?></td>
					    <td><?php echo($CODFISCALDEVCLIPROENTINTERNASC );?></td>
					    <td><?php echo($CODFISCALDEVCLIPRONTAENT );?></td>
					    <td><?php echo($CODFISCALDEVCLIPRONTAENTINTER );?></td>
					    <td><?php echo($CODFISCALDEVCOMODATOEST );?></td>
					    <td><?php echo($CODFISCALDEVCOMODATOINTER );?></td>
					    <td><?php echo($CODFISCALDEVISENTOST );?></td>
					    <td><?php echo($CODFISCALDEVISENTOSTINTER );?></td>
					    <td><?php echo($CODFISCALDEVISENTOSTINTERNASC );?></td>
					    <td><?php echo($CODFISCALDEVISEORGAOPUBEST );?></td>
					    <td><?php echo($CODFISCALDEVISEORGAOPUBINTER );?></td>
					    <td><?php echo($CODFISCALDEVMERCCONSIG );?></td>
					    <td><?php echo($CODFISCALDEVMERCCONSIGINTER );?></td>
					    <td><?php echo($CODFISCALDEVTRANSF );?></td>
					    <td><?php echo($CODFISCALDEVTRANSFENT );?></td>
					    <td><?php echo($CODFISCALDEVTRANSFENTINTER );?></td>
					    <td><?php echo($CODFISCALDEVTRANSFINTER );?></td>
					    <td><?php echo($CODFISCALENTBENEFICEST );?></td>
					    <td><?php echo($CODFISCALENTBENEFICINTEREST );?></td>
					    <td><?php echo($CODFISCALENTBENEFINTERNAC );?></td>
					    <td><?php echo($CODFISCALENTDEVTRANSFVIR );?></td>
					    <td><?php echo($CODFISCALENTDEVTRANSFVIRINTER );?></td>
					    <td><?php echo($CODFISCALENTDEVTRFFILRET );?></td>
					    <td><?php echo($CODFISCALENTTRANSFVIR );?></td>
					    <td><?php echo($CODFISCALENTTRANSFVIRINTER );?></td>
					    <td><?php echo($CODFISCALENTTRFFILRET );?></td>
					    <td><?php echo($CODFISCALENTTRFFILRETINTER );?></td>
					    <td><?php echo($CODFISCALENVCOMODATOEST );?></td>
					    <td><?php echo($CODFISCALENVCOMODATOINTER );?></td>
					    <td><?php echo($CODFISCALESTORNO );?></td>
					    <td><?php echo($CODFISCALESTORNOSAIDAINTER );?></td>
					    <td><?php echo($CODFISCALINTER );?></td>
					    <td><?php echo($CODFISCALINTERNASC );?></td>
					    <td><?php echo($CODFISCALINTERNASCPF );?></td>
					    <td><?php echo($CODFISCALINTERNASCTV9 );?></td>
					    <td><?php echo($CODFISCALINTERPF );?></td>
					    <td><?php echo($CODFISCALINTERTV9 );?></td>
					    <td><?php echo($CODFISCALINTER_MC );?></td>
					    <td><?php echo($CODFISCALISENTOST );?></td>
					    <td><?php echo($CODFISCALISENTOSTINTER );?></td>
					    <td><?php echo($CODFISCALISENTOSTINTERNASC );?></td>
					    <td><?php echo($CODFISCALMERCCONSIG );?></td>
					    <td><?php echo($CODFISCALMERCCONSIGINTER );?></td>
					    <td><?php echo($CODFISCALMERCCONSIGINTERNASC );?></td>
					    <td><?php echo($CODFISCALPF );?></td>
					    <td><?php echo($CODFISCALPRONTAENT );?></td>
					    <td><?php echo($CODFISCALPRONTAENTINTER );?></td>
					    <td><?php echo($CODFISCALPRONTAENTINTERNASC );?></td>
					    <td><?php echo($CODFISCALSAIDBENEFEST );?></td>
					    <td><?php echo($CODFISCALSAIDBENEFINTEREST );?></td>
					    <td><?php echo($CODFISCALSAIDBENEFINTERNAC );?></td>
					    <td><?php echo($CODFISCALSAIDDEVTRANSFVIR );?></td>
					    <td><?php echo($CODFISCALSAIDDEVTRANSFVIRINTER );?></td>
					    <td><?php echo($CODFISCALSAIDDEVTRFFILRET );?></td>
					    <td><?php echo($CODFISCALSAIDTRANSFVIR );?></td>
					    <td><?php echo($CODFISCALSAIDTRANSFVIRINTER );?></td>
					    <td><?php echo($CODFISCALSAIDTRFFILRET );?></td>
					    <td><?php echo($CODFISCALSAIDTRFFILRETINTER );?></td>
					    <td><?php echo($CODFISCALSIMPENTFUT );?></td>
					    <td><?php echo($CODFISCALSIMPENTFUTINTER );?></td>
					    <td><?php echo($CODFISCALSRESTSR );?></td>
					    <td><?php echo($CODFISCALSREXT );?></td>
					    <td><?php echo($CODFISCALSRINTE );?></td>
					    <td><?php echo($CODFISCALSTFONTEEST );?></td>
					    <td><?php echo($CODFISCALSTFONTEINTEREST );?></td>
					    <td><?php echo($CODFISCALSTFONTEINTERNAC );?></td>
					    <td><?php echo($CODFISCALSUFRAMA );?></td>
					    <td><?php echo($CODFISCALSUFRAMAINTER );?></td>
					    <td><?php echo($CODFISCALTRANSF );?></td>
					    <td><?php echo($CODFISCALTRANSFENT );?></td>
					    <td><?php echo($CODFISCALTRANSFENTINTER );?></td>
					    <td><?php echo($CODFISCALTRANSFF );?></td>
					    <td><?php echo($CODFISCALTRANSFFINTER );?></td>
					    <td><?php echo($CODFISCALTRANSFFINTERNASC );?></td>
					    <td><?php echo($CODFISCALTRANSFINTER );?></td>
					    <td><?php echo($CODFISCALTRANSFINTERNASC );?></td>
					    <td><?php echo($CODFISCALTRANSFSAIDAEST );?></td>
					    <td><?php echo($CODFISCALTRANSFSAIDAINT );?></td>
					    <td><?php echo($CODFISCALTRIANGULAR );?></td>
					    <td><?php echo($CODFISCALTRIANGULARINTER );?></td>
					    <td><?php echo($CODFISCALTRIANGULARINTERNASC );?></td>
					    <td><?php echo($CODFISCALTRIANGULARINTERNASCPF );?></td>
					    <td><?php echo($CODFISCALTRIANGULARINTERPF );?></td>
					    <td><?php echo($CODFISCALTRIANGULARPF );?></td>
					    <td><?php echo($CODFISCALTROCA );?></td>
					    <td><?php echo($CODFISCALTROCAINTER );?></td>
					    <td><?php echo($CODFISCALTROCAINTERNASC );?></td>
					    <td><?php echo($CODFISCALTV9 );?></td>
					    <td><?php echo($CODFISCALVENDACONSIG );?></td>
					    <td><?php echo($CODFISCALVENDACONSIGINTER );?></td>
					    <td><?php echo($CODFISCALVENDACONSIGINTERNASC );?></td>
					    <td><?php echo($CODFISCALVENDAENTFUT );?></td>
					    <td><?php echo($CODFISCALVENDAENTFUTINTER );?></td>
					    <td><?php echo($CODFISCALVENDAPRONTAENT );?></td>
					    <td><?php echo($CODFISCALVENDAPRONTAENTINTER );?></td>
					    <td><?php echo($CODFISCALVENISEORGAOPUBEST );?></td>
					    <td><?php echo($CODFISCALVENISEORGAOPUBINTER );?></td>
					    <td><?php echo($CODFISCENTDEVTRFFILRETINTER );?></td>
					    <td><?php echo($CODFISCSAIDDEVTRFFILRETINTER );?></td>
					    <td><?php echo($CODICMCONSUMIDOR );?></td>
					    <td><?php echo($CODICMNRPA );?></td>
					    <td><?php echo($CODICMPF );?></td>
					    <td><?php echo($CODICMPRODRURAL );?></td>
					    <td><?php echo($CODICMSIMPLESNAC );?></td>
					    <td><?php echo($CODICMTABNRPA );?></td>
					    <td><?php echo($CODICMTABPF );?></td>
					    <td><?php echo($CODICMTABTRANSF );?></td>
					    <td><?php echo($CODICM_MC );?></td>
					    <td><?php echo($CODPRODGNRE );?></td>
					    <td><?php echo($DESCICMSREDUZBASEICMS );?></td>
					    <td><?php echo($DTFIMVIGENCIA );?></td>
					    <td><?php echo($GERACODFISCALENTDEVTRANSFVIR );?></td>
					    <td><?php echo($GERACODFISCALENTTRANSFVIR );?></td>
					    <td><?php echo($GERACODFISCALENTTRFFILRET );?></td>
					    <td><?php echo($GERACODFISCALSAIDDEVTRANSFVIR );?></td>
					    <td><?php echo($GERACODFISCALSAIDTRANSFVIR );?></td>
					    <td><?php echo($GERACODFISCALSAIDTRFFILRET );?></td>
					    <td><?php echo($GERACODFISCENTDEVTRFFILRET );?></td>
					    <td><?php echo($GERACODFISCSAIDDEVTRFFILRET );?></td>
					    <td><?php echo($GRUPONFTRIBUT );?></td>
					    <td><?php echo($ISENCAOICMSORGAOPUB );?></td>
					    <td><?php echo($ISENCAOSTORGAOPUB );?></td>
					    <td><?php echo($ISENTAICMSBONIFIC );?></td>
					    <td><?php echo($ISENTNUMEMPENHO );?></td>
					    <td><?php echo($IVAFONTE );?></td>
					    <td><?php echo($IVA_MC );?></td>
					    <td><?php echo($MENSAGEM2 );?></td>
					    <td><?php echo($MENSAGEMNRPA );?></td>
					    <td><?php echo($MOSTRARPVENDASEMIPI );?></td>
					    <td><?php echo($MOSTRARPVENDASEMST );?></td>
					    <td><?php echo($OBSISEORGAOPUB1 );?></td>
					    <td><?php echo($OBSISEORGAOPUB2 );?></td>
					    <td><?php echo($OBSPF );?></td>
					    <td><?php echo($OBSPF2 );?></td>
					    <td><?php echo($OBSSIMPLES );?></td>
					    <td><?php echo($OBSSUFRAMA );?></td>
					    <td><?php echo($OBSTRANSF );?></td>
					    <td><?php echo($OBSTRIBUT_GNRE );?></td>
					    <td><?php echo($OBS_INFORMATIVO );?></td>
					    <td><?php echo($PAGTONOMEDESTTRANSF );?></td>
					    <td><?php echo($PAGTONOMEDESTTRANSFTAB );?></td>
					    <td><?php echo($PAGTONOMEDOCLIENTE );?></td>
					    <td><?php echo($PAGTONOMEDOREMETENTE );?></td>
					    <td><?php echo($PAGTONOMEREMETTRANSF );?></td>
					    <td><?php echo($PAGTONOMEREMETTRANSFTAB );?></td>
					    <td><?php echo($PAUTAFONTE );?></td>
					    <td><?php echo($PAUTA_MC );?></td>
					    <td><?php echo($PERACRESCIMOCUSTO );?></td>
					    <td><?php echo($PERACRESCIMOFUNCEP );?></td>
					    <td><?php echo($PERACRESCIMONRPA );?></td>
					    <td><?php echo($PERACRESCIMOPF );?></td>
					    <td><?php echo($PERACRESCISMOPF );?></td>
					    <td><?php echo($PERBASEREDNRPA );?></td>
					    <td><?php echo($PERBASEREDSIMPLESNAC );?></td>
					    <td><?php echo($PERBASEREDTRANSFENT );?></td>
					    <td><?php echo($PERCACREPFVLACIMAPERMITIDO );?></td>
					    <td><?php echo($PERCACRESCBASEPFEST );?></td>
					    <td><?php echo($PERCACRESCBASEPFINT );?></td>
					    <td><?php echo($PERCACRESICMSPF_PI );?></td>
					    <td><?php echo($PERCAGREGADORST );?></td>
					    <td><?php echo($PERCBASECALCREPASSE );?></td>
					    <td><?php echo($PERCBASEREDADICIONAL );?></td>
					    <td><?php echo($PERCBASEREDADICIONALINTER );?></td>
					    <td><?php echo($PERCBASEREDCONSUMIDOR );?></td>
					    <td><?php echo($PERCBASEREDST );?></td>
					    <td><?php echo($PERCBASEREDSTFONTE );?></td>
					    <td><?php echo($PERCBASEREDSTTRANSF );?></td>
					    <td><?php echo($PERCBASEREDST_MC );?></td>
					    <td><?php echo($PERCBASEREDTRANFSAID );?></td>
					    <td><?php echo($PERCBASERED_MC );?></td>
					    <td><?php echo($PERCBASESTRJ );?></td>
					    <td><?php echo($PERCDESCCOFINS );?></td>
					    <td><?php echo($PERCDESCPIS );?></td>
					    <td><?php echo($PERCDIFALIQUOTAS );?></td>
					    <td><?php echo($PERCDIFALIQUOTASTAB );?></td>
					    <td><?php echo($PERCICMSCOMPLEMENTAR );?></td>
					    <td><?php echo($PERCIVAMEX );?></td>
					    <td><?php echo($PERCIVAPAUTA );?></td>
					    <td><?php echo($PERCREDPVENDASIMPLESNAC );?></td>
					    <td><?php echo($PERCTRIBUTOS );?></td>
					    <td><?php echo($PERDESCCUSTOTRANSF );?></td>
					    <td><?php echo($PERDESCICMISENCAO );?></td>
					    <td><?php echo($PERDESCPISSUFRAMA );?></td>
					    <td><?php echo($PERDESCREPASSE );?></td>
					    <td><?php echo($PERDESCSUFRAMA );?></td>
					    <td><?php echo($PERDIFEREIMENTOICMS );?></td>
					    <td><?php echo($PERPAUTAICMS );?></td>
					    <td><?php echo($PERPAUTAICMSINTER );?></td>
					    <td><?php echo($PRODTRANSFTRIBRJ );?></td>
					    <td><?php echo($REDUZBASEICMDECRETOMARANHAO );?></td>
					    <td><?php echo($SITTRIBSTFONTEPF );?></td>
					    <td><?php echo($SITTRIBSTFONTEPJ );?></td>
					    <td><?php echo($SITTRIBUTBNFTV1 );?></td>
					    <td><?php echo($SITTRIBUTBONIFIC );?></td>
					    <td><?php echo($SITTRIBUTECF );?></td>
					    <td><?php echo($SITTRIBUTISENTOST );?></td>
					    <td><?php echo($SITTRIBUTISEORGAOPUB );?></td>
					    <td><?php echo($SITTRIBUTNRPA );?></td>
					    <td><?php echo($SITTRIBUTORGAOPUB );?></td>
					    <td><?php echo($SITTRIBUTPAUTAICMS );?></td>
					    <td><?php echo($SITTRIBUTPAUTAICMSPF );?></td>
					    <td><?php echo($SITTRIBUTPF );?></td>
					    <td><?php echo($SITTRIBUTSIMPLESNAC );?></td>
					    <td><?php echo($SITTRIBUTSUFRAMA );?></td>
					    <td><?php echo($SITTRIBUTTRANSFENT );?></td>
					    <td><?php echo($SITTRIBUTTV7 );?></td>
					    <td><?php echo($SITTRIBUTTV8 );?></td>
					    <td><?php echo($SITTRIBUT_MC );?></td>
					    <td><?php echo($TIPOCALCULOGNRE );?></td>
					    <td><?php echo($TIPOCALCULOGNRETAB );?></td>
					    <td><?php echo($TIPOCALCULOGNRETRANSF );?></td>
					    <td><?php echo($TIPOCALCULOGNRETRANSFTAB );?></td>
					    <td><?php echo($USAALIQICMSSIMPLESNACIONAL );?></td>
					    <td><?php echo($USABASEICMSREDUZIDA );?></td>
					    <td><?php echo($USACFOPBNFPARABRINDE );?></td>
					    <td><?php echo($USAISENCAOICMSVP );?></td>
					    <td><?php echo($USAPAUTASEMIVA );?></td>
					    <td><?php echo($USAPERCBASEREDASSOC );?></td>
					    <td><?php echo($USAPERCBASEREDDIST );?></td>
					    <td><?php echo($USAPERCBASEREDFARMA );?></td>
					    <td><?php echo($USAPERCBASEREDHOSP );?></td>
					    <td><?php echo($USAPERCBASEREDMEDICO );?></td>
					    <td><?php echo($USAPERCBASEREDOPE );?></td>
					    <td><?php echo($USAPERCBASEREDOPF );?></td>
					    <td><?php echo($USAPERCBASEREDOPM );?></td>
					    <td><?php echo($USAPMCBASEST );?></td>
					    <td><?php echo($USAREDBASEICMSFONTEST );?></td>
					    <td><?php echo($USAVALORULTENTBASEST );?></td>
					    <td><?php echo($USAVALORULTENTBASEST2 );?></td>
					    <td><?php echo($USAVALORULTENTBASESTFONTE );?></td>
					    <td><?php echo($USAVLULTENTMEDIOBASEST );?></td>
					    <td><?php echo($UTILIZAPARCADICFECP );?></td>
					    <td><?php echo($UTILIZAPERCBASEREDPF );?></td>
					    <td><?php echo($UTILIZAPERCBASEREDVENCONSIGN );?></td>
					    <td><?php echo($VLPAUTAICMSINTEREST );?></td>
					    <td><?php echo($VLPAUTASEMIVA );?></td>
					    <td><?php echo($ZERARBASEICMSORGPUBSUFRAMA );?></td>
					    <td><?php echo($DTIMPRESSAO );?></td>
					    <td><?php echo($DTINICIOVIGENCIA );?></td>
					    <td><?php echo($CODFILIALREC );?></td>
					    <td><?php echo($DTTRANSACAOCC );?></td>
					    <td><?php echo($CODCLICC );?></td>
					    <td><?php echo($TIPOVENDORDESC );?></td>
					    <td><?php echo($CORRESPONDENTE );?></td>
					    <td><?php echo($ROTINAPAG );?></td>
					    <td><?php echo($ROTINAFECHA );?></td>
					    <td><?php echo($ROTINADESD );?></td>
					    <td><?php echo($CNPJCREDENCCARTAO );?></td>
					    <td><?php echo($NUMRESUMO );?></td>
					    <td><?php echo($PDV );?></td>
					    <td><?php echo($CODBAIXACARTAOREDE );?></td>
					    <td><?php echo($ROTINAINSERT );?></td>
					    <td><?php echo($CODEDITAL );?></td>
					    <td><?php echo($CODCOBSEFAZ );?></td>
					    <td><?php echo($BANDEIRACARTAO );?></td>
					    <td><?php echo($RAZAOCREDENCCARTAO );?></td>
					    <td><?php echo($IDPAGAMENTO );?></td>
					    <td><?php echo($IDPAGAMENTOLOCAL );?></td>
					    <td><?php echo($SERIALPOS );?></td>
					    <td><?php echo($IDRESPFISCAL );?></td>
					    <td><?php echo($VLTROCO );?></td>
					    <td><?php echo($VALORMULTA );?></td>
					    <td><?php echo($NUMPROTOOCHQ );?></td>
					    <td><?php echo($HASH );?></td>
					    <td><?php echo($VERSAOHASH );?></td>
					    <td><?php echo($PASTAARQUIVOBOLETO );?></td>
					    <td><?php echo($PERCOMLIQ );?></td>
					    <td><?php echo($NUMOS );?></td>
					    <td><?php echo($CREDPAGCOMISSMED );?></td>
					    <td><?php echo($TIPOOPEREDITAL );?></td>
					    <td><?php echo($DATACONSOLIDACAOPREFAT );?></td>
					    <td><?php echo($TIPOCORBAN );?></td>
					    <td><?php echo($VALORENTFUT );?></td>
					    <td><?php echo($PROCESSADORTRANSPAGDIGITAL );?></td>
					    <td><?php echo($NUMTRANSPAGDIGITAL );?></td>
					    <td><?php echo($NSUPAGDIGITAL );?></td>
					    <td><?php echo($CARTEIRADIGITAL );?></td>
					    <td><?php echo($NOMECARTEIRADIGITAL );?></td>
					    <td><?php echo($ARQUIVOSERASA);?></td>
					</tr>
				</tbody>

			

			
			<?php

        
        } // fechamento do while
        ?>
        		</table>
        	</div> <!-- fim table responsive -->

        	<!-- formulario para mudar a data -->

        	<div>
				<form action="duplicata.php" method="POST">

				<div class="form-group col-sm-3 ">

			    <label for="dtaPagamento">Data de Pagamento</label>
			    <input type="text" name="dtaPagamento" class="form-control" id="dtaPagamento" value="<?php echo($DTPAG );?>">

				  </div>

				  <input type="hidden" name="CODCLI" value="<?php echo($CODCLI);?>">
				  <input type="hidden" name="PREST" value="<?php echo($PREST);?>">

					<input type="hidden" name="DUPLIC" value="<?php echo($DUPLIC) ;?>">




				  
				  <div class="form-group col-sm-3 ">
				    <label for="alterardtaPagamento">altera Data de Pagamento</label>
				    <input type="date" name="alterardtaPagamento" class="form-control" id="alterardtaPagamento" placeholder="<?php echo($DTPAG );?>">
				  </div>
		

					<div class="-sm-2 buton ">
						<input type="submit" class="btn btn-primary " name='salvarData' value="Salvar">
					</div>

					</form>
				</div>

        </div>	<!-- fim classe container -->
        <?php  
    }else{
    	echo("sem dados");
    } //fechamento do if
// } else {
//     //header("location: index.php");
//         var_dump($_SESSION);
//     die;

// }

