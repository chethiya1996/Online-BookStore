<?php
	
	
	function logged_in()
	{
		include('login.php');
		return (isset($_SESSION['login_user'])) ? true : false; 
	}	
	


	
?>