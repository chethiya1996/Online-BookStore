<?php
include('function.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
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
<div id="logstyl">	
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
	<h2>Contact Us</h2>


	<p style="position:absolute; left:30%; top:90%; width:300%;">Telephone:-081-1234567</p>
	
	<p style="position:absolute; left:30%; top:200%;">Fax:-081-1234567</p>
	
	<p style="position:absolute; left:30%; top:300%; width:300%;">Email:-thebookstore@gmail.com</p>
	
</div>

	<img src="images.jpg" style="position:absolute; left:40%; top:30%; width:30%; height:30%;">
	<img src="pe.jpg" style="position:absolute; left:20%; top:68%; width:30%; height:30%;">
	<img src="cont.png" style="position:absolute; left:60%; top:68%; width:30%; height:30%;">
	
</body>
</html>	