



<?php
require_once "../../Models/CrudEtudiant.php";


if ( isset ( $_GET["matricule"] ) ){ 
		 $m = $_GET["matricule"];
		$CEtudiant = new CrudEtudiant();
		$TabRes= $CEtudiant->getEtudiantByMatricule($m);  
			if ( !empty($TabRes) ) {
				require_once "../../Views/Etudiant/AfficherParMatricule.php";
			}
			else{
				echo "<h4>Le matricule $m n'appartient à aucun étudiant !!</h4>";	
			}
}else{
	require_once "../../Views/Etudiant/RechercheEtudiant.php";
}
	
		
	







		
	






?>