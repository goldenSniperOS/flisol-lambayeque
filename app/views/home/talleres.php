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
</head>
<body>
	<?php include 'header.php'; ?>	
	<section class="form-register">
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
					      <img src="<?=URL::to('img/index.svg')?>" alt="...">
					      <div class="carousel-caption">
					        Primer Slide
					      </div>
					    </div>
					    <div class="item">
					      <img src="<?=URL::to('img/index.svg')?>" alt="...">
					      <div class="carousel-caption">
					        Segundo Slide
					      </div>
					    </div>
					    <div class="item">
					      <img src="<?=URL::to('img/index.svg')?>" alt="...">
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
				<div class="col-lg-4"></div>
			</div>
			<div class="container">
				<div class="row">
						
						
						<div class="col-xs-12">
							
						</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php'; ?>	
</body>
</html>



