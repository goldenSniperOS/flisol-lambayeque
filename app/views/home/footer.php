<div id="location-info">
	<div id="map-canvas"></div>
	<div class="container">
		<div class="row">
			<div id="hotel-info" class="col-xs-12 col-md-5 col-md-offset-1">
				<h3>Necesitas Más información?</h3>
				<div class="hotel">
					<h4>Ubicación</h4>
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
<footer>
	<div class="container">
		<div class="row">
		<h3 class="text-center">NUESTROS AUSPICIADORES</h3>
			<div class="col-xs-3 col-sm-3 col-md-2">
				<div class="ausp"></div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-2">
				<div class="ausp"></div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-2">
				<div class="ausp"></div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-2">
				<div class="ausp"></div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-2">
				<div class="ausp"></div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-2">
				<div class="ausp"></div>
			</div>
	</div>
</footer>
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