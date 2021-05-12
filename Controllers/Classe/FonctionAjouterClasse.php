<?php
	require_once '../../Views/Classe/AjouterClasse.php';
	require '../../Models/CrudClasse.php';
	

	if ( isset ( $_POST['insert'] ) ) {
			
			$nom		   	=		$_POST['nomClasse'];
			$newCClasse = new CrudClasse ();
			$res = $newCClasse->addClasse($nom);
			
		if (isset ($res) ) header ( 'location:../../Views/Classe/ok.php');
		else header ( 'location:../../Views/Classe/ko.php');	
	}
	

	
	
 
 
				
				
				
?>
					
						
						
					
				
		



	




