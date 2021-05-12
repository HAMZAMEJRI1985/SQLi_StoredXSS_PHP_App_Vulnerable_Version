

<?php
require_once "../../Models/CrudClasse.php";


if ( isset ( $_GET["idclasse"] ) ){ 
		$id = $_GET["idclasse"];
		$CClasse = new CrudClasse();
		$TabRes= $CClasse->getClasseById( $id );  
		
			if ( !empty($TabRes) ) {
				require_once "../../Views/Classe/AfficherParId.php";
			}
			else{
				echo "<h4>La référence $id n'appartient à aucune classe !!</h4>";	
			}
}else{
	require_once "../../Views/Classe/RechercheClasse.php";
}


	
		
	






?>