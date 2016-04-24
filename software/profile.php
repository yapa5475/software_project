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
			<li style="float:right"><a class="active" href="signin.php">Sign Out</a></li>
		</ul>
	</nav>
<body>
	<h1><a href="homepage.html"><img src="logoLT.jpg" alt="logo" style="width:100px;height:100px;"></a>  LIVE TUTORING</h1>
</body>

<?php
	session_start();
	$host = "localhost";
	$user = "root";
	$pass = "default";
	$db = "Tutoring";
	mysql_connect($host, $user, $pass);
	mysql_select_db($db);

	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$First_name = $_POST['First_name'];
	$Last_name = $_POST['Last_name'];
	$Email = $_POST['Email'];
	$Phoneno = $_POST['Phoneno'];


	
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

			if(mysql_num_rows($res) == 1){
				//break;
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
	<h1>Hello, <?php echo $First_name; echo " "; echo $Last_name; ?> </h1>
	<p>Welcome to your personalized</p>

</html>

	
