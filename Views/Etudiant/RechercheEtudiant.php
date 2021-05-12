<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Recherche par matricule d'un étudiant</title>
		<link rel="stylesheet" href="../../assets/css/globalStyle.css" />
		<script src="../../assets/js/RedirectionEtudiantIMG.js"></script>
		<script src="../../assets/js/AjaxRechercheEtudiant.js"></script>
	</head>
	<body>
	<header>
            <h3>MEJRI - HAMZA - M1-SSII - Mini projet sécurité applicative</h3>
	</header>
		<div id="global">
			<img src="../../assets/images/home.png" id="imghome" alt="home" onclick="MovetoHome()" title="home" width="50" height="50"/>
			<br><br><br><br><br>
			<form method="GET" action=" <?php echo $_SERVER['PHP_SELF'];?> " name="rechercheParMatricule">
				<fieldset>
				<h2>Recherche par Matricule </h2><hr><br><br>
				<strong>Matricule </strong>   :<input type="number" id="mat" onkeyup="getFind()" name="matricule" placeholder="Matricule" required />
				</fieldset>
			</form>
			<div id="result"></div>
		</div>
	</body>
</html>
