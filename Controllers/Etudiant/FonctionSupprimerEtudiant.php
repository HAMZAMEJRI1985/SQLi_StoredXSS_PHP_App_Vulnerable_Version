<?php

require '../../Models/CrudEtudiant.php';
	
	if ( isset ( $_GET['matricule'] ) ) {
		$PDOCEtudiant = new CrudEtudiant();
		$res = $PDOCEtudiant->removeEtudiant($_GET['matricule']);
		
		if (isset ($res) ) header ( 'location:../../Views/Etudiant/ok.php');
		else header ( 'location:../../Views/Etudiant/ko.php');
	}