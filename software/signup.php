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
		<li style="float:right"><a class="active2" href="signin.html">Sign In</a></li>

	</ul>
	
	<form action="demo.php" method="post">
			<table width="450px">
				<tr>
					<td>
						<label for="username">Username</label>
					</td>
					<td>
						<input type="text" name="username" maxlength="50" size="20">
					</td>
				</tr>
				<tr>
					<td>
						<label for="password">Password</label>
					</td>
					<td>
						<input type="text" name="password" maxlength="50" size="20">
					</td>
				</tr>
				<tr>
					<td>
						<label for="first_name">First Name</label>
					</td>
					<td>
						<input type="text" name="first_name" maxlength="50" size="20">
					</td>
				</tr>
				<tr>
					<td>
						<label for="last_name">Last Name</label>
					</td>
					<td>
						<input type="text" name="last_name" maxlength="50" size="20">
					</td>
				</tr>
				<tr>
					<td>
						<label for="email">Email</label>
					</td>
					<td>
						<input type="text" name="email" maxlength="80" size="20">
					</td>
				</tr>
				<tr>
					<td>
						<label for="phoneno">Cell</label>
					</td>
					<td>
						<input type="text" name="phoneno" maxlength="30" size="20">
					</td>
				</tr>
			</table>
			<h4>
			<input type="radio" name="gender" value="male">
			Male
			<input type="radio" name="gender" value="female">
			Female<br>
			</h4>
		</form>
		<button type="button"><a href ="demo.php">Submit</a></button>
	</body>

</html>
