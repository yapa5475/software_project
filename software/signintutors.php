<!DOCTYPE html>	
<html>
	<head>
   <title>LiveTutoring</title>
   <link rel="icon" href="logoLT.jpg" type="image/jpg" sizes="32x32">
 </head>
	<head>
		<link rel="Stylesheet" type="text/css" href="signin.css">
	</head>
	
	<ul>
		<li><a href ="homepage.html"><img border="0" src="home.png" width="15" height="15"></a></li>
		<li><a href="subjects.html">Subjects</a></li>
		<li style="float:right"><a class="active" href="about.html">About</a></li>
		<li style="float:right"><a class="active" href="signin.php">Sign In as Student</a></li>
		<li style="float:right"><a class="active2" href="signintutors.php">Sign In as Tutor</a></li>	

	</ul>
	
	
<body>
	<form action="profile_tutors.php" method="post"/>
	<div class="boxed">
		
	</div>
	<h1><a href="homepage.html"><img src="logoLT.jpg" alt="logo" style="width:100px;height:100px;"></a>  LIVE TUTORING</h1>
	
	<h2> Sign in as a Tutor </h2>
	
	<body>
		<form action="profile_tutors.php" method="post"/>
			<table width="450px">
				<tr>
					<td>
						<label for="Username" style = "color : Black">Username:</label>
					</td>
					<td>
						<input type="text" name="Username" maxlength="50" size="30">
					</td>
				</tr>
				<tr>
					<td>
						<label for="Password" style = "color : Black">Password</label>
					</td>
					<td>
						<input type="Password" name="Password" maxlength="50" size="30">
					</td>
				</tr>
				
				<tr>
					<td>
						<button type="submit" name="submit" >Sign In</button>
					</td>
				</tr>
				
			</table>
		</form>
			
	</form>
	
	<a style = "color : Black">Don't have an account? Click <a href="signuptutors.php" style = "color : Black">Here</a><a style = "color : Black"> to create one now.</a>
	</body>
	
	<div id= "footer">
		2016 Live Tutoring
	</div>
</html>
