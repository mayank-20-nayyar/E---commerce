<?php
$con=mysqli_connect("lcoalhost","root","");
$db=mysqli_select_db($con,"f_woostyle");

if(isset($_POST['submit'])
{
	$username=$_SESSION['login_user'];
	$query="INSERT INTO wishlist VALUES('$username', '$imgid')";
	$run=mysqli_query($con,$query) or die(mysqli_error($con));
	if($run)
	{
		header(Location:)
	}
	 
}
?>