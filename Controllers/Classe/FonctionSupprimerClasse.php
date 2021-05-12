<?php

require '../../Models/CrudClasse.php';
	
	if ( isset ( $_GET['id'] ) ) {
		$PDOCClasse = new CrudClasse();
		$res = $PDOCClasse->removeClasse($_GET['id']);
		
		if (isset ($res) ) header ( 'location:../../Views/Classe/ok.php');
		else header ( 'location:../../Views/Classe/ko.php');
	}