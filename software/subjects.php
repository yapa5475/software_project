<!DOCTYPE html>
<html lang="en">
	<head>
   <title>Subjects</title>
   <link rel="icon" href="logoLT.jpg" type="image/jpg" sizes="32x32">
 </head>
	<head>
		<meta charset= "utf-8"/>
		<title>Subjects - Live Tutoring</title>
		<link rel="Stylesheet" type="text/css" href="subjects.css">
	</head>
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
	$Images = $_POST['Images'];


	
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
<body>
	<h2>Hello, <?php echo $First_name; echo " "; echo $Last_name; ?> </h3>
	<div >	
		<nav >
			<ul>
			<li><a href="homepage.html"><img border="0"	src="home.png" width="15" height="15"></a></li>
			<li><a href="subjects.html" class="active2">Subjects</a></li>
			<li style="float:right"><a class="active" href="about.html">About</a></li>
			<li style="float:right"><a class="active" href="signin.php">Sign In as Student</a></li>
			<li style="float:right"><a class="active" href="signintutors.php">Sign In as Tutor</a></li>
					
			</ul>
		</nav>
	
		<div>
			<section >
				<article>
					<header>
						<hgroup>
							<h1><img src="logoLT.jpg" alt="logo" style="width:100px;height:100px;">  LIVE TUTORING</h1>
							<h2>Find a tutor at your earliest convenience</h2>					
						</hgroup>				
					</header>
							<p id = "paragraph">Select the subjects you want to get help with and find a tutor within 30 minutes.</p>	
					<div >	
							<div >
							<div class= "math">
									<h3> Math </h3>
													
											<p class= "subject"><a href="Calc123.html" style="color:#FF0000">Calculus 1/2/3</a></p>
											<p class= "subject"><a href="Intro to Discrete Math.html" style="color:#FF0000">Intro to Discrete Math</a></p>
											<p class= "subject"><a href="abstract algebra 2.html" style="color:#FF0000">Abstract Algebra 2</a></p>
											<p class= "subject"><a href="linear algebra.html" style="color:#FF0000"> Linear Algebra</a></p>
											<p class= "subject"><a href="differential equations.html" style="color:#FF0000"> Differential Equations</a></p>
											<p class= "subject"><a href="probability and stats.html" style="color:#FF0000"> Probability and Statistics</a></p>
															
									</nav>							
								</div>
								
								<div class = "chemistry">
									<h3>Chemistry</h3>
									
										<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000"> General Chemistry 1/2</a></p>
										<p class= "subject"><a href="organic chemistry.html" style="color:#FF0000"> Organic chemistry </a></p>
										<p class= "subject"><a href="thermo_chemistry.html" style="color:#FF0000"> Thermo chemistry </a></p>
										<p class= "subject"><a href="physical organic chemistry.html" style="color:#FF0000"> Physical Ogranic Chemistry</a></p>	
										<p class= "subject"><a href="surface chemistry.html" style="color:#FF0000">Surface Chemistry </a></p>
										<p class= "subject"><a href="nuclear acid chemistry.html"style="color:#FF0000"> Nuclear Acid Chemistry</a></p>	
																
									</ul>					
								</div>
									
								<div class = "physics">
									<h3>Physics</h3>
									
									
										<p class= "subject"><a href="generalphysics.html" style= "color:#FF0000">General Physics 1</a></p>
										<p class= "subject"><a href="generalphysics2.html" style= "color:#FF0000">General Physics 2</a></p>
										<p class= "subject"><a href="experiphysics.html" style= "color:#FF0000">Experimental Physics</a></p>	
										<p class= "subject"><a href="fomp.html" style= "color:#FF0000">Foundation Of Modern Physics</a></p>	
										<p class= "subject"><a href="qphysics.html" style= "color:#FF0000">Quantum Mechanics</a></p>	
										<p class= "subject"><a href="pphysics.html" style= "color:#FF0000">Introductory Plasma Physics</a></p>				
									
								</div>				
						</div>
						
							
								
								<div class= "cs">
									<h3>Computer Science</h3>
									

									
										<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Intro To Programming Language</a></p>
										<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Data Structres</a></p>
										<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Computer Systems</a></p>
										<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Algorithms</a></p>
										<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Principles Of Programming Languages</a></p>
										<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Software Methods and Tools</a></p>					
									
								</div>
								
								<div class= "business">
									<h3>Business</h3>
									
									
										<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Introduction to Finance </a></p>
										<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Business Administration</a></p>
										<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Accounting and Financial Analysis</a></p>
										<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Business Analytics</a></p>	
										<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Pricing</a></p>	
										<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Intermediate Microeconomics</a></p>					
									
								</div>					
						</div>		
						
							
								
							<div class= "bg">
								<h3>Biology</h3>
								
									<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">General Biology 1/2</a></p>
									<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Intro to Human Physiology</a></p>
									<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Genetics</a></p>
									<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Cell Biology</a></p>
									<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Principles of Ecology</a></p>	
									<p class= "subject"><a href="general chemistry1 2.html" style= "color:#FF0000">Animal Behavior</a></p>					
													
							</div>
						
					</div>
					</div>							
				</article>	
			</section>			
		</div>
				
	</div>
</body>
<div id= "footer">
		2016 Live Tutoring
	</div>
	
</html>
