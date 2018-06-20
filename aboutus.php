<?php
include('function.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
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
	<h2>About Us</h2>
	<p style="background-color:lightyellow; color:black; height:200%; width:900%; position:absolute; left:160%; border-radius:17px;">This online store was founded in 2016. We have a huge collection of books.Our goal is to give a life to books by getting them in the hands of readers across the globe.We deliver your ordered items quickly than any other online book store.We have stores in three locations, two in Kandy and the other in Colombo.</p>
</div>
	<img src="bookstore.png" style="position:absolute; top:40%; left:18%; width:50%;">
</body>
</html>	