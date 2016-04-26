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
			<li><a href="profile.php"><img border="0"	src="home.png" width="15" height="15"></a></li>
			<!--<li><a href ="homepage.html"><img border="0" src="home.png" width="15" height="15"></a></li>-->
			<li><a href="subjects.php">Subjects</a></li>
			<li><a class="active2" >Profile</a></li>
			<li><a href="tutors.php">Tutors</a></li>
			<li style="float:right"><a class="active" href="signin.php">Sign Out</a></li>
		</ul>
	</nav>
<body>
	<h1><a href="homepage.html"><img src="logoLT.jpg" alt="logo" style="width:100px;height:100px;"></a>  LIVE TUTORING</h1>

<?php
	session_start();
	$host = "localhost";
	$user = "root";
	$pass = "default";
	$db = "Tutoring";
	mysql_connect($host, $user, $pass);
	mysql_select_db($db);

	$Username = $_POST['Username'];
	$Password = md5($_POST['Password']);
	$First_name = $_POST['First_name'];
	$Last_name = $_POST['Last_name'];
	$Email = $_POST['Email'];
	$Phoneno = $_POST['Phoneno'];
	$Images = $_POST['Images'];
	$Major = $_POST['Major'];

	
	if (empty($Username) or empty($Password)){
		header('Location: signin.php');
		echo "Please enter all fields";
		exit();
	}
	else{

		if(isset($_POST['Username'])){
					
			$sql = "SELECT * FROM Users WHERE Username = '".$Username."' AND Password = '".$Password."'  LIMIT 1";
			$res = mysql_query($sql);

			//echo $Username;
			$First_name = mysql_query("SELECT First_name FROM Users WHERE Username = '".$Username."'");
			$First = mysql_fetch_assoc($First_name);
			$First_name = $First['First_name'];
			

			$Last_name = mysql_query("SELECT Last_name FROM Users WHERE Username = '".$Username."'");
			$Last = mysql_fetch_assoc($Last_name);
			$Last_name = $Last['Last_name'];
			
			$Major = mysql_query("SELECT Major FROM Users WHERE Username = '".$Username."'");
			$Major1 = mysql_fetch_assoc($Major);
			$Major = $Major1['Major'];
				

			$imageName = mysql_real_escape_string($_FILES["Images"]["name"]);
			$imageData = mysql_real_escape_string(file_get_contents($_FILES["Images"]["tmp_name"]));
			$imageType = mysql_escape_string($_FILES["Images"]["type"]);

			$sql = "INSERT INTO Users (Images) VALUES ('$Images')";

			if(mysql_num_rows($res) == 1){
							
			}

			else{
				//echo "Invalid";
				header('Location: signin.php?msg=invalid');
				echo "Invalid";
				//exit();
			}
		}
	}
	


?>
	<h2>Hello, <?php echo $First_name; echo " "; echo $Last_name; ?> </h3>
	<br>
	<form action="homepage.html" method="POST" enctype="multipart/form-data">
		<input type="file" name="Images"><input type="submit" name="submit" value="Upload"> 
	</form>
	<br>
		<h3>Looking for classes to add? Go <a href="subjects.html">here </a></h3>
		<br>
		<h3>Live Tutoring is ready to provide you with exemplary tutoring experiences.</h3>
		<h3>Choose tutors who correpsond to your given courses.</h3>
		<br>
		<h4>Your major: <?php echo $Major;?></h4>

	</body>
	
	<div id= "footer">
		2016 Live Tutoring
	</div>
</html>

	
