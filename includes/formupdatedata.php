<?
// fim da tag tbody da table, table
// fomulario pra mudar a data  
?>

					</tbody>	
        		</table>
        	</div> <!-- fim table responsive -->

        	<!-- formulario para mudar a data -->

        	<div>
				<form action="duplicata.php" method="POST">

					<div class="form-group col-sm-3 ">

					    <label for="dtaPagamento">Data de Pagamento</label>
					    <input type="text" name="dtaPagamento" class="form-control" id="dtaPagamento" value="<?php //echo($DTPAG );?>">

					</div>

					<input type="hidden" name="CODCLI" value="<?php //echo(isset($CODCLI)?$CODCLI: "");?>">
					<input type="hidden" name="PREST" value="<?php //echo(isset($PREST)?$PREST: "");?>">
					<input type="hidden" name="DUPLIC" value="<?php //echo(isset($DUPLIC)?$DUPLIC: "") ;?>">
				  
				  	<div class="form-group col-sm-3 ">
				   		 <label for="alterardtaPagamento">altera Data de Pagamento</label>
				    	<input type="date" name="alterardtaPagamento" class="form-control" id="alterardtaPagamento" placeholder="<?php // echo($DTPAG );?>">
				 	 </div>
		

					<div class="-sm-2 buton ">
						<input type="submit" class="btn btn-primary " name='salvarData' value="Salvar">
					</div>

				</form>
			</div>

        </div>	<!-- fim classe container -->