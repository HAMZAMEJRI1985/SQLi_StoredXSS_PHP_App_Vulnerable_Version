<?php
	
	require_once '../../Views/Etudiant/AjouterEtudiant.php';
	require '../../Models/CrudEtudiant.php';
	

	if ( isset ( $_POST['insert'] ) ) {
		
					$matricle		   	=		$_POST['matricule'];
					$nom		   		=		$_POST['nom'];
					$prenom		   		=		$_POST['prenom'];
					$adresse		   	=		$_POST['adresse'];
					$idClasse		   	=		$_POST['idClasse'];

		$newEtudiant = new Etudiant ($matricle,$nom,$prenom,$adresse,$idClasse);
		$newCEtudiant = new CrudEtudiant ();
		$res = $newCEtudiant->addEtudiant($newEtudiant);

		if (isset ($res) ) header ( 'location:../../Views/Etudiant/ok.php');
		else header ( 'location:../../Views/Etudiant/ko.php');
	}
	

	
	
 
 
				
				
				
?>
					
						
						
					
				
		



	




