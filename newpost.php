<?php

$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"f_woostyle");
if(isset($_POST['submit']))
{
	if(empty($_POST['tagline'])||empty($_POST['description']))
		$err="fields  should not be left blank";
	else
	{
		$tagline=$_POST['tagline'];
		$description=$_POST['description'];
	}
	$category=$_POST['category'];
	//$username=$_SESSION['login_user'];
	
	echo $tagline;
	echo $description;
	echo $category;
	//echo $username;
	$user="mayank";
	
$fileUpload_name=($_FILES['image']['name']);
$fileUpload_size=($_FILES['image']['size']);
$fileUpload_type=($_FILES['image']['type']);
$fileUpload=( $_FILES['image']['tmp_name']);





$fileHandle = fopen($fileUpload, "r");

$fileContent = fread($fileHandle, $fileUpload_size);

$fileContent = addslashes($fileContent);
	
	
	
	$query="INSERT INTO post (id ,username ,tagline ,description ,category ,image) VALUES(NULL, '$user', '$tagline', '$description', '$category', '$fileContent')" or die(mysqli_error($con));
	$run=mysqli_query($con,$query);
	
	
	
	
	if($run)
	{
		echo "success";
		
		
		
		
		
		
	}		
}
?>