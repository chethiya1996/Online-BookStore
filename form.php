<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<h1><font style="color:red;">THE</font><font style="color:grey;">BOOK</font><font style="color:black;">STORE</font></h1>
	<img src="bookstore.png" style="position:absolute; top:0%; left:20%; width:8%;">

	<nav>
	<a href="home.php">Home</a>
	<a href="aboutus.php"><font style="padding-left:5%;">About Us</font></a>
	<a href="contactus.php"><font style="padding-left:5%; ">Contact Us</font></a>
	<a href="locations.php"><font style="padding-left:5%;">Our locations</font></a>
	</nav>
<form id="formposition" name="myform" method="post"  action="login.php" >
	<table>
		<tr>
		<td><input type="text" name="email"  id="email12" placeholder="Email" size="50%"; style="height:30px; border-radius:45px;  border-style:none; font-size:15px; "></td>
		</tr>
		
		<tr>
		<td><input type="password" name="password" id="password12" placeholder="Password" size="50%" style="height:30px; border-radius:45px;  border-style:none; font-size:15px; "></td>
		</tr>
		
		<tr>
		<td><input type="submit" name="formlogin" value="Login"  onclick="check(document.getElementById('email12').value,document.getElementById('password12').value)"  style="background-color:black; color:white; width:100px; height:30px; border-radius:45px; border-style:none;"></td>
		</tr>
	</table>	
</form>
<script>
function check(x,y)
{
	if(x==null && y==null)
	{
		alert("Email or Password invalid");
	}
}
</script>
</body>
</html>
