
<?php
session_start();
if(isset($_POST["submit"]))

?>



<?php
$target_dir = "D:/sam";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>
<?php



class person{
	public $name;
	public $email;
	public $id;

	function set_name($name){
		$this->name=$name;
	}
	function get_name(){
		return $this->name;
	}
	function set_email($email){
		$this->email=$email;
	}
	function get_email(){
		return $this->email;
	}
function set_gender($id){
		$this->id=$id;
	}
	function get_id(){
		return $this->id;
	}

} 
?>
<?php


		$obj= new person();

		if(isset($_POST["submit"])){
		$obj->set_name($_POST["name"]);
		$obj->set_email($_POST["email"]);
		$obj->set_gender($_POST["id"]);

		$ditails=$obj->get_name()." ".$obj->get_email()." ".$obj->get_id()."\n";

		$myfile = fopen("userditails.txt", "w") or die("Unable to open file!");
	
	
		fwrite($myfile,$ditails);

		echo " save ...<br>";

		?>


