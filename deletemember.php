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
include("connect.php");

$member_delete=$_SERVER['QUERY_STRING'];

$query4="DELETE FROM member WHERE Mid='$member_delete'";
$result4=mysqli_query($con,$query4);

if (!$result4)
{
	die(mysqli_error());
} 
else
{
	echo "<div id='pos'>";
	echo "Selected Member details deleted.";
	echo "</div>";
}
mysqli_close($con);
?>

</body>
</html>

