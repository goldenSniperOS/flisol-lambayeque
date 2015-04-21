<div id="location-info">
	<div id="map-canvas"></div>
	<div class="container">
		<div class="row">
			<div id="hotel-info" class="col-xs-12 col-md-5 col-md-offset-1">
				<h3>Necesitas Más información?</h3>
				<div class="hotel">
					<h4>Ubicación</h4>
					<p>Abrán 2 marcas en el mapa, la superior es el Laboratorio de Computación y la inferior el Auditorio</p>
				</div>
				<div class="hotel">
					<h4>Contáctanos</h4>
					<p>flisol.lambayeque.libre@gmail.com</p>
					<p><a href="https://www.facebook.com/flisolLambayeque?fref=ts"><i class="fa fa-facebook-official fa-3x" style="color:#47639E;"></i></a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<footer>
	<div class="container">
		<div class="row">
		<h3 class="text-center">NUESTROS AUSPICIADORES</h3>
			<div class="col-xs-3 col-sm-3 col-md-2">
				<div class="ausp"></div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-2">
				<div class="hackspace"></div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-2">
				<div class="ceti"></div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-2">
				<div class="adyl"></div>
			</div>
			<div class="clearfix visible-xs"></div>
			<div class="col-xs-3 col-sm-3 col-md-2">
				<div class="epici"></div>
			</div>

			<div class="col-xs-3 col-sm-3 col-md-2">
				<div class="epis"></div>
			</div>
	</div>
</footer>
	<?=HTML::script('js/jquery-1.11.2.min.js')?>
	<?=HTML::script('js/bootstrap.min.js')?>
	<?=HTML::script('js/bootstrap-select.min.js')?>
	<?=HTML::script('js/scripts.js')?>
	<script>
		function toggleMobileMenu()
		{
			var $mobileMenu = $('#mobile-main-menu');
			$mobileMenu.slideToggle('fast');
		}

		$(document).ready(function() {
			$('#mobile-menu-button').on('click', toggleMobileMenu);
			$('.selectpicker').selectpicker();
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

		<?php 
			if($mensaje)
				echo " $('html, body').animate({scrollTop: 1050}, 1000);"; 
		?>

		function initialize()
		{
			var mapOptions = {
				zoom: zoomW,
				scrollwheel: false,
				center: new google.maps.LatLng(-6.707478, -79.910511)
			};
			map = new google.maps.Map(document.getElementById('map-canvas'),
			mapOptions);

			var marker = new google.maps.Marker({
			      position: new google.maps.LatLng(-6.707220, -79.909257),
			      map: map,
			      title: 'Laboratorios de Computacion'
			  });

			marker = new google.maps.Marker({
			      position: new google.maps.LatLng(-6.708010, -79.907572),
			      map: map,
			      title: 'Auditorio'
			  });
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		window.fbAsyncInit = function() {
		    FB.init({
		      appId                : "1579839032302060",
		      status               : true, // check login status
		      xfbml      : true,
      		  version    : 'v2.3',
		      frictionlessRequests : true,
		      cookie:  false,
		    });
		  };

		  // Load the SDK Asynchronously
		  (function(d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) return;
		    js = d.createElement(s); js.id = id;
		    js.src = "//connect.facebook.net/es_ES/all.js";
		    fjs.parentNode.insertBefore(js, fjs);
		  }(document, 'script', 'facebook-jssdk'));

		  $('.boton-shared').click(function(e)
		  {
		  	$('html, body').animate({
		        scrollTop: 1050
		    }, 1000);
		  });

	</script>
