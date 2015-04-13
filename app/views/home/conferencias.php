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
	<div class="form-register">
		<div class="container">
			<div class="row">
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
					      <?=HTML::image('img/index.jpg')?>"
					      <div class="carousel-caption">
					        Primer Slide
					      </div>
					    </div>
					    <div class="item">
					      <?=HTML::image('img/index.jpg')?>"
					      <div class="carousel-caption">
					        Segundo Slide
					      </div>
					    </div>
					    <div class="item">
					      <?=HTML::image('img/index.jpg')?>"
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
					<form action="<?=URL::to('home/registrarconferencia')?>" method='post'>
						<div class="form-group">
			                <div class="input-group">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			                    <input type="text" placeholder="Nombres" name="nombres" required autofocus class="form-control">
			                </div>
			            </div>
			            <div class="form-group">
			                <div class="input-group">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			                    <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" name="password" required>
			                </div>
			            </div>
			            <div class="form-group">
			                <div class="input-group">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
			                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
			                </div>
			            </div>				
						<div class="form-group">
		                    <select id="Taller" title="¿En que Conferencia Deseas Inscribirte?" class="form-control selectpicker" name="taller" required>
		                    <?php 
		                    	if($eventos)
		                    		foreach($eventos as $evento)
		                               	if($evento->tipo_evento == 1)
		                                	echo "<option value=".$evento->nombre.">".$evento->nombre."</option>";	                    	
		                    ?>
		                    </select>
	                    </div>  
			            <button class="btn btn-lg btn-primary btn-block btn-success botonreg" type="submit">Registrar Inscripción</button>
		            </form>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>	
</body>
</html>



