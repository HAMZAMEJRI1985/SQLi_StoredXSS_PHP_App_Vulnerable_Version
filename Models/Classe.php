<?php

	class Classe {
			
			private $Nom_classe;
			private $Id_classe;
//Pas necessaire de surchager le constructeur dans notre cas 			
			public function __construct ( $Nom_classe ){
				$this->Nom_classe=$Nom_classe;
			}
			public function getNom_Classe(){
				return $this->Nom_classe;
			}
			public function setNom_classe($Nom_classe){
				$this->Nom_classe=$Nom_classe;
			}
			public function getId_classe(){
				return $this->Id_classe;
			}
			public function getInfo(){
				return array ( 'Nom_classe'=>$this->Nom_classe ,'Id_classe'=>$this->Id_classe);
			}
	}
?>