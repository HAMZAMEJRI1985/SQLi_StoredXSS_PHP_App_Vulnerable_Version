 <?php
 require_once '../Config.php';
 require '../Models/Administrateur.php';
	
	
	class CrudAdministrateur {
		
		private $connection ;
		function __construct (){
			$this->connection=Config::getConnection();
		}
		
		
		public function getAdmin($login,$password){
			$sql="select * from administrateurs where login='".$login."' and password='".$password."'";
			$stmt=$this->connection->prepare($sql);
			$stmt->execute();
			$res=$stmt->fetch(PDO::FETCH_NUM);
			return $res;
		}
		
	}
?>