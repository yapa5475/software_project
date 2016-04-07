<?php	
/*
	$user = 'root';
	$pass = 'default';
	$db = 'LiveTutoringUsers';
	
	$db = new mysqli('localhost', $user, $pass, $db) or die("it's not working");
	*/
	
	define('DB_NAME', 'Tutoring');t just any tutor can become a Live tut
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'default');
	define('DB_HOST', 'localhost');
	
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	
	function check_db_conn($link) {
	if(!$link){
		die('Could not connect: ' . mysql_error());
	}
    }
	
	check_db_conn($link)
	
	$db_selected = mysql_select_db(DB_NAME, $link);
	
	$value = $_POST['Username'];
	$value1 = $_POST['Password'];
	$value2 = $_POST['Confirmpassword'];
	$value3 = $_POST['First_name'];
	$value4 = $_POST['Last_name'];
	$value5 = $_POST['Email'];
	$value6 = $_POST['Phoneno'];
	
	$sql = "INSERT INTO Users (Username, Password, Confirmpassword, First_name, Last_name, Email, Phoneno) VALUES ('$value', '$value1', '$value2', '$value3', '$value4', '$value5', '$value6')";
	
	if(!empty($value) and !empty($value1) and !empty($value2) and !empty($value3) and !empty($value4) and !empty($value5) and !empty($value6)){
		echo("All fields have information");
		$value = $_POST['Username'];
		$value1 = $_POST['Password'];
		$value2 = $_POST['Confirmpassword'];
		$value3 = $_POST['First_name'];
		$value4 = $_POST['Last_name'];
		$value5 = $_POST['Email'];
		$value6 = $_POST['Phoneno'];
	
		$sql = "INSERT INTO Users (Username, Password, Confirmpassword, First_name, Last_name, Email, Phoneno) VALUES ('$value', '$value1', '$value2', '$value3', '$value4', '$value5', '$value6')";
	}
	
}
	
	function check_selected_db($db_selected){
	if(!$db_selected) {
		die('Cant use ' . DB_NAME . ': ' . mysql_error());
	}
}
	check_selected_db($db_selected);
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
	function check_username(string user){
		if(empty(user)){
			echo("username can not be left blank.\n");
			echo("\r\n");
			die('Error: ' . mysql_error());
		}
	}
	
	check_username($value);
	
	
	function check_password(string password){
		if(empty(password)){
			echo("password can not be left blank.\n");
		}
	}
	
	check_password($value1);
	
	function check_passwordconfirmation(string password_confirmation){	
		if(empty(password_confirmation)){
			echo("confirm password can not be left blank.\n");
		}
	}
	
	check_passwordconfirmation($value2);
	
	function check_firstname(string first_name){
		if(empty(first_name)){
			echo("First name can not be left blank.\n");
		}
	}
	
	check_firstname($value3);
	
	function check_lastname(string last_name){
		if(empty(last_name)){
			echo("Last name can not be left blank.\n");
			echo("\n");
		}
	}
	
	check_lastname($value4);
	
	function check_email(string email){
		if(empty(email)){
			echo("Email can not be left blank.\n");
		}
	}
	
	check_email($value5);
	
	function check_phoneno(string phoneno){
		if(empty(phoneno)){
			echo("Phone numer can not be left blank.\n");
		}
	}
	
	check_phoneno($value6);
	
	if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
	}
	

	
	
	
	mysql_close();
		
?>
