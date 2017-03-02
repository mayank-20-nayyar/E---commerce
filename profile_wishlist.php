<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"f_woostyle");

if(isset($_POST['submit'])
{
	$username=$_SESSION['login_user'];
	$query1="SELECT imgid FROM wishlist WHERE username='$username'";
	$run1=mysqli_query($con,$query1) or die(mysqli_error($con));
	if($run1)
	{
		while($t=mysqli_fetch_assoc($run1))
		{
			$query2="SELECT * FROM post where id='$t['imgid']'";
			$run2=mysqli_query($con,$query2) or die(mysqli_error($con));
			
			if($run2)
			{
				while($temp=mysqli_fetch_assoc($run2))
				{
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $temp['image'] ).'"/>';
					echo '<a class="btn btn-primary" href=single.html?link='.$temp['id'].'View Product</a>';
					
				}
			}
		}
	}
}
?>