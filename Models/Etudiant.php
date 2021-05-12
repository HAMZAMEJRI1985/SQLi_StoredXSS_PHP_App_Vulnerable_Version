<?php

	class Etudiant {
			
			private $matricule;
			private $nom;
			private $prenom;
			private $adresse;
			private $id_classe;
			
//Pas necessaire de surchager le constructeur dans notre cas 
			public function __construct ( $matricule,$nom,$prenom,$adresse,$id_classe ){
				$this->matricule=$matricule;
				$this->nom=$nom;
				$this->prenom=$prenom;
				$this->adresse=$adresse;
				$this->id_classe=$id_classe;
			}
			public function getMatricule(){
			return $this->matricule;
			}
			public function getNom(){
				return $this->nom;
			}
			public function getPrenom(){
				return $this->prenom;
			}
			public function getAdresse(){
				return $this->adresse;
			}
			public function getId_classe(){
				return $this->id_classe;
			}

			public function setMatricule($matricule){
				$this->matricule = $matricule;
			}
			public function setNom($nom){
				$this->nom = $nom;
			}
			public function setPrenom($prenom){
				$this->prenom = $prenom;
			}
			public function setAdresse($adresse){
				$this->adresse = $adresse;
			}
			public function setId_classe($id_classe){
				return $this->id_classe=$id_classe;
			}
	}
?>
			
