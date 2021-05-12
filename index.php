
<?php

if (isset($_GET['logout'])) {
	setcookie('login', '', time() - 3600, '/');
	setcookie('password', '', time() - 3600, '/');
}

if(isset($_COOKIE["login"]) && isset($_COOKIE["password"])) 
  header ( 'location:Views/home.php');

?>

<!DOCTYPE html>
<html>
	 <head>
		 <meta charset="UTF-8">
		 <title>MEJRI HAMZA - mini projet</title>
		 <link rel="stylesheet" href="assets/css/idx.css" />
	</head>
	<body>
		<header>
			<h1>MEJRI HAMZA </h1>
			<h2>M1-SSII Mini projet sécurité applicative</h2>
		</header>
		<div	>
			<div id="connexion">
				<strong> Gestion des étudiants</strong>
					<form action='Controllers/connexion.php' method='post'>
						<input type='text' name='Login' value='administrateur1' placeholder='Login'><br><br>
						<input type='text' name='Password' value='admin1Password' placeholder='Mot de passe'><br><br>
						<strong><input type='submit' value='se connecter' name='connexion'></strong>
					</form>
			</div>
		</div>
	</body>
</html>



	