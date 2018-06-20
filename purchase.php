<?php
include('function.php');

?>



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
	
<?php
	if(logged_in()===true)
	{
		echo "<div style='position:absolute; top:8%; left:85%;'>";
		echo "Logged In";
		echo "</div>";
		echo"<a href='logout.php'><input type='submit' name='logout' value='Logout' style='position:absolute; top:13%; left:84%; background-color:black; color:white; width:100px; height:30px; border-radius:45px; border-style:none;'></a>"; 
		echo"<a href='checkcartbutton.php'><input type='submit' name='checkcart' value='My Cart' style='position:absolute; top:20%; left:84%; background-color:black; color:white; width:100px; height:30px; border-radius:45px; border-style:none;'></a>"; 
	}
	
	else
	{
		echo"<a href='form.php'><input type='button' name='login' value='Login' style='position:absolute; top:5%; left:80%; background-color:black; color:white; width:100px; height:30px; border-radius:45px; border-style:none;'></a>";
		echo"<a href='sigupform.html'><input type='button' name='signupbutton' value='Sign Up' style='position:absolute; top:5%; left:90%; background-color:black; color:white; width:100px; height:30px; border-radius:45px; border-style:none;'></a>";
	}
		
?>	


<?php

include("connect.php");


$query202="SELECT * FROM cart";
$result202=mysqli_query($con,$query202);

if (!$result202)
{
	die(mysqli_error());
}

else
{ 
	while($row202=mysqli_fetch_array($result202))
	{
	
		$isbn=$row202[1];
		$query203="UPDATE book SET Quantity=Quantity-1 WHERE ISBN='$isbn'";
		$result203=mysqli_query($con,$query203);

		if (!$result203)	
		{
			die(mysqli_error());
		}

		else
		{
			$query201="DELETE FROM cart WHERE ISBN='$isbn'";

			$result201=mysqli_query($con,$query201);

			if (!$result201)
			{
				die(mysqli_error());
			} 
		}
	}
	echo"<div id='pos'>";
	echo "Thank You For Purchasing From Our Site.";
	echo"</div>";
	mysqli_close($con);
}	
?>	
	
</body>
</html>	
