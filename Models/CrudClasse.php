 <?php
 require_once '../../Config.php';
 require_once '../../Models/Classe.php';
	
	
	class CrudClasse {
		
		private $connection ;
		
		function __construct (){
			$this->connection=Config::getConnection();
		}
		
		public function getAllClasses (){
			$sql="select * from Classe";
			$stmt=$this->connection->prepare($sql);
			$stmt->execute();
			$res=$stmt->fetchall(PDO::FETCH_NUM);
			return $res;
		}
		public function getClasseById($id){
			$sql="select * from Classe where Id_classe= $id";
			$stmt=$this->connection->prepare($sql);
			$stmt->execute();
			$res=$stmt->fetch(PDO::FETCH_NUM);
			return $res;
		}
			

		public function getClasseByNom($nom){
			$sql="select * from Classe where Nom_classe= $nom";
			$stmt=$this->connection->exec($sql);
			$stmt->execute();
			$res=$stmt->fetch(PDO::FETCH_ASSOC);
			return $res;
		}
		public function upDateClasse($id,$nom){
			$sql="update Classe set Nom_classe='$nom' where Id_classe=$id"  ;
			$res=$this->connection->exec($sql);
			return $res;
		}

		public function removeClasse ($id){
			$sql="delete from Classe where Id_classe= $id";
			$res=$this->connection->exec($sql);
			return $res;
		}
		
		public function addClasse($nom){
			$sql="insert into Classe values(NULL,'".$nom."')";
			$res=$this->connection->exec($sql);
			return $res;
		}
	}
?>