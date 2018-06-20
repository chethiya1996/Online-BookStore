<?php

include("connect.php");

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST")
{	
	
	error_reporting(0);
	$myemail=$_POST['email']; 
	$mypassword=$_POST['password']; 

	$sql="SELECT * FROM member WHERE Email='$myemail' and Password='$mypassword'";
	$result=mysqli_query($con,$sql);

	$row=mysqli_fetch_array($result);
	
	
	$count=mysqli_num_rows($result);
	if($count==1)
	{

		$_SESSION['login_user']=$myemail;
		
		if($myemail==='admin@gmail.com')
		{
			header("Location: admin.php");
		}
	
		else
		{
			header("Location: home.php");
			die();
		}
			
	}
	

mysqli_close($con);	
}
?>
