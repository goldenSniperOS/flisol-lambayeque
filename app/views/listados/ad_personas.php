<html>
	<head>
		
	<?=HTML::style('css/bootstrap.min.css')?>
	<?=HTML::style('css/header.css')?>
	<?=HTML::style('css/workshop.css')?>
	<?=HTML::style('css/footer_location.css')?>
	<?=HTML::style('css/font-awesome.min.css')?>
	<?=HTML::style('css/form-register.css')?>
	<?=HTML::style('css/bootstrap-select.min.css')?>

	<style type="text/css">
  		th,td 
  		{
			padding:5px;
  		}
		

	</style>


	</head>
	<body >

		<div class="container">
			
			<div class="row">
					
					
					
			</div>

			<div class="row" >
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>apellidos</th>
							<th>nombres</th>
							<th>asistencia</th>
							<th>pago</th>
							<th>accion</th>
						</tr>
					</thead>
				<?php
			if(isset($persona)){
				foreach($persona as $people){
	        		
					if($people->confirm_asis==1)
					{
						$msg="checked";
					}
					else
					{
						$msg="";
					}

					if($people->confirm_pago==1)
					{
						$msg2="checked";
					}
					else
					{
						$msg2="";
					}

	        		echo "<tr><td  id='asistente_ape_$people->cod_asistente'>".$people->apellidos."</td>
	        			<td  id='asistente_nom_$people->cod_asistente'>".$people->nombres."</td>
						<td><input type='checkbox'".$msg." class='asistir' id='$people->cod_asistente' data-evento='$people->cod_evento'/></td>
						<td><input type='checkbox'".$msg2." class='pagar' id='$people->cod_asistente' data-evento='$people->cod_evento' /></td>
						<td><a href='#' class='act'  data-toggle='modal' data-target='#myModal' id='$people->cod_asistente'>modificar</a></td>
	        				</tr>";
	       		}
			}


		    ?>
</table>
			</div>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Modificando Datos Participante</h4>
			      </div>
			      <div class="modal-body">
			        <form action="">
			        	
						<div class="form-group">
			                <div class="input-group">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			                    <input placeholder="Nombres" name="nombres" required="" id="nom_asistente_input" autofocus="" class="form-control" type="text">
			                </div>
			            </div>
			            <div class="form-group">
			                <div class="input-group">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			                    <input class="form-control" placeholder="Apellidos" id="ape_asistente_input" name="apellidos" required="" type="text">
			                </div>
			            </div>
			            <div class="form-group">
			                <div class="input-group">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
			                    <input class="form-control"  placeholder="Email" id="email_asistente_input" name="email" required="" type="email">
			                </div>
			            </div>
			            <input type="hidden" id="cod_asistente_input">
			            <button class="btn btn-lg btn-primary btn-block btn-success " id="update"  type="submit">Enviar</button>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
			<br>
			<br>
			<div class="row" align="center" >
				<?php 
					foreach($persona as $people){
						$asistent=$people->cod_asistente;
						$event=$people->cod_evento;
					}
					echo "<a href='#' class='act2'  data-toggle='modal' data-target='#myModal1' id='$asistent' data-evento='$event'>Nuevo Participante</a>";
				 ?>
				
			</div>
			
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Registrando Datos Participante</h4>
			      </div>
			      <div class="modal-body">
			        <form action="">
			        	
						<div class="form-group">
			                <div class="input-group">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			                    <input placeholder="Nombres" name="nombres" required="" id="nom_asistente_input1" autofocus="" class="form-control" type="text">
			                </div>
			            </div>
			            <div class="form-group">
			                <div class="input-group">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			                    <input class="form-control" placeholder="Apellidos" id="ape_asistente_input1" name="apellidos" required="" type="text">
			                </div>
			            </div>

			            <div class="form-group">
			                <div class="input-group">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
			                    <input class="form-control"  placeholder="Email" id="email_asistente_input1" name="email" required="" type="email">
			                </div>
			            </div>
			            <?php 
			            	foreach ($persona as $person) {
			            		$pepe = $person->cod_evento;

			            		echo "<input type='hidden' id='cod_evento_input1' value='$pepe'>";
			            	}
			             ?>
			          	
			            <button class="btn btn-lg btn-primary btn-block btn-success " id="new"  type="submit">Registrar</button>

			        </form>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</body>
	<?=HTML::script('js/jquery-1.11.2.min.js')?>
	<?=HTML::script('js/bootstrap.min.js')?>
	<?=HTML::script('js/bootstrap-select.min.js')?>
	<?=HTML::script('js/scripts.js')?>
</html>






















