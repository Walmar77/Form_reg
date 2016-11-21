<?php
ini_set('error_reporting', E_ALL);
 
required_once 'bd_conn.php'; 

if($_POST['check'] == 'name') {
	$name = mysql_real_escape_string(trim($_POST['data']));
	$query = "SELECT name FROM client WHERE name = '$name' LIMIT 1";
	$res = mysql_query($query) or die(mysql_error());
	if(mysql_num_rows($res)) {
		echo 'no';
	} else {
		echo 'yes';
	}
} 

if($_POST['check'] == 'email') {
	$email = mysql_real_escape_string(trim($_POST['data']));
	$query = "SELECT email FROM client WHERE email = '$email' LIMIT 1";
	$res = mysql_query($query) or die(mysql_error());
	if(mysql_num_rows($res)) {
		echo 'no';
	} else {
		echo 'yes';
	}
}
