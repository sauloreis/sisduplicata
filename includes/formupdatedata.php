<?php
// fim da tag tbody da table, table
// fomulario pra mudar a data  
?>

					</tbody>	
        		</table>
        	</div> <!-- fim table responsive -->

        	<?php //formulario para mudar a data ?>

        	<div class="row mt-5">
				<form class="col-sm-12"  id="atualizarData">
					<div class="row">
						<div class="form-group col-sm-3 ">
							<label for="dtaPagamento">Data de Pagamento</label>
							<input type="text" name="dtaPagamento" class="form-control" id="dtaPagamento" value="<?php //echo($DTPAG );?>">
						</div>

						<input type="hidden" name="CODCLI" id="CODCLI"  value="">
						<input type="hidden" name="PREST"  id="PREST"  value="">
						<input type="hidden" name="DUPLIC" id="DUPLIC"  value="">
				  
						<div class="form-group col-sm-3 ">
							<label for="alterardtaPagamento">altera Data de Pagamento</label>
							<input type="date" name="alterardtaPagamento" class="form-control" id="alterardtaPagamento" placeholder="<?php // echo($DTPAG );?>" required>
						</div>
		

						<div class="col-sm-2 buton pt-4 ">
							<input type="" class="btn btn-primary " id="salvarData" name='salvarData' value="Salvar">
						</div>
					</div>
				</div>
					

					

				</form>
			</div>

        </div>	<!-- fim classe container -->