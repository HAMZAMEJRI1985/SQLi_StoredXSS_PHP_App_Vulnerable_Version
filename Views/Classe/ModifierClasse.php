<html>
    <head>
        <meta charset="UTF-8">
        <title>MODIFICATION D'UNE CLASSE</title>
		<link rel="stylesheet" href="../../assets/css/tableStyle.css" />
		<link rel="stylesheet" href="../../assets/css/imgStyle.css" />
		<link rel="stylesheet" href="../../assets/css/globalStyle.css" />
		<script src="../../assets/js/RedirectionClasseIMG.js"></script>
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
				<h2>Modification d'une classe</h2><hr><br><br>
				<strong>ID 	</strong> 			:<input type="number" name="id" value="<?php echo $tabInfo[0]?>" readonly />	   			<br>
				<strong>Nom	</strong>			:<input type="text" name="nom" value="<?php echo $tabInfo[1]?>" required />					<br>
				
											 <input type="submit" name="Modifier" value="Modifier" >	
			</fieldset>	
		</form>
    </body>
</html>
