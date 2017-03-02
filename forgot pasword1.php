<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"f_woostyle");
if($_POST['submit'])
{
	if(empty($_POST['username']||empty($_POST['email']);
	 $err="Username or email could not be left blank";
	
	else
	{
		$username=$_POST['username'];
		$email=$_POST['email'];
		
		$query1="SELECT email FROM signup where username='$username'";
	$run1=mysqli_query($con,$query1);
	if(mysqli_num_rows($run1)==1)
		header("Location:forgot password.php");
	else
		$err2="email did not match the corresponding username";
	}
}

?>