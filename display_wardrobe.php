<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"f_woostyle");

if(isset($_POST['submit'])
{
	$username=$_SESSION['login_user'];
	$query="SELECT * FROM wardrobe WHERE username='$username'";
	$run=mysqli_query($con,$query);
	while($temp=mysqli_fetch_assoc($run))
	{
		echo '<img src="data:image/jpeg;base64,'.base64_encode( $temp['image'] ).'"/>';
		echo '<a href=single.html?link='.$temp['id'].'View Profile</a>';	
	}
	
}
?>