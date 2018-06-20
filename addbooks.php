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




<?php

echo"<form id='formposition' name='addbookform' method='post' action='addbooks2.php' >
	<table>
		<tr>
		<td><input type='text' name='aname' placeholder='Author name' size='50%'; style='height:30px; border-radius:45px;  border-style:none; font-size:15px; '></td>
		</tr>
		
	
		<tr>
		<td><input type='text' name='aemail' placeholder='Author Email' size='50%'; style='height:30px; border-radius:45px;  border-style:none; font-size:15px; '></td>
		</tr>
		
		<tr>
		<td><input type='text' name='quantity' placeholder='Quantity' size='50%' style='height:30px; border-radius:45px;  border-style:none; font-size:15px; '></td>
		</tr>
		
	
		
		<tr>
		<td><input type='text' name='bookname' placeholder='Book Name' size='50%' style='height:30px; border-radius:45px;  border-style:none; font-size:15px; '></td>
		</tr>
		
		<tr>
		<td><input type='text' name='bookprice' placeholder='Price' size='50%' style='height:30px; border-radius:45px;  border-style:none; font-size:15px; '></td>
		</tr>
		
		<tr>
		<td><input type='submit' name='addbookbutton' value='Add The Book' style='background-color:black; color:white; width:100px; height:30px; border-radius:45px; border-style:none;'></td>
		</tr>
	</table>
</form>";


?>


</body>
</html>