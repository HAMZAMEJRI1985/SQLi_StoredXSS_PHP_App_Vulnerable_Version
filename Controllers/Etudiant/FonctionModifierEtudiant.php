<?php
	
	require '../../Models/CrudEtudiant.php';
	
	if ( isset ( $_GET ['matricule'] ) ){
		$PDOCEtudiant = new CrudEtudiant();
		$tabInfo = $PDOCEtudiant->getEtudiantByMatricule ( $_GET ['matricule'] );	
		require '../../Views/Etudiant/ModifierEtudiant.php';
	}
	elseif ( isset ( $_POST['Modifier'] ) ) {
						$id     		=		$_POST['matricule']  ;
						$nom   			=		$_POST['nom'];
						$prenom 	  	=		$_POST['prenom'];
						$adresse   		=		$_POST['adresse'];
						$idClasse   	=		$_POST['idClasse'];
			$newEtudiant = new Etudiant ($id,$nom,$prenom,$adresse,$idClasse);
			$PDOCEtudiant = new CrudEtudiant();
			$res = $PDOCEtudiant->upDateEtudiant($newEtudiant);
			if (isset ($res) ) header ( 'location:../../Views/Etudiant/ok.php');
			else header ( 'location:../../Views/Etudiant/ko.php');
			
		
	}
	else header ( 'location:../../Controllers/Etudiant/FonctionListerEtudiant.php' );
		
	
	
	



?>