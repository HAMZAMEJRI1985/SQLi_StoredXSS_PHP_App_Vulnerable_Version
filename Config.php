<?php

	class Config {
		
		public static function getConnection(){
			
				$dns='mysql:host=localhost;dbname=hamza_mejri_database';
				$user='root';
				$password='';
				$PDOobject = new PDO ($dns,$user,$password);
			
			return $PDOobject;
		}
	}
	




?>