<?php
	
	require '../../Models/CrudClasse.php';
	
	if ( isset ( $_GET ['id'] ) ){
		$PDOCClasse = new CrudClasse();
		$tabInfo = $PDOCClasse->getClasseById ( $_GET ['id'] );	
		require '../../Views/Classe/ModifierClasse.php';
	}
	elseif ( isset ( $_POST['Modifier'] ) ) {
						$id     =		$_POST['id']  ;
						$nom   	=		$_POST['nom'];
			$PDOCClasse = new CrudClasse();
			$res = $PDOCClasse->upDateClasse( $id,$nom );
			if (isset ($res) ) header ( 'location:../../Views/Classe/ok.php');
			else header ( 'location:../../Views/Classe/ko.php');
			
		
	}
	else header ( 'location:../../Controllers/Classe/FonctionListerClasse.php' );
		
	
	
	



?>