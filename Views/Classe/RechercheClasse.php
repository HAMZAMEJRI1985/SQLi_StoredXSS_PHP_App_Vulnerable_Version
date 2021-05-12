<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Recherche d'une classe par son id</title>
		<link rel="stylesheet" href="../../assets/css/globalStyle.css"/>
		<script src="../../assets/js/RedirectionClasseIMG.js"></script>
		<script src="../../assets/js/AjaxRechercheClasse.js"></script>
	</head>
	<body>
	<header>
            <h3>MEJRI - HAMZA - M1-SSII - Mini projet sécurité applicative</h3>
    </header>
		<div id="global">
			<img src="../../assets/images/home.png" id="imghome" alt="home" onclick="MovetoHome()" title="home" width="50" height="50"/>
			<br><br><br><br><br>
				<form method="GET" action=" <?php echo $_SERVER['PHP_SELF'];?> " name="rechercheParId">
					<fieldset>
					<h2>Recherche par ID</h2><hr><br><br>
					<strong>Id de la classe recherchée  </strong> :<input type="number" id="idclasse" onkeyup="getFind()" name="ID" placeholder="ID" required />
								  
					</fieldset>
			</form>
			<div id="result"></div>
		</div>
	</body>
</html>
