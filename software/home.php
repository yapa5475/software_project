<!DOCTYPE html>

<html>
<?php	
	session_start();

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

	if (empty($value) or empty($value1)){
		echo " Please enter your Username and Password";		
	}

	else{
		//echo "Entered username:  $value";
	
	$sql = ("SELECT * FROM Users where Username ='$value'");
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
	
	//$name = ("SELECT")
	//echo $count;
	

		//echo "Welcome to Live tutoring";
	
	//Works up till here.

	
		if ($count == 1){
				//echo "Welcome $value1";

	}
			/*

			$row = mysql_fetch_assoc($result);
			if (crypt($value1, $row['Password']) == $row['Password']){
				session_register ("Username");
				session_register ("Password");
				echo "Welcome to Live tutoring";
				echo "Login Successful";				
			}
			else{
				echo "Wrong username or Password";
				return false;
			}
			*/
		}
	
		
			/*
				#$DB_NAME = $row['Username'];
				#$DB_PASSWORD = $row['Password'];
			}
			*/
			/*else{
				die("incorrect username/password");
			}
		else{
			die(" user doesnt exists");		
		}	*/			
//		}	
//	} 
	
	/*if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
		}

	mysql_close();
	*/	
?>

	<ul>
			<li><a href ="homepage.html"><img border="0" src="home.png" width="15" height="15"></a></li>
		<li><a href="subjects.html">Subjects</a></li>
		<li><a href="profile.html" class="active2">Profile</a></li>
		<li><a href="tutors.html" >Tutors</a></li>
		<li style="float:right"><a class="active" href="about.html">About</a></li>
		<li style="float:right"><a class="active" href="signin.php">Sign In</a></li>

	</ul>

	<link rel="Stylesheet" type="text/css" href="signin.css">
	<h1>Welcome <?php echo "$value1"?></h1>
	<body>
		<h2>Ready to use LiveTutoring to your advantage and ace your classes?</h2>
	</body>
</html>
