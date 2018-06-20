<?php
include('function.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Our Locations</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1><font style="color:red;">THE</font><font style="color:grey;">BOOK</font><font style="color:black;">STORE</font></h1>
	<img src="bookstore.png" style="position:absolute; top:0%; left:20%; width:8%;">
	
	
	<nav>
	<a href="home.php">Home</a>
	<a href="aboutus.php"><font style="padding-left:5%;">About Us</font></a>
	<a href="contactus.php"><font style="padding-left:5%;">Contact Us</font></a>
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

<div id="pos">
	<h2>Our Locations</h2>
	<p style="position:absolute; left:30%; top:90%; width:100%;">Head Office:<br>09B,<br>Colombo 07.</p>
	<p style="position:absolute; left:30%; top:200%;"><br><br>Branch:<br>07A,<br>Katugastota,<br>Kandy.</p>
	<p style="position:absolute; left:30%; top:400%; width:200%"><br><br>Branch:<br>810C,<br>Peradeniya Road,<br>Kandy.</p>
</div>
	<img src="map2.png"  style="position:absolute; left:30%; top:30%; width:50%; height:70%;">
</body>
</html>