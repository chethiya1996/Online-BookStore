<?php
include('function.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Result</title>
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
	

<div id="searchstyle">
<?php



include("connect.php");


$searchbook=$_POST['textbox'];



if(empty($searchbook))
{
	echo"Please type in a name of a book to search.";
	die();
	
}
else
{
	$query="SELECT * FROM book WHERE Name LIKE '%$searchbook%'";
	
}


$result2=mysqli_query($con,$query);

if (!$result2)
{
	
	die(mysqli_error($con));
	
}
$count2=mysqli_num_rows($result2);
if($count2==0)
{	echo "<div id='general'>";
	echo"Searched Book Not Found...";
	echo"</div>";
}

echo "<div id='general'>";
while($row2=mysqli_fetch_array($result2))
{
		if($row2[0]=="1000")
		{
			echo "<img src='The-End-Of-The-World-Running-Club-1785032666.jpg'> ";
			
		}
	
		if($row2[1]=="Harry Potter")
		{
			echo "<img src='Harry-Potter-And-The-Chamber-Of-Secret-1408855666.jpg'>";
			
		}
	
		if($row2[1]=="Ashely Bell")
		{
			echo "<img src='Ashley-Bell-0007520360.jpg'> ";
		}
	
		
		if($row2[1]=="The Disapperance")
		{
			echo "<img src='The-Disappearance-1848454406.jpg'> ";
		}
		if($row2[1]=="A Gift For My Sister")
		{
			echo "<img src='A-Gift-For-My-Sister-1847398405.jpg'> ";
		}
		
		if($row2[1]=="Rare Object")
		{
			echo "<img src='Rare-Objects-0007419872.jpg'> ";
		}
		if($row2[1]=="Emperor Of The Eight Islands")
		{
			echo "<img src='Emperor-Of-The-Eight-Islands-1509812784.jpg'> ";
		
		}
		if($row2[1]=="Golden Lion With Giles Kristia")
		{
			echo "<img src='Golden-Lion-With-Giles-Kristian-0008132801.jpg'> ";
			
		}
		if($row2[0]=="1008")
		{
			echo "<img src='Hitman-Anders-And-The-Meaning-Ofitall-0008152071.jpg'> ";
		
		}
		if($row2[1]=="Pick Your Poison")
		{
			echo "<img src='Pick-Your-Poison-0007334273.jpg'> ";
		
		}
		if($row2[1]=="The Theory Of Death")
		{
			echo "<img src='The-Theory-Of-Death-0007517718.jpg'> ";
			
		}
		
		echo " <br>$row2[1]"."<br>"."LKR $row2[4] <br>"."Author name : $row2[2] <br>"."Author email : $row2[3] <br>" ;
		echo "<a href=shoppingcart.php?";
		echo $row2[0];
		echo"><input type='submit' value='Add To Cart' style='background-color:black; color:white;'></a></td></tr>" ;
		echo "<br>";	
	
}
echo"</div>";


mysqli_close($con);
?>
</div>



</body>
</html>