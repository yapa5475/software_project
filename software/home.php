<?php
	
	define('DB_NAME', 'Tutoring');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'default');
	define('DB_HOST', 'localhost');
	
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	
	if(!$link){
		die('Could not connect: ' . mysql_error());
	}
	
	$db_selected = mysql_select_db(DB_NAME, $link);
	
	if(!$db_selected) {
		die('Cant use ' . DB_NAME . ': ' . mysql_error());
	}
	

	$value = $_POST['Username'];
	$value1 = $_POST['Password'];
	$value2 = $_POST['Confirmpassword'];
	$value3 = $_POST['First_name'];
	$value4 = $_POST['Last_name'];
	$value5 = $_POST['Email'];
	$value6 = $_POST['Phoneno'];
	

	session_destroy();
	header('Location': 'home.html');
	exit;
?>