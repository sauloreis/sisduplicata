<?php
	session_start();
	//titulo da pagina	
	$title = 'Grupo 4 Mares - Login';
	//chamando o cabeçalho html
  	require_once('includes/head.php');
  
?>
    <div class="container">
				
      <form class="form-signin" method="POST" action="valida.php">
		  <figure class="figure mb-4">
		  <br> <img src="imagens/imagem.png" width="300px" class="img-fluid figure-img"></br>
		  </figure>
	 
				<div class="Erro">
				  						
				
						<?php 

						if(isset($_SESSION['error'])){
								
							echo "<div class='alert alert-danger' role='alert'>";						
							
									echo isset($_SESSION['error']['campvazio'])?$_SESSION['error']['campvazio']:'';
									echo isset($_SESSION['error']['loginErro'])?$_SESSION['error']['loginErro']:'' ;
									echo isset($_SESSION['error']['notAuthorized'])?$_SESSION['error']['notAuthorized']:'' ;

									unset(
										$_SESSION['error']										
									);
									
							echo"</div>";
						}
							
							
						?>
					
						
				</div>

			<h4 class="form-signin-heading">Área Restrita</h4>
			
			<label for="inputEmail" class="sr-only">Email</label>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" >
			
			<label for="inputPassword" class="sr-only">Senha</label>
			<input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" >
			
			<button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
			<p class="d-flex mt-3 justify-content-center ">ou</p>
			<a class="d-flex mt-3 justify-content-center " href="cadastro.php"  >Cadastrar-se</a>
			
      </form>
	  
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  
  <?php //require_once('includes/footer.php');?>