<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset style="width: 300px">
			<legend>REGISTRATION</legend>
			Name:<input type="text" name="name"><br>
			<hr>
			Email:<input type="email" name="email"><br>
			<hr>
			User Name:<input type="text" name="user_name"><br>
			<hr>
			Password:<input type="password" name="password"><br>
			<hr>
			Confirm Password:<input type="password" name="cpassword"><br>
			<hr>
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			<input type="radio" name="gender" value="Other">Other
			<hr>
			<table>
				<tr>
					<td>dd</td><td></td><td>mm</td><td></td><td>yyyy</td>
				</tr>
				<tr>
					<td><input type="tel" maxlength="2" name="dd" style="width: 40px"></td><td>/</td><td><input type="tel" maxlength="2" name="mm" style="width: 40px"></td><td>/</td><td><input type="tel" maxlength="4" name="yyyy" style="width: 40px"></td>
				</tr>
			</table>
			<hr>
			
			<input type="submit" name="submit" value="Submit"><input type="reset" name="submit" value="Reset">
		</fieldset>
	</form>	
	

</body>
</html>