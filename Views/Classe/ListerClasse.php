<html>
    <head>
        <meta charset="UTF-8">
        <title>Table - Classe</title>
		<link rel="stylesheet" href="../../assets/css/imgStyle.css" />
		<link rel="stylesheet" href="../../assets/css/globalStyle.css" />
		<link rel="stylesheet" href="../../assets/css/tableStyle.css" />
		<script src="../../assets/js/RedirectionClasseIMG.js"></script>
    </head>
    <body>
        <header>
            <h3>MEJRI - HAMZA - M1-SSII - Mini projet sécurité applicative</h3>
        </header>
		<div id="global">
			<img src="../../assets/images/home.png" id="imghome" alt="home" onclick="MovetoHome()" title="home" />
			<h1>Gestion des classes</h1>
			<table border>
			<thead>
				<caption>Les Classes</caption>
			</thead>
			<tbody>
				<tr>
					<th>ID de la classe</th><th>Nom de la classe</th>
					<th colspan="2">Action</th>
				</tr>
			<?php foreach ( $ClassTab as $Classes ) {
					echo "<tr>";
						foreach ( $Classes as $value ) {
							echo "<td>".$value."</td>";
						}
					echo "<td><img src='../../assets/images/supprimer.jpg' alt='Supprimer' id='supimg'  onclick='MovetoSup(".$Classes[0].")' title='Supprimer' />" ; 
					echo "<td><img src='../../assets/images/modifier.png' alt='Modifier' id='modifimg'  onclick='MovetoModif(".$Classes[0].")' title='Modifier' />";
					echo"</tr>";
			}
			?>
				</tbody>
			</table>
			<img src="../../assets/images/ajouter.jpg" id="imgadd" alt="Ajouter une classe" onclick="MovetoAdd()" title="Ajouter" />
			<img src="../../assets/images/chercher.jpg" id="imgFind" alt="Recherche par id d'une classe" onclick="MovetoFind()" title="Rechercher"/>
		</div>
	</body>
</html>
