<html>
	<head>
   <title>LiveTutoring</title>
   <link rel="icon" href="logoLT.jpg" type="image/jpg" sizes="32x32">
 </head>
	<head>
		<link rel="Stylesheet" type="text/css" href="signin.css">
	</head>
<body>
	<ul>
		<li><a href ="homepage.html"><img border="0" src="home.png" width="15" height="15"></a></li>
		<li><a href="subjects.html">Subjects</a></li>
		<li style="float:right"><a class="active" href="about.html">About</a></li>
		<li style="float:right"><a class="active" href="signin.php">Sign In as Student</a></li>
		<li style="float:right"><a class="active2" href="signintutors.php">Sign In as Tutor</a></li>
		
	</ul>
	<div align="center">
	<form action="demotutors.php" method="post"/>
	<h2> Sign up as a Tutor </h2>
			<table width="450px">
				<tr>
					<td>
						<label for="Username">Username</label>
					</td>
					<td>
						<input type="text" name="Username" maxlength="50" size="20">
					</td>
				</tr>
				<tr>
					<td>
						<label for="Password">Password</label>
					</td>
					<td>
						<input type="text" name="Password" maxlength="50" size="20">
					</td>
				</tr>
				<tr>
					<td>
						<label for="Confirmpassword">Confirm Password</label>
					</td>
					<td>
						<input type="text" name="Confirmpassword" maxlength="50" size="20">
					</td>
				</tr>
				<tr>
					<td>
						<label for="First_name">First Name</label>
					</td>
					<td>
						<input type="text" name="First_name" maxlength="50" size="20">
					</td>
				</tr>
				<tr>
					<td>
						<label for="Last_name">Last Name</label>
					</td>
					<td>
						<input type="text" name="Last_name" maxlength="50" size="20">
					</td>
				</tr>
				
				<tr>
					<td>
						<label for="Course1">Course1</label>
					</td>
					<td>
						<input type="text" name="Course1" maxlength="50" size="20">
					</td>
				</tr>
				
				<tr>
					<td>
						<label for="Course2">Course2</label>
					</td>
					<td>
						<input type="text" name="Course2" maxlength="50" size="20">
					</td>
				</tr>
				
				<tr>
					<td>
						<label for="Course3">Course3</label>
					</td>
					<td>
						<input type="text" name="Course3" maxlength="50" size="20">
					</td>
				</tr>
				
				
				
				<tr>
					<td>
						<label for="Email">Email</label>
					</td>
					<td>
						<input type="text" name="Email" maxlength="80" size="20">
					</td>
				</tr>
				<tr>
					<td>
						<label for="Phoneno">Cell</label>
					</td>
					<td>
						<input type="text" name="Phoneno" maxlength="30" size="20">
					</td>
				</tr>
			</table>		
			<input type="submit">
		</form>
		</div>
	</body>	
	
	<div id= "footer">
		2016 Live Tutoring
	</div>
</html>
