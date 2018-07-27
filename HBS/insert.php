<?php
require_once('connect.php');
$full_name = $_POST['userName1'] . " " . $_POST['userName2'] . " " . $_POST['userName3'] . " " . $_POST['userName4'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['userPassword'];
$blood_class = $_POST['userBloodClass'];
$gender = $_POST['userGenderType'];
$Disease = $_POST['userDiseaseType'];

$password = md5($password);

$sql = "INSERT INTO users (user_full_name,user_name,email,blood_class,gender,password,chronical_disease)VALUES
	('$full_name','$user_name','$email','$blood_class','$gender','$password','$Disease')";

	if($conn->query($sql)){
		session_start();
			echo "
				<script>
					window.location = 'account.php';
				</script>
			";
	}


?>
