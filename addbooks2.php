
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
	<a href="admin.php">Admin</a>
	</nav>
<?php
		if(logged_in()===true)
		{
			echo "<div style='position:absolute; top:8%; left:85%;'>";
			echo "Logged In";
			echo "</div>";
			echo"<a href='logout.php'><input type='submit' name='logout' value='Logout' style='position:absolute; top:13%; left:84%; background-color:black; color:white; width:100px; height:30px; border-radius:45px; border-style:none;'></a>"; 
			
		}
	
?>
	
	
	
	<div id="pos">	
<?php

 include('connect.php');

 
 
 
$aname = $_POST['aname'];
$aemail=$_POST['aemail'];
$quantity= $_POST['quantity'];
$bookname= $_POST['bookname'];
$bookprice= $_POST['bookprice'];

if(!empty($_POST["aname"]) &&   !empty($_POST["aemail"])  &&  !empty($_POST["quantity"]) && !empty($_POST["bookname"]) && !empty($_POST["bookprice"]))
{
	/*$sql6="INSERT INTO  author (Name,Phone,Email) VALUES ('$aname','$aphone','$aemail')";
	$sql7="INSERT INTO  stock (Quantity) VALUES ('$quantity')";*/
	$sql7="INSERT INTO  book (Author_Name,Email,Quantity,Name,Price) VALUES ('$aname','$aemail','$quantity','$bookname','$bookprice')";


	/*if (!mysqli_query($con,$sql7)) 
	{
		die('Error: ' . mysqli_error($con));
	}
	if (!mysqli_query($con,$sql6)) 
	{
		die('Error: ' . mysqli_error($con));
	}*/
	if (!mysqli_query($con,$sql7)) 
	{
		die('Error: ' . mysqli_error($con));
	}

	echo "You have updated the database successfully";
	mysqli_close($con);
}

else
{	

	echo"All the fields  have to be filled";
	
}


?>

</div>
</body>
</html>