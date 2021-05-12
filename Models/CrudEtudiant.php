 <?php
 require_once '../../Config.php';
 require '../../Models/Etudiant.php';
	
	
	class CrudEtudiant {
		
		private $connection ;
		function __construct (){
			$this->connection=Config::getConnection();
		}
		
		public function getAllEtudiants (){
			$sql="select * from Etudiant";
			$stmt=$this->connection->prepare($sql);
			$stmt->execute();
			$res=$stmt->fetchall(PDO::FETCH_NUM);
		  	return $res;
		}


		public function getEtudiantByMatricule($matricule){
			$sql="select * from Etudiant where matricule= $matricule";
			$stmt=$this->connection->prepare($sql);
			$stmt->execute();
			$res=$stmt->fetch(PDO::FETCH_NUM);
			return $res;
		}
		
		public function removeEtudiant( $matricule){
			$sql="delete from Etudiant where matricule= $matricule";
			$stmt=$this->connection->prepare($sql);	
			$res=$stmt->execute();
			return $res;
		}
		public function addEtudiant (Etudiant $obj){
						   $mat=$obj->getMatricule();
						   $nom=$obj->getNom();
						   $pnom=$obj->getPrenom();
						   $ad=$obj->getAdresse();
						   $id=$obj->getId_classe();
		  $sql="insert into etudiant values($mat,'$nom','$pnom','$ad',$id)";
		  $res=$this->connection->exec($sql);
		  return $res;
				
		}
		public function upDateEtudiant( Etudiant $obj){
			$matricule=$obj->getMatricule();
			$nom=$obj->getNom();		
			$prenom=$obj->getPrenom();											
			$adresse=$obj->getAdresse();
			$id_classe=$obj->getId_classe();
			$sql="update etudiant set nom='$nom',prenom='$prenom',
				 adresse='$adresse',id_classe=$id_classe 
				 where matricule=$matricule";
			$res=$this->connection->exec($sql);
			return $res;
		}
		
	}
?>