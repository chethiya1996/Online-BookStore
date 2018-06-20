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

$query300="SELECT * FROM cart";

$result300=mysqli_query($con,$query300);
$count300=mysqli_num_rows($result300);

if($count300==0)
{
	echo"<div id='pos'>";
	echo"No items in your cart";
	echo"<div>";
	die();
	
}
else
{
	if (!$result300)
	{
		die(mysqli_error());
	} 
	else
	{
		$tot=0;
		echo "<div id='general'>";
		echo"<table><tr><td>ISBN</td><td>Name</td><td>Price</td></tr>";
		while($row300=mysqli_fetch_array($result300))
		{
			echo"<tr>";
			echo " <td>$row300[1]</td><td>$row300[2]</td><td>$row300[3]</td>";
			echo "<td><a href=delete_added_item.php?";
			echo $row300[1];
			echo">Remove</a></td></tr>" ;
			
			$tot=$tot+$row300[3];
				
		}
		echo"<tr><td>TOTAL : $tot</td></tr>";
		echo "<tr></tr><tr></tr><tr></tr><tr><td><a href='home.php'>Continue Shopping</a></td></tr>";
		echo "<tr><td><a href='purchase.php'>Purchase</a></td></tr>";
		
		//echo"<tr><td>TOTAL : $tot</td></tr>";
		
		//echo"<td>$tot</td></tr>";
		
		
		echo"</table>";
		echo "</div>";
	}
}
?>
</body>
</html>