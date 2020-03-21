<?php 

	class Core_Model{
		protected $db = '';

		function __construct(){
				require BASE_PATH."/config/database.php";
				$host = $config['host'];
				$username = $config['username'];
				$password = $config['password'];
				$dbname = $config['dbname'];
				try {
					$this->db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
					$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
					$this->db->exec('set names utf8');
					
				} catch (PDOException $e) {
					exit('Connection failed '. $e->getMessage());
				}
		}
	
	}

 ?>