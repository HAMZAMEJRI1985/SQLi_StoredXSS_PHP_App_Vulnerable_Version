<?php
	require '../Models/CrudAdministrateur.php';
	

	if ( isset ( $_POST['connexion'] ) ) {
			
					$login = $_POST['Login'];
					$password = $_POST['Password'];

			$crudAdmin = new CrudAdministrateur ();
			$res = $crudAdmin->getAdmin($login,$password);

		if ($res == null){
			echo "<script>
					alert ('Login et/ou mot de passe incorrects !!'); 
					window.location.href='../index.php';
				  </script>";
		}
		else {
			setcookie('login', $login, time()+(3600*24), "/");
    		setcookie('password', $password, time()+(3600*24),"/");
			header ( 'location:../Views/home.php');
		}
	}
	

	
	
 
 
				
				
				
?>