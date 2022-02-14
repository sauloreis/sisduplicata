<?php
session_start();

var_dump($_GET['url']);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<?php
	$title = 'Grupo 4 Mares - Login';
	require_once('includes/head.php');
	?>

</head>

<body>
	<div class="container">

		<form class="form-signin" method="POST" action="valida.php">
			<div class="Erro">
				<p class="text-center text-danger">
					<?php

					echo isset($_SESSION['msgUserNotAutorized']) ? $_SESSION['msgUserNotAutorized'] : '';
					echo isset($_SESSION['campvazio']) ? $_SESSION['campvazio'] : '';
					echo isset($_SESSION['loginErro']) ? $_SESSION['loginErro'] : '';


					unset(
						$_SESSION['loginErro'],
						$_SESSION['campvazio'],
						$_SESSION['msgUserNotAutorized']
					);


					?>
				</p>

			</div>

			<h2 class="form-signin-heading">Área Restrita</h2>

			<label for="inputEmail" class="sr-only">Email</label>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email">

			<label for="inputPassword" class="sr-only">Senha</label>
			<input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha">

			<button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
			<p class="d-flex mt-3 justify-content-center ">ou</p>
			<a class="d-flex mt-3 justify-content-center " href="cadastro.php"  >Cadastre-se</a>
			
      </form>
	  
		<p class="text-center text-success">
			<?php
			if (isset($_SESSION['logindeslogado'])) {
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
	</div> <!-- /container -->


	<!-- footer -->
	<footer class="footer text-center">

		<?php require_once('includes/footer.php'); ?>

	</footer><!-- End footer -->
	<script src="<?php echo(PATH);?>assets/plugins/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="<?php echo(PATH);?>assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo(PATH);?>js/app-style-switcher.js"></script>
	<!--Wave Effects -->
	<script src="<?php echo(PATH);?>js/waves.js"></script>
	<!--Menu sidebar -->
	<script src="<?php echo(PATH);?>js/sidebarmenu.js"></script>
	<!--Custom JavaScript -->
	<script src="<?php echo(PATH);?>js/custom.js"></script>
	<!--This page JavaScript -->
	<!--flot chart-->
	<script src="<?php echo(PATH);?>assets/plugins/flot/jquery.flot.js"></script>
	<script src="<?php echo(PATH);?>assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
	<script src="<?php echo(PATH);?>js/pages/dashboards/dashboard1.js"></script>

</body>

</html>