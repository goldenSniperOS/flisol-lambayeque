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
						<a href="detail.php" class="more-info-link">quiero más información</a>
						<a href="detail.php" class="btn btn-custom">QUIERO INSCRIBIRME!</a>	
					</div>
					
				</div>
			</div>
			
		</article>
		<div id="location-info">
				<div id="map-canvas"></div>
				<div class="container">
					<div class="row">
						<div id="hotel-info" class="col-xs-12 col-md-5 col-md-offset-1">
							<h3>Necesitas Más información?</h3>
							<div class="hotel">
								<h4>Ubicación:</h4>
								<p>Abrán 2 marcas en el mapa, la inferior es el Laboratorio de Computación y la superior el Auditorio General</p>
							</div>
							<div class="hotel">
								<h4>Contáctanos</h4>
								<p><a href="#"><i class="fa fa-facebook-official fa-3x" style="color:#47639E;"></i></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
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
	<script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script>
		var map;
		var zoomW = 0;
		
		if($(window).width() <= 768 )
			zoomW = 17;
		else
			zoomW = 18;
		
		function initialize() 
		{
			var mapOptions = {
				zoom: zoomW,
				scrollwheel: false,
				center: new google.maps.LatLng(-6.706740, -79.909563)
			};
			map = new google.maps.Map(document.getElementById('map-canvas'),
			mapOptions);

			var marker = new google.maps.Marker({
			      position: new google.maps.LatLng(-6.707220, -79.909257),
			      map: map,
			      title: 'Laboratorio de Computacion'
			  });

			marker = new google.maps.Marker({
			      position: new google.maps.LatLng(-6.706347, -79.907634),
			      map: map,
			      title: 'Auditorio'
			  });	
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</body>
</html>



