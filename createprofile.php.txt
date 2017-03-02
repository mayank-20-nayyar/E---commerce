<! DOCTYPE html>
<html>
<body>
<?php 
$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"basename");
$check = 1;
$nameErr = $emailErr = $passwordErr = $cpasswordErr = "";
$name = $email = $password = $cpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
	 $check = 0;
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
         $check = 0;
	 }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
      $check = 0;
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
        $check = 0;
	 }
   }
	if(!empty($password))
   {
	    $check = 0;
	   $passwordErr = "Please Check that you have Entered or Confirmed Your Password";
   }
	elseif($_POST["password"]!=$_POST["cpassword"])
   {
	   $check = 0;
	   $passwordErr = "The two entered passwords do not match";
   }
   else{
	   if($_POST["password"] == $_POST["cpassword"])
   {
	   $password = test_input($password);
	   $cpassword = test_input($cpassword);
	   echo "inside the parent if";
	    if(strlen($_POST["password"])<= 8 )
		{
			$passwordErr = "Password must be atleast 8 characters long";
		     $check = 0;
		}
		elseif(!preg_match("#[0-9]+#",$_POST["password"]))
		{
			 $check = 0;
			$passwordErr = "Password must contain atleast 1 number";
		}
		elseif(!preg_match("#[A-Z]+#",$_POST["password"]))
		{
			 $check = 0;
			$passwordErr = "Password must contain atleast 1 Capital Letter";
		}
		elseif(!preg_match("#[a-z]+#",$_POST["password"]))
		{
			 $check = 0;
			$passwordErr = "Password must contain atleast 1 Lower Letter";
		}
   }
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
echo $name;
echo $email;
echo $password;

$query = "INSERT into tablename values('$name','$password','$email')";
$run = mysqli_query($con,$query);
if($run && $check == 1)
{
	echo "<script>alert('your signup is successful')";
	header("Location:http://localhost/testfirstpage.php");		
}
	?>
<form id = "signup" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
username<input type= "text" name="name"><span style="color: red"> * <?php echo $nameErr; ?></span>
Password<input type = "password" name="password"><span style="color: red"> * <?php echo $passwordErr; ?></span>
Confirm Password<input type="password" name="cpassword"><span style= "color:red"> * <?php echo $cpasswordErr; ?> </span>
email<input type= "text" name= "email"><span style="color: red"> * <?php echo $emailErr; ?></span>
<input type = "submit" value = "submit">
</form>
</body>
</html> 