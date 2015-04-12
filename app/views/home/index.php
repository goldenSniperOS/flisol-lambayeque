<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>First Page Of Index</title>
	<?=HTML::style('css/bootstrap.min.css')?>
	<?=HTML::style('css/header.css')?>
	<?=HTML::style('css/workshop.css')?>
	<?=HTML::style('css/footer_location.css')?>
	<?=HTML::style('css/font-awesome.min.css')?>
</head>
<body>
	<?php include 'header.php'; ?>	
	<div id="workshop-list">
		<article id="w1" class="workshop workshop-left">		
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-sm-push-9 col-md-4 col-md-push-8 col-lg-6 col-lg-push-6 date-info">
							<h3 class="highlighted">HORARIO: MAÑANA</h3>
							<h3 class="highlighted">INGRESO GRATIS</h3>
							<h3 class="highlighted">25 de abril</h3>							
						</div>
						<div class="col-xs-12 col-sm-9 col-sm-pull-3 col-md-8 col-md-pull-4 col-lg-6 col-lg-pull-6 main-info">
							<h2>Conferencias sobre Software Libre FLISOL 2015</h2>
							<p>Disfruta de una mañana llena de experiencias con y nuevos conocimientos que te harán entender mejor el Software Libre</p>
							<a href="<?=URL::to('home/talleres')?>" class="btn btn-custom">ME APUNTO!</a>
							<a href="<?=URL::to('home/talleres')?>" class="more-info-link">quiero más información</a>
						</div>
					</div>
				</div>
		</article>
		<article id="w2" class="workshop workshop-right">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-4 col-lg-6 date-info">
						<h3 class="highlighted">HORARIO: TARDE</h3>
							<h3 class="highlighted">INGRESO GRATIS</h3>
							<h3 class="highlighted">VACANTES LIMITADAS</h3>
							<h3 class="highlighted">25 de abril</h3>
					</div>
					<div class="col-xs-12 col-sm-9 col-md-8 col-lg-6 main-info">
						<h2>Talleres sobre Software Libre FLISOL 2015</h2>
						<p>Momento para aprender en lo práctico el uso de software libre, como la programacion del mismo.
							Disfruta de la introducción a muchos lenguajes y mucho software
						</p>
						<a href="<?=URL::to('home/conferencias')?>" class="more-info-link">quiero más información</a>
						<a href="<?=URL::to('home/conferencias')?>" class="btn btn-custom">QUIERO INSCRIBIRME!</a>	
					</div>
					
				</div>
			</div>
		</article>
		<article class="margin-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-4 col-lg-6">	
						<div class="well">
							<a href="#" class="boton-shared" onclick="shareOnFacebook();">Compartir para inscribirme</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-9 col-md-8 col-lg-6">
					</div>
					
				</div>
			</div>
		</article>
		</div>
	<?php include 'footer.php'; ?>	

</body>
</html>



