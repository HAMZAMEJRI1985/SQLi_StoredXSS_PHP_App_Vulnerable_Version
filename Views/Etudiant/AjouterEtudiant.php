<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AJOUT ETUDIANT</title>
		<link rel="stylesheet" href="../../assets/css/globalStyle.css" />
		<script src="../../assets/js/AjaxEtudiant.js"></script>
		<script src="../../assets/js/RedirectionEtudiantIMG.js"></script>
    </head>
    <body>
        <header>
            <h3>MEJRI - HAMZA - M1-SSII - Mini projet sécurité applicative</h3>
        </header>
		<div id="global">
		<img src="../../assets/images/home.png" id="imghome" alt="home" onclick="MovetoHome()" title="home" width="50" height="50"/>
		<br><br><br><br><br>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" name="formAjout">  
			<fieldset>	
					<h2>Ajout d'un étudiant</h2><hr><br><br>			
					<div id="refStat"></div>
					<strong>Matricule	:</strong><input id ="mat" type="number" name="matricule" placeholder="Matricule" onkeyup="Verifier()"   required /> <br>
					<strong>Nom  		:</strong><input id ="nm" type="text" name="nom" placeholder="Nom" required />										<br>
					<strong>Prenom 		:</strong><input id ="pm" type="text" name="prenom"  placeholder="Prenom" required  />								<br>
					<strong>Adresse 	:</strong><input id ="ad" type="text" name="adresse"  placeholder="Adresse" required  />								<br>
					<strong>Id_Classe 	:</strong><input id ="idC" type="number" name="idClasse" placeholder="Classe ID" required />							<br>
														 <input type="submit" name="insert" value="Ajouter" 	 />
														 <input type="reset" name="delete" value="Annuler"  	 />														 
			</fieldset>					
		</form>
		</div>
    </body>
</html>
