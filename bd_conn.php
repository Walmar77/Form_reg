<?php

$conn = mysql_connect('localhost', 'root', '')
	or die('Not connected:' . mysql_error());

$db = mysql_select_db('client_db', $conn)
	or die('Can\'t use users:' . mysql_error());

mysql_query(" SET NAMES 'utf8' ");

