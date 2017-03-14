



<?php	
	class conexao{




		
		private $host= "localhost";
		private $user= "root";
		private $db= "siga";
		private $pass = "";
		public $conn;
		


		public function __construct(){
			try{
				$this->conn = new PDO(
				"mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8",$this->user,$this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));


				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



				return true;
			}catch(PDOException $e){
				echo "ERRO: ".$e->getMessage();
				return false;
			}
		}				
	}



?>