<?php
error_reporting (E_ALL);

include 'db.php';

if(isset($_POST['email'])) {
	$name = strip_tags(trim($_POST['name']));
	$email = strip_tags(trim($_POST['email']));

	$query = mysqli_query($dbhandle, "SELECT * FROM client WHERE email = '$email'");
	$result = mysqli_fetch_array($query);

		if($result['email'] == $email) 
			echo "Name: " . $result['name'] . "<br> E-mail: " . $result['email'];
	
	
 else {

	mysqli_query($dbhandle, "INSERT INTO client (name, email) VALUES ('$name', '$email')");
		die("<h4>Your data accepted!</h4>");
	
		}
	}

	
