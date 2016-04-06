<?php	
/*
	$user = 'root';
	$pass = 'default';
	$db = 'LiveTutoringUsers';
	
	$db = new mysqli('localhost', $user, $pass, $db) or die("it's not working");
	*/
	
	define('DB_NAME', "LiveTutoringUsers");
	define('DB_USER', "root");
	define('DB_PASSWORD', "default");
	define('DB_HOST', "localhost");
	
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	
	if(!$link){
		die('Could not connect: ' . mysql_error());
	}
	
	$db_selected = mysql_select_db(DB_NAME, $link);
	
	if(!$db_selected) {
		die('Cant use ' . DB_NAME . ': ' . mysql_error());
	}
	
	$value = $_POST['username'];
	$sql = "INSERT INTO user (username) VALUES ('$value')";
	
	$value = $_POST['username'];
	$sql = "INSERT INTO user (username) VALUES ('$value')";
	
	if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
	}
	
	
	mysql_close();
		
?>
