<?php	
/*
	$user = 'root';
	$pass = 'default';
	$db = 'LiveTutoringUsers';
	
	$db = new mysqli('localhost', $user, $pass, $db) or die("it's not working");
	*/
	
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
	
	
	if (!empty($value) and !empty($value1) and !empty($value2) and !empty($value3) and !empty($value4) and !empty($value5) and !empty($value6) and ($value1==$value2)){
		$sql = "INSERT INTO Users (Username, Password, Confirmpassword, First_name, Last_name, Email, Phoneno) VALUES ('$value', '$value1', '$value2', '$value3', '$value4', '$value5', '$value6')";
		}
	
	else{
		if($value1 != $value2){
			echo("Password and confirm password do not match\n");
		}
			
		if(empty($value)){
			echo("username can not be left blank.\n");
		}
	
		if(empty($value1)){
			echo("password can not be left blank.\n");
		}
		
		if(empty($value2)){
			echo("confirm password can not be left blank.\n");
		}
		
		if(empty($value3)){
			echo("First name can not be left blank.\n");
		}
		
		if(empty($value4)){
			echo("last name can not be left blank.\n");
		}
		
		if(empty($value5)){
			echo("Email can not be left blank.\n");
		}
		
		if(empty($value6)){
			echo("Phone numer can not be left blank.\n");
		}
		
		
	}
	
	/*
	if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
	}
	*/
	
	mysql_close();
		
?>
