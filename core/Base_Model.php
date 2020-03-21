<?php 
	class Base_Model extends Core_Model{
		function get_all(){
			$query = "SELECT * FROM $this->table";
		   	$stm = $this->db->prepare($query);
			$stm->execute();
			$rs = $stm->fetchAll(PDO::FETCH_ASSOC);	
			return $rs;
		}
		function fetch_id($id){
			$query = "SELECT * FROM $this->table WHERE product_id = :id";
		   	$stm = $this->db->prepare($query);
			$stm->execute([':id' => $id]);
			$rs = $stm->fetch(PDO::FETCH_ASSOC);	
			return $rs;
		}
	}

 ?>