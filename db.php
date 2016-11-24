<?php

define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'client_db');

$dbhandle = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) 
or die('Unable to connect to Database');

if($dbhandle->connect_error) {

	die('Connection Faild:' . $dbhandle->connect_error);
}

