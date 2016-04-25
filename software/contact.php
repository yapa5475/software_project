<!DOCTYPE html>
<html lang = "en">
	
 <head>
   <title> Contact</title>
   <link rel="icon" href="pro1.jpg" type="image/jpg" sizes="32x32">
 </head>
 <head>
	
	<link href="h1.css" media="screen" rel="stylesheet" />
 </head>
<head>
	<meta charset= "utf-8"/>
	<title> Contact </title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>

	<nav>
		<ul>
			<li><a href="homepage.html"><img border="0"	src="home.png" width="15" height="15"></a></li>
			<li><a href="subjects.html">Subjects</a></li>
			<li><a href="profile.html">Profile</a></li>
			<li><a href="tutors.html">Tutors</a></li>
			<li style="float:right"><a class="active" href="about.html">About</a></li>
			<li style="float:right"><a class="active" href="signin.html">Sign In</a></li>
					
		</ul>
	</nav>
		
		<a href="homepage.html"><img src="logoLT.jpg" alt="logo" style="width:100px;height:100px;"></a><font size = "5" color="#FF6600"> LIVE TUTORING</font>
		<p align="center"><font size = "8" color = "black" style = "bold"> Thanks for contacting us, we will get back to you soon !!!</font></p>
		<p align = "center"><img src = "contact12.jpeg" alt="logo" style="width:200px;height:200px;"></p>

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
	

	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Phoneno = $_POST['Phoneno'];
	$Zip = $_POST['Zip'];
	$Comments = $_POST['Comments'];



	if (!empty($Name) and !empty($Email) and !empty($Phoneno) and !empty($Zip) and !empty($Comments)){
		$sql = "INSERT INTO Inquiry (Name, Email, Phoneno, Zip, Comments) VALUES ('$Name', '$Email', '$Phoneno', '$Zip', '$Comments')";	
	}
	else{
		header('Location: homepage.html');
		echo "Please enter all fields";
	}

	if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
		}

	mysql_close();
		


?>

</html>
