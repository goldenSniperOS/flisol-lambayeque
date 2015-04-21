<html>
	<body>
		<table border="2px">
			<tr>
				<th>Participantes</th>
			</tr>
			<tr>
			<?php
			if(isset($persona)){
				foreach($persona as $people){
	        		echo "<td>".$people->nombres.'  '.$people->apellidos."</td>";
	       		}
			}
		    ?></tr>
		</table>
	</body>
</html>