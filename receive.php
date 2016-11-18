<?php

include_once 'bd_conn.php';

$name = strip_tags(trim($_POST['name']));
$email = strip_tags(trim($_POST['email']));


if(isset($_POST['submit'])) {
	$result = mysql_query(" 
						INSERT INTO client(name, email) 
						VALUES ('$name', '$email')
						");

mysql_close();

echo "Successfully added!";
}
