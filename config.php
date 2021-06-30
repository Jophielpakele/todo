<?php
	$db_user = "root";
	$db_pass = '';
	$dsn = 'mysql:host=localhost;dbname=demo';


	$db = new PDO($dsn, 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>