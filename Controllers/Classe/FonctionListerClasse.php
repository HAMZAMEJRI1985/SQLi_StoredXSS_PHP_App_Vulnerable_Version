<?php

require '../../Models/CrudClasse.php';
	$CrudC= new CrudClasse ();
	$ClassTab = $CrudC->getAllClasses ();
require '../../Views/Classe/ListerClasse.php';











?>