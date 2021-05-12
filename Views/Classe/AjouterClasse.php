<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AJOUT CLASSE</title>
		<link rel="stylesheet" href="../../assets/css/globalStyle.css"/>
		<script src="../../assets/js/RedirectionClasseIMG.js"></script>
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
			<h2>Ajout d'une classe</h2><hr><br><br>
			<strong>Nom de la classe :</strong>  <input id ="ref" type="text" name="nomClasse" placeholder="Nom de la classe" required /><br>
												 <input type="submit" name="insert" value="Ajouter"  />	
												 <input type="reset" name="delete" value="Annuler"  />	
		</fieldset>	
		</form>
		</div>
    </body>
</html>
