<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<h1><font style="color:red;">THE</font><font style="color:grey;">BOOK</font><font style="color:black;">STORE</font></h1>

	

<div id="pos">
<?php
echo"Hello Store Manager<br><br><br>";

include("connect.php");

session_start();

	echo "<div style='position:absolute; top:-5%; left:90%;'>";
	echo "Logged In";
	echo "</div>";
	echo"<a href='logout.php'><input type='submit' name='logout' value='Logout' style='position:absolute; top:0%; left:89%; background-color:black; color:white; width:100px; height:30px; border-radius:45px; border-style:none;'></a>"; 


$query1="SELECT * FROM member WHERE Mid!='1'";
$result3=mysqli_query($con,$query1);

if (!$result3)
{
	
	die(mysqli_error($con));
	
}

echo"<table><tr><td>Mid</td><td>Name</td><td>Email</td><td>Phone</td></tr>";


while($row3=mysqli_fetch_array($result3))
{
	echo"<tr>";
	echo " <td>$row3[0]</td><td>$row3[1]</td><td>$row3[2]</td><td>$row3[3]</td><td><a href=deletemember.php?";
	echo $row3[0];
	echo">Delete</a></td></tr>" ;
	
}
echo"</table>";


$query99="SELECT * FROM book";
$result99=mysqli_query($con,$query99);

if (!$result99)
{
	
	die(mysqli_error($con));
	
}

echo"<table><tr><td>ISBN</td><td>Book Name</td><td>Author Name</td><td>Email</td><td>Price</td><td>Quantity</td></tr>";

echo"<br><br><br><br>";
while($row99=mysqli_fetch_array($result99))
{
	echo"<tr>";
	echo " <td>$row99[0]</td><td>$row99[1]</td><td>$row99[2]</td><td>$row99[3]</td><td>$row99[4]</td><td>$row99[5]</td></tr>";
}
echo"</table>";




echo"<a href='addbooks.php'><input type='button' name='addbooks' value='Add a new book' style='position:absolute; top:100%; left:4%; background-color:black; color:white; width:100px; height:30px; border-radius:15px; border-style:none;'></a>";
		

/*$query2="SELECT * FROM book";
$result4=mysqli_query($con,$query2);

if (!$result4)
{
	
	die(mysqli_error($con));
	
}

echo"<br><br><table><tr><td>ISBN</td><td>Name</td><td>Price</td><td>Sid</td><td>Aid</td></tr>";


while($row4=mysqli_fetch_array($result4))
{
	echo"<tr>";
	echo " <td>$row4[0]</td><td>$row4[1]</td><td>$row4[2]</td><td>$row4[3]</td><td>$row4[4]</td><td><a href=deletemember.php?";
	echo $row4[0];
	echo">Delete</a></td></tr>" ;
	
}
echo"</table>";*/
?>
</div>
</body>
</html>