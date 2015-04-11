<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>First Page Of Index</title>
	<?=HTML::style('css/bootstrap.min.css')?>
	<?=HTML::style('css/header.css')?>
	<?=HTML::style('css/workshop.css')?>
</head>
<body>
	<?php include 'header.php'; ?>	

	<div id="workshop-list">
		<article id="w1" class="workshop workshop-left">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-sm-push-9 col-md-4 col-md-push-8 col-lg-6 col-lg-push-6 date-info">
						<h3 class="highlighted"><strong>W21</strong> 13/14 de abril</h3>
						<h3 class="highlighted">20 plazas</h3>
						<h3 class="highlighted">99 €</h3>
					</div>
					<div class="col-xs-12 col-sm-9 col-sm-pull-3 col-md-8 col-md-pull-4 col-lg-6 col-lg-pull-6 main-info">
						<h2>Desarrolla front-end like a boss aprendiendo Bootstrap 3</h2>
						<p>Disfruta de un fin de semana diferente aprendiendo con <a href="#">Marcos González</a> y <a href="#">Armando Sotoca</a>.</p>
						<a href="detail.php" class="btn btn-custom">ME APUNTO!</a>
						<a href="detail.php" class="more-info-link">quiero más información</a>
					</div>
				</div>
			</div>
		</article>
		<article id="w2" class="workshop workshop-right">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-4 col-lg-6 date-info">
						<h3 class="highlighted"><strong>W38</strong> 19/20 de abril</h3>
						<h3 class="highlighted">15 plazas</h3>
						<h3 class="highlighted">120 €</h3>
					</div>
					<div class="col-xs-12 col-sm-9 col-md-8 col-lg-6 main-info">
						<h2>Desarrolla aplicaciones multiplataforma con Adobe AIR</h2>
						<p>Sorpréndete de lo fácil que puede ser crera apps para iOS y Android con este workshop impartido por <a href="#">Alberto Ordás</a>.</p>
						<a href="detail.php" class="more-info-link">quiero más información</a>
						<a href="detail.php" class="btn btn-custom">ME APUNTO!</a>	
					</div>
					
				</div>
			</div>
		</article>
	</div>




	<?=HTML::script('js/jquery-1.11.2.min.js')?>	
	<?=HTML::script('js/bootstrap.min.js')?>
	<script>
		function toggleMobileMenu() 
		{
			var $mobileMenu = $('#mobile-main-menu');	
			$mobileMenu.slideToggle('fast');
		}

		$(document).ready(function() {
			$('#mobile-menu-button').on('click', toggleMobileMenu);
		});
	</script>
</body>
</html>



