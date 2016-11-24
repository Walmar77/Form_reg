<?php
error_reporting (E_ALL);

include 'db.php';

if(isset($_POST['submit'])) {
	$name = strip_tags(trim($_POST['name']));
	$email = strip_tags(trim($_POST['email']));

	$query = mysqli_query($dbhandle, "SELECT * FROM client WHERE email = '$email'");
	$result = mysqli_fetch_array($query);

		if($result['email'] == $email) {
			echo "Name: " . $result['name'] . "<br> E-mail: " . $result['email'];
	}
	
}

if(isset($_POST['submit'])) {
	$name = strip_tags(trim($_POST['name']));
	$email = strip_tags(trim($_POST['email']));

	$sql = mysqli_query($dbhandle, "INSERT INTO client (name, email) VALUES ('$name', '$email')");
}

	
