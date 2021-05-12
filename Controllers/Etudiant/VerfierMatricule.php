<?php
 require_once '../../Models/CrudEtudiant.php';

if ( isset ( $_GET["matricule"] ) ){
	
	$matricule=$_GET["matricule"];
	$CEtud = new CrudEtudiant();
	$res =$CEtud->getEtudiantByMatricule($matricule);
	require_once '../../Views/Etudiant/AfficheReponseMatricule.php';
}