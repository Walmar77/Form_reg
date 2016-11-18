<?php
ini_set('error_reporting', ALL);

include_once 'bd_conn.php';

$name = strip_tags(trim($_POST['name']));
$email = strip_tags(trim($_POST['email']));


if(isset($_POST['submit'])) {
	$result = mysql_query(" 
						INSERT INTO client(name, email) 
						VALUES ('$name', '$email')
						");
}

$result2 = mysql_query(" SELECT email FROM client WHERE email = '$email' ");
$myrow = mysql_fetch_array($result2);

if($myrow['email'] == $email) {
	echo "Error";
}

