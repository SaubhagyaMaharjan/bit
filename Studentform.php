<!DOCTYPE html>
<html>
<head>
	<title>student form</title>
</head>
<body>
<form method="post" action="insertstud.php"> 
	<table>
		<tr>
			<th>First Name:</th><td><input type="text" name="fname" placeholder="enter your first name"></td>
		</tr>
		<tr>
			<th>Last Name:</th><td><input type="text" name="lname" placeholder="enter your last name"></td>
		</tr>
		<tr>
			<th>Log Id:</th><td><input type="text" name="log" placeholder="enter your log id"></td>
		</tr>
		<tr>
			<th>Password:</th><td><input type="Password" name="Password" placeholder="enter your Password"></td>
		</tr>
		<tr>
			<th>Phone Number:</th><td><input type="text" name="phone" placeholder="enter your phone number"></td>
		</tr>
		<tr>
			<td colspan="6"><input type="file" name="image"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Register"></td>
		</tr>
	</table>
</form>
</body>
</html>