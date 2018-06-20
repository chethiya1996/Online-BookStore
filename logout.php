<?php
session_start();

if(session_destroy())
{
include("connect.php");
$sql8="DELETE FROM cart";
$result8=mysqli_query($con,$sql8);
	
	if (!$result8)
	{
		die(mysqli_error());
	} 
	
	
header("Location: form.php");
}
?>