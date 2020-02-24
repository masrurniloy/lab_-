<?php
session_start();
?>
<html>
<head><title>Next</title></head>
<body>
<form method="post" action="After.php">
<?php
if(isset($_POST["submit"]))
{
	$_SESSION["Name"]=$_POST["name"];
	$_SESSION["Email"]=$_POST["email"];
	$_SESSION["Gender"]=$_POST["gender"];
	$_SESSION["Password"]=$_POST["password"];
	
	
	echo "Session variables are set"."<br>";
	

	
}
?>
Select image to upload:
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" name="submit">
</form>
</body>

</html>









</body>
</html>