<?php 


session_start();


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	
 		
 		<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
    email:<input type="email" name="email">
    <input type="submit" value="submit" name="submit">
</form>
 	




 	<?php
if(isset($_POST["submit"])){
$_SESSION["name"] = $_POST["name"];
$_SESSION["id"] = $_POST["id"];
echo "Session variables are set";	
}

?>
 
 </body>
 </html>