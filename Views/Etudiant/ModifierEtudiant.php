<html>
    <head>
        <meta charset="UTF-8">
        <title>MODIFICATION DES COORDONNES D'UN ETUDIANT</title>
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
			<img src="../../assets/images/home.png" id="imghome" alt="home" onclick="MovetoHome()" title="home" width="50" height="50"/>
			<br><br><br><br><br>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" name="formModif">
				<fieldset>
				<h2>Modification des coordonnées d'un étudiant</h2><hr><br><br>
				<strong>Matricule 	</strong>	:<input type="number" name="matricule" value="<?php echo $tabInfo[0]?>"  readonly />	   			<br>
				<strong>Nom			</strong>	:<input type="text" name="nom" value="<?php echo $tabInfo[1]?>" required />							<br>
				<strong>Prenom		</strong>	:<input type="text" name="prenom" value="<?php echo $tabInfo[2]?>" required />						<br>
				<strong>Adresse		</strong>	:<input type="text" name="adresse" value="<?php echo $tabInfo[3]?>" required />						<br>
				<strong>Id_classe	</strong>	:<input type="number" name="idClasse" value="<?php echo $tabInfo[4]?>" required />					<br>
					
												 <input type="submit" name="Modifier" value="Modifier" >	
				</fieldset>	
			</form>	
		</div>
    </body>
</html>
