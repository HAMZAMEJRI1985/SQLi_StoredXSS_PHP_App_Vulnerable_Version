<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Recherche d'un étudiant par son matricule</title>
		<link rel="stylesheet" href="../../assets/css/tableStyle.css"/>
	</head>
	<body>
        
			<table border>
				<caption>Détails de l'étudiant recherché</caption>
				<tr>
					<th>Matricule</th>
					<th>Nom </th>
					<th>Prenom</th>
					<th>Adresse</th>
					<th>Id_Classe</th>
				</tr>
				<tr>
				
					<td><?php echo $TabRes[0] ?></td>
					<td><?php echo $TabRes[1] ?></td>
					<td><?php echo $TabRes[2] ?></td>
					<td><?php echo $TabRes[3] ?></td>
					<td><?php echo $TabRes[4] ?></td>
					
				</tr>
			</table>
	</body>
</html>
			







