<?php
if(isset($_COOKIE["login"]) && isset($_COOKIE["password"])) {
  echo "Vous etes connecté en tant que " . $_COOKIE["login"] . " >";
}else
	header ( 'location:../index.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sécurité applicative</title>
		<link rel="stylesheet" href="../assets/css/globalStyle.css" />  
		<link rel="stylesheet" href="../assets/css/cssHome.css" />
		<script src="../assets/js/IndexRedirection.js"></script>
																																																																																												>
    </head>
    <body>
    	<header>
            <h3>MEJRI - HAMZA - M1-SSII - Mini projet sécurité applicative </h3>
        </header>
		<div id="global" class="universite">
			<h3 onclick="Deconnexion()" > Déconnection</h3>
		
		<img src="../assets/images/classe.png" id="imgclasse" title="classe" onclick="MovetoListClasse()" />	
		<img src="../assets/images/etudiant.png" id="imgetudiant" title="etudiant" onclick="MovetoListEtudiant()" />
		<a href="../Controllers/Classe/FonctionListerClasse.php" id="lien"> >>Gestion des classes<< </a>
		<a href="../Controllers/Etudiant/FonctionListerEtudiant.php" id="lien2"> >>Gestion des étudiants<< </a>
		</div>
    </body>
</html>








<script> function Deconnexion(){document.location.href="../index.php?logout=true";}</script>


























































































































