<?php

require '../../Models/CrudEtudiant.php';
	$CrudE= new CrudEtudiant ();
	$EtudiantsTab = $CrudE->getAllEtudiants ();
require '../../Views/Etudiant/ListerEtudiant.php';











?>