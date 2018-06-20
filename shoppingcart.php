<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
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
include("connect.php");
include("function.php");

if(logged_in()===true)
{

	echo "<div style='position:absolute; top:8%; left:85%;'>";
	echo "Logged In";
	echo "</div>";
	echo"<a href='logout.php'><input type='submit' name='logout' value='Logout' style='position:absolute; top:13%; left:84%; background-color:black; color:white; width:100px; height:30px; border-radius:45px; border-style:none;'></a>"; 
	echo"<a href='checkcartbutton.php'><input type='submit' name='checkcart' value='My Cart' style='position:absolute; top:20%; left:84%; background-color:black; color:white; width:100px; height:30px; border-radius:45px; border-style:none;'></a>"; 

	$add=$_SERVER['QUERY_STRING'];

	$query10="SELECT * FROM book WHERE ISBN='$add'";
	$result10=mysqli_query($con,$query10);
	
	if (!$result10)
	{
		die(mysqli_error());
	} 	
	
	else
	{
		
		while($row10=mysqli_fetch_array($result10))
		{
			
			$sql3="INSERT INTO cart (ISBN,Name,Price) VALUES ('$row10[0]','$row10[1]','$row10[4]')";
		}
		
		if (!mysqli_query($con,$sql3)) 
		{
			echo "<div id='general'>";
			die('Error: ' . mysqli_error($con));
			echo"</div>";
		}
		$query11="SELECT * FROM cart";
		$result11=mysqli_query($con,$query11);
		if (!$result11)
		{
			die(mysqli_error());
		} 	
		else
		{
			$tot1=0;
			echo "<div id='general'>";
			echo"<table><tr><td>ISBN</td><td>Name</td><td>Price</td></tr>";
			while($row11=mysqli_fetch_array($result11))
			{
				echo"<tr>";
				echo " <td>$row11[1]</td><td>$row11[2]</td><td>$row11[3]</td>";
				echo "<td><a href=delete_added_item.php?";
				echo $row11[1];
				echo">Remove</a></td></tr>" ;
				$tot1=$tot1+$row11[3];
				
			}
			echo"<tr><td>TOTAL : $tot1</td></tr>";
			echo "<tr></tr><tr></tr><tr></tr><tr><td><a href='home.php'>Continue Shopping</a></td></tr>";
			echo "<tr><td><a href='purchase.php'>Purchase</a></td></tr>";
			echo"</table>";
			echo "</div>";
		}
	}
mysqli_close($con);

}

else
{
	echo"<div id='general'>	";
	echo"<b>You not currently logged in, login to purchase books.</b>";
	echo"</div>";
	echo"<a href='form.php'><input type='button' name='login' value='Login' style='position:absolute; top:5%; left:80%; background-color:black; color:white; width:100px; height:30px; border-radius:45px; border-style:none;'></a>";
	echo"<a href='sigupform.html'><input type='button' name='signupbutton' value='Sign Up' style='position:absolute; top:5%; left:90%; background-color:black; color:white; width:100px; height:30px; border-radius:45px; border-style:none;'></a>";
	
}
?>