<html>
    <head>
        <meta charset="UTF-8">
        <title>Table - Etudiants</title>
		<link rel="stylesheet" href="../../assets/css/tableStyle.css" />
		<link rel="stylesheet" href="../../assets/css/imgStyle.css" />
		<link rel="stylesheet" href="../../assets/css/globalStyle.css" />
		<script src="../../assets/js/RedirectionEtudiantIMG.js"></script>

    </head>
    <body>
        <header>
            <h3>MEJRI - HAMZA - M1-SSII - Mini projet sécurité applicative</h3>
        </header>
		<div id="global">
			<img src="../../assets/images/home.png" id="imghome" alt="home" onclick="MovetoHome()" title="home" />
			<h1>Gestion des étudiants</h1>
			<table border>
			<thead>
				<caption>Les Etudiants</caption>
			</thead>
			<tbody>
				<tr>
					<th>Matricule</th><th>Nom</th><th>Prenom</th><th>Adresse</th><th>Id_classe</th>
					<th colspan="2">Action</th>
				</tr>	 
			<?php foreach ( $EtudiantsTab as $Etudiants ) {
					echo "<tr>";
						foreach ( $Etudiants as $value ) {
							echo "<td>".$value."</td>";
						}
						echo "<td><img src='../../assets/images/supprimer.jpg' id='supimg' alt='Supprimer' onclick='MovetoSup(".$Etudiants[0].")' title='Supprimer' />" ; 
					echo "<td><img src='../../assets/images/modifier.png' id='modifimg' alt='Modifier' onclick='MovetoModif(".$Etudiants[0].")' title='Modifier'>";
					echo"</tr>";
			}
			?>
				</tbody>
			</table>
			<img src="../../assets/images/ajouter.jpg" id="imgadd" alt="Ajouter un étudiant" onclick="MovetoAdd()" title="Ajouter" />
			<img src="../../assets/images/chercher.jpg" id="imgFind" alt="Chercher un étudiant" onclick="MovetoFind()" title="Rechercher" />
		</div>
	</body>
</html>
