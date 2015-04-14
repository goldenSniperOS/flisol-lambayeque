<html>
	<body>
		<table border="2px">
			<tr>
				<th>Participantes</th>
			</tr>
			<?php
			if(isset($persona)){
				foreach($persona as $people)
	        	echo "<td>".$people->cod_evento.">".
	        	$people->nombres.'  '.$people->apellidos."</a></td>";
			}
		    ?>
		</table>
	</body>
</html>