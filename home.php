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

	<div id="logo">
	<h1><font style="color:red;">THE</font><font style="color:grey;">BOOK</font><font style="color:black;">STORE</font></h1>
	</div>
	<img src="bookstore.png" style="position:absolute; top:0%; left:20%; width:8%;">
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

<div id="pos">	
	<h2>Home</h2>
</div>
<div id="general">
	<form method="post" action="search.php">
	<table>
	<tr>
	<td><input type="text" name="textbox" size="100%"  placeholder="Search your book here" style="height:30px; border-radius:45px;  border-color:black; font-size:15px; " ><input type="submit" name="search" value="Search" style="background-color:black; color:white; width:100px; height:30px; border-radius:45px; border-style:none;"></td>
	</tr>
	</table>
	</form>
	<form method="post" action="shoppingcart.php">
	<h3>New Arrivals</h3>
	
	<table>
	<tr>
	<td><img src="The-End-Of-The-World-Running-Club-1785032666.jpg"></td>
	<td><img src="Harry-Potter-And-The-Chamber-Of-Secret-1408855666.jpg"></td>
	<td><img src="Ashley-Bell-0007520360.jpg"></td>
	</tr>
	
	<tr>
	<td>End Of World </td>
	<td>Harry Potter</td>
	<td>Ashely Bell</td>
	</tr>
	
	<tr>
	<td>LKR 1,200.00</td>
	<td>LKR 2,200.00</td>
	<td>LKR 1,150.00</td>
	</tr>

	</table>
	
	<h3>Best Selling</h3>
	
	<table>
	<tr>
	<td><img src="The-Disappearance-1848454406.jpg"></td>
	<td><img src="A-Gift-For-My-Sister-1847398405.jpg"></td>
	<td><img src="Rare-Objects-0007419872.jpg"></td>
	</tr>
	
	<tr>
	<td>The Disapperance</td>
	<td>A Gift For My Sister</td>
	<td>Rare Object</td>
	</tr>
	
	<tr>
	<td>LKR 1,00.00</td>
	<td>LKR 900.00</td>
	<td>LKR 1,560.00</td>
	</tr>

	</table>
	</form>
</div>
</body>
</html>


