<html>
	<body>
		<table border="3px"><?php
			echo "<tr>";
				echo "<th>".$ponencia[0]->tipo_evento."</th>";
			echo "</tr>";
			   	foreach($ponencia as $evento)
	        	echo "<tr><td><a href=evento_exacto?cod_evento=".$evento->cod_evento.">"
	        	.$evento->tipo_evento.' - '.$evento->nombre."</a></td></tr>";
		    ?>
		</table>

		
	</body>
</html>