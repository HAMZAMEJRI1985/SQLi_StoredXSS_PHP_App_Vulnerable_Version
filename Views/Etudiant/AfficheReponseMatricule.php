<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Reponse recherche par objet ajax</title>
	</head>
	<body>
		<?php
		if ( !empty ( $res ) ) echo "<i style=color:red>Attention ! Matricule indisponible</i>";
		else echo "<i style=color:#00FF00>Matricule disponible</i>";
		?>
	</body>
</html>
