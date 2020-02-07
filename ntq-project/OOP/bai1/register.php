<?php
require_once('database.php');

if(!empty($_POST)) {
	if(isset($_POST['username'])){
		$username = $_POST['username'];
		$age = $_POST['age'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$phone_number = $_POST['phone_number'];
		$id = $_POST['id'];

		if($username != "") {
			require_once('database.php');

			if($id == -1) {
				$query = "INSERT INTO STUDENT(USERNAME, AGE, ADDRESS, EMAIL, PHONE_NUMBER, GENDER) VALUES ('".$username."', '".$age."', '".$address."', '".$email."', '".$phone_number."', '".$gender."')";
			} else {
				$query = "UPDATE STUDENT SET USERNAME='".$username."', AGE='".$age."', ADDRESS='".$address."', EMAIL='".$email."', PHONE_NUMBER='".$phone_number."', GENDER='".$gender."' WHERE ID = ".$id;
			}
			
			execute($query);
		}
	}

	if(isset($_POST['index'])){
		$index = $_POST['index'];
		$arrayID = executeResult("SELECT ID FROM STUDENT");
		$ID_index = $arrayID[$index]['ID'];
		$query = "DELETE FROM STUDENT WHERE ID = '$ID_index'";
		execute($query);
	}
}