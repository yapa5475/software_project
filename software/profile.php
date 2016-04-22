<!DOCTYPE html>
<html>
	 <head>
   <title>LiveTutoring</title>
   <link rel="icon" href="pro1.jpg" type="image/jpg" sizes="32x32">
 </head>
	<head>
		<link rel="Stylesheet" type="text/css" href="profile.css">
	</head>
	<nav>
		<ul>
			<li><a href ="homepage.html"><img border="0" src="home.png" width="15" height="15"></a></li>
			<li><a href="subjects.html">Subjects</a></li>
			<li><a class="active2" href="profile.html">Profile</a></li>
			<li><a href="tutors.html">Tutors</a></li>
			<li style="float:right"><a class="active" href="about.html">About</a></li>
			<li style="float:right"><a class="active" href="signin.php">Sign In</a></li>
		</ul>
	</nav>
<body>
	<h1><a href="homepage.html"><img src="logoLT.jpg" alt="logo" style="width:100px;height:100px;"></a>  LIVE TUTORING</h1>
</body>

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


	
	//echo "sdfsa";
	if(empty($value) or empty($value1)){
		echo "Enter all fields";
	}
	else{
		$result1 = mysql_query("SELECT Username, Password FROM Users WHERE Username = '".$value."' AND Password = '".$value1."'");
		//$result2 = mysql_query("SELECT Username FROM Users WHERE Password = '".$value1."'");

		if (mysql_num_rows($result1)>0)
		{
			$_SESSION["logged_in"] = true;
			$_SESSION["name"] = $value;

			echo "Welcome $value";

		}
		else{
			echo "The username and password are incorrect";
		}
	}


	//$value1=$result1
	//echo("asdf");
/*
	else{
		while()
	}
*/		

	/*if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
		}
	
	
	mysql_close();
	*/
	
		
?>
	<a><?php $value ?></a>


</html>

	
