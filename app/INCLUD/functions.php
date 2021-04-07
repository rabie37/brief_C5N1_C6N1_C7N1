<?php

function check_login($conn){
	if(isset($_SESSION['id']))
	{

		$id = $_SESSION['pet_id'];
		$result = $conn->prepare("select * from animals where pet_id = :id ");
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		if($result->execute()){
			$data = $result->fetchAll(PDO::FETCH_ASSOC);
			return $data[0];
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}