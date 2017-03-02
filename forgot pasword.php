<?php
include "forgot  password1.php";
$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"");
if($_POST['proceed'])
{
	$query3="SELECT question FROM signup";
	$run3=mysqli_query($query3);
	$q=mysqli_fetch_assoc($run3);
	$ques=$q["question"];
	echo $ques;
	$ans=$_POST['ans'];
	
	
	
		$query2="SELECT ans FROM tablename where email='$email'";
		$run2=mysqli_query($con,$query2);
		if(mysqli_num_rows($run2)==1)
		{
			$temp = mysqli_fetch_assoc($run2);
			$to = $temp['email'];
			$from = "WooStyle";
			$url = "http://woostyl.in";
			$body = "WooStyle Password Recovery Script
					-----------------------------
                    -------------------------
					Url: '$url'; 
					email details is: '$to';
					Here is your Password: '$pass';
						Sincerely WooStyle";
			$from = "Your-email- address@domaindotcom";
			$subject = "WooStyle password recovered";
			$sentmail = mail($to,$subject,$body,$headers1);
			if($sentmail == 1)
			{
				echo "<span style='color:red'>Your Password Has Been Sent To Your Email Address</span>";
			}
			else
			{
				echo "<span style='color:red'>Your Password Could Not Be Send To Your Email Address. Try Again</span>";
			}
		}
		else
		{
			$ansErr="Answer do not match that of secret question";
		}
	
		
}
?>