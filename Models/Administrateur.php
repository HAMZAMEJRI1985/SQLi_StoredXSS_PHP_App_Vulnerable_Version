<?php

	class Administrateur {
			
			private $login;
			private $password;
//Pas necessaire de surchager le constructeur dans notre cas 			
			public function __construct ( $login , $password  ){
				$this->login=$login;
				$this->password=$password;
			}
			public function getLogin(){
				return $this->login;
			}
			public function setLogin($login){
				$this->login=$login;
			}
			public function getPassword(){
				return $this->password;
			}
			public function setPassword($password){
				$this->password=$password;
			}
	}
?>