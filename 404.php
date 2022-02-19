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
            <br> <img src="<?php echo (DIR_IMG);?>imagem.png" width="300px" class="img-fluid figure-img"></br>
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
	
	
	
	
	
	

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  
  <?php //require_once('includes/footer.php');?>