<?php

/*
*
*   fomulario da duplicata junto com o inicio da tabela
*	separei para nao suja muito o php 
*
*/

?>



<div class="container mt=4">
	


	<div class="row mb-4 ">
		<div class="alertaSucesso">
			<div id='alertBalon-erro' class="alert alert-success alert-dismissible" style='display:none' role="alert">
				<strong id="txtAlert"></strong>


			</div>
		</div>
	</div>
	<form class="col-md-12" id="searchduplicata">
		<div class="row">
			<div class="col-md-4 ">
				<label for="codduplicata">Duplicata</label>
				<input type="text" name="DUPLIC" class="form-control" id="codduplicata" placeholder="Duplicata">
			</div>
			<div class="col-md-2  ">
				<label for="prestacao">Prestação</label>
				<input type="text" name="PREST" class="form-control" id="prestacao" placeholder="Prestação">
			</div>

			<div class="col-md-4 ">
				<label for="codCliente">Cod Cliente</label>
				<input type="text" name="CODCLI" class="form-control" id="codCliente" placeholder="Codigo do Cliente">
			</div>

			<div class="col-sm-2 buton pt-4 ">
				<input type="submit" class="btn btn-primary " id="buttonSearch" name='buttonSearch' value="Procurar">
			</div>
		</div>

	</form>

</div>
<?php // Imprimi erro na tela se tive algum erro
?>

<div class="Erro">
	<?php
	$erro = isset($_SESSION['error'])   ? $_SESSION['error']     : "";
	echo (isset($erro['campoVazio'])    ? $erro['campoVazio']    : "");
	echo (isset($erro['somenteNumber']) ? $erro['somenteNumber'] : "");
	echo (isset($erro['naoEcontrado'])  ? $erro['naoEcontrado']  : "");
	$nrowsAffcted = isset($_SESSION['nrowsAffcted']) ? $_SESSION['nrowsAffcted'] : "";
	echo (isset($_SESSION['nrowsAffcted']) ? $_SESSION['nrowsAffcted'] : "");

	?>

</div>
<div class="alertaSucesso">
	<div id='alertBalon' class="alert alert-success alert-dismissible fade " role="alert">
		<strong id="txtAlert">Atualizado com sucesso!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
</div>





<div class="table-responsive">
	<table class="table  table-condensed table-bordered table-hover table-sm">

		<thead>
			<tr>
				<th>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
						<label class="form-check-label" for="flexCheckDefault">

						</label>
					</div>
				</th>
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
				<!-- <th scope="col">VALORDESC </th>
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
					    <th scope="col">CODBANCO </th> -->
				<!-- <th scope="col">CODCOBBANCO </th>
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
					    <th scope="col">ARQUIVOSERASA</th> -->
			</tr>
		</thead>
		<tbody>
			<script src="js/form.js"></script>