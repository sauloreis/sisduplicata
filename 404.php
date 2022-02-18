<?php
session_start();


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<?php
	$title = 'Grupo 4 Mares - Login';
	//chamando o cabeçalho html
  	require_once('includes/head.php');
  
?>
    <div class="container">

    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <figure class="figure mb-4">
            <br> <img src="imagens/imagem.png" width="300px" class="img-fluid figure-img"></br>
            </figure>
        </div>    
    </div>
    <div class="row  d-flex justify-content-center">
        <div class="col-md-4">
            <h1 style=" text-align:center;"> <span style="color:red;font-size:5em;">404</span> </h1>
            <h2 style="text-align:center;">Erro page not found!</h2>
        </div>
    </div>
    <div class="row  d-flex justify-content-center">
        <div class="col-md-4">
            <h3 style=" text-align:center;"> <a href="login">ir para pagina inicial</a></span> </h3>
            
        </div>
    </div>
        
					
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


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  
  <?php //require_once('includes/footer.php');?>