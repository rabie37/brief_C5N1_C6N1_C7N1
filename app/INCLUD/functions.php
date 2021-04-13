<?php

function check_login($conn){
	if(isset($_SESSION['id']))
	{

		$id = $_SESSION['id'];
		$result = $conn->prepare("select * from login where id = :id ");
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		if($result->execute()){
			$data = $result->fetchAll(PDO::FETCH_ASSOC);
			return $data[0];
		}
	}

	
	

}