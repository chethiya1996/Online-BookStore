<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<h1><font style="color:red;">THE</font><font style="color:grey;">BOOK</font><font style="color:black;">STORE</font></h1>

	<nav>
	<a href="home.php">Home</a>
	<a href="aboutus.php"><font style="padding-left:5%;">About Us</font></a>
	<a href="contactus.php"><font style="padding-left:5%; ">Contact Us</font></a>
	<a href="locations.php"><font style="padding-left:5%;">Our locations</font></a>
	</nav>
	

<div id="searchstyle">
<?php
 include('connect.php');

 
 
 
$email = $_POST['signupemail'];
$password = $_POST['signuppassword'];
$repassword=$_POST['resignuppassword'];
$name= $_POST['signupname'];
$phone= $_POST['phone'];

if($password===$repassword && !empty($_POST["signupemail"]) &&  !empty($_POST["signuppassword"]) && !empty($_POST["resignuppassword"]) && !empty($_POST["signupname"]) && ! empty($_POST["phone"]))
{
	$sql="INSERT INTO  member (Email,Password,Name,Phone)VALUES ('$email','$password','$name','$phone')";

	if (!mysqli_query($con,$sql)) 
	{
		die('Error: ' . mysqli_error($con));
	}
	echo "You have singed up successfully";
	mysqli_close($con);
}

else
{
	echo"<div id='general'>";
	echo"One or more fields are not filled or your passwords does not match";
	echo"</div>";
}


?>
</div>
</body>
</html>