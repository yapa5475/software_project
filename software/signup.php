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
		<li><a href="profile.html">Profile</a></li>
		<li><a href="tutors.html">Tutors</a></li>
		<li style="float:right"><a class="active" href="about.html">About</a></li>
		<li style="float:right"><a class="active2" href="signin.php">Sign In</a></li>

	</ul>
	
	<form action="demo.php" method="post"/>
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
			<h4>
			<input type="radio" name="gender" value="male">
			Male
			<input type="radio" name="gender" value="female">
			Female<br>
			</h4>
		
			<input type="submit">
		</form>
	</body>	
</html>
