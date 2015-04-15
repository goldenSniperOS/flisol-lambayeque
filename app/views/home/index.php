<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FLISOL Lambayeque 2015</title>
	<?=HTML::style('css/bootstrap.min.css')?>
	<?=HTML::style('css/header.css')?>
	<?=HTML::style('css/workshop.css')?>
	<?=HTML::style('css/footer_location.css')?>
	<?=HTML::style('css/font-awesome.min.css')?>
	<?=HTML::style('css/form-register.css')?>
	<?=HTML::style('css/bootstrap-select.min.css')?>
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
							<a href="#" class="btn boton-shared" data-event="conferencias">ME APUNTO!</a>
						</div>
					</div>
				</div>
		</article>
		<article id="w2" class="workshop workshop-right">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-4 col-lg-6 date-info">
						<h3 class="highlighted">HORARIO: MAÑANA</h3>
							<h3 class="highlighted">INGRESO GRATIS</h3>
							<h3 class="highlighted">VACANTES LIMITADAS</h3>
							<h3 class="highlighted">25 de abril</h3>
					</div>
					<div class="col-xs-12 col-sm-9 col-md-8 col-lg-6 main-info">
						<h2>Talleres sobre Software Libre FLISOL 2015</h2>
						<p>Momento para aprender en lo práctico el uso de software libre, como la programacion del mismo.
							Disfruta de la introducción a muchos lenguajes y mucho software
						</p>
						<a href="#" class="btn boton-shared" data-event="talleres">QUIERO INSCRIBIRME!</a>
					</div>

				</div>
			</div>
		</article>
	</div>
	<div class="form-register">
		<div class="container">
			<div class="row">
				<?php if(isset($mensaje)) echo '<div class="alert alert-success">'.$mensaje.'</div>' ?>
				<div class="col-lg-8">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					      <?=HTML::image('img/index.jpg')?>
					      <div class="carousel-caption">
					        Primer Slide
					      </div>
					    </div>
					    <div class="item">
					      <?=HTML::image('img/index.jpg')?>
					      <div class="carousel-caption">
					        Segundo Slide
					      </div>
					    </div>
					    <div class="item">
					      <?=HTML::image('img/index.jpg')?>
					      <div class="carousel-caption">
					        Tercer Slide
					      </div>
					    </div>
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
				<div class="col-lg-4 form-content">
					<form id="register-form" action="" method='post'>
						<div class="form-group">
			                <div class="input-group">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			                    <input type="text" placeholder="Nombres" name="nombres" required autofocus class="form-control">
			                </div>
			            </div>
			            <div class="form-group">
			                <div class="input-group">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			                    <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" name="apellidos" required>
			                </div>
			            </div>
			            <div class="form-group">
			                <div class="input-group">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
			                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
			                </div>
			            </div>
						<div class="form-group">
		                    <select id="Taller" multiple title="¿A que eventos te gustaria asistir?" class="form-control selectpicker" name="evento[]" required>
		                    <?php
		                    	if($eventos)
		                    		foreach($eventos as $evento)
		                                echo "<option value=".$evento->cod_evento.">".$evento->tipo_evento.' - '.$evento->nombre."</option>";
		                    ?>
		                    </select>
	                    </div>
	                    <div class="form-group">
			                <div class="input-group">
			                    <span class="input-group-addon"><span class="text-captha-suma">8 + 6 =</span></span>
			                    <input type="text" placeholder="La suma es?" class="form-control input-captha" name="captha-suma" required>
			                </div>
			            </div>
			            <button class="btn btn-lg btn-primary btn-block btn-success botonreg" type="submit">Enviar</button>
		            </form>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>



