<?php
session_start();
$error = '';
 //echo "in loginstt";
if(isset($_POST['submit']))
{
	//echo "       in submit if ";
	if(empty($_POST['email']) || empty($_POST['password']))
	{
		$error = "Email and Password both are required";
		//echo "please enter";
		//echo "<script type='text/javascript'>alert('email and Password both are required')</script>;";
		 header("location:loginst.php");
		
	}
	else
	{
		//echo "inside else";
		$email=$_POST['email'];
		$password = $_POST['password'];
		$con = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($con,"f_woostyle");
		$email= stripslashes($email);
		$password= stripslashes($password);
		$email=mysqli_real_escape_string($con,$email);
		$password = mysqli_real_escape_string($con,$password);
		$query = "SELECT * FROM signup WHERE email='$email' and password='$password'";
		$run = mysqli_query($con,$query);
		$user=mysqli_fetch_assoc($query);
		$username=$user["name"];
		$rows = mysqli_num_rows($run);
		if($rows == 1)
		{
			//echo "in  query if";
			$_SESSION['login_user'] = $username;
			//header("location:newpost.php");
			echo "done";
		}
		
		else
		{
			$error = "email or Password is invalid";
		}
		mysqli_close($con);
	}
}
?>