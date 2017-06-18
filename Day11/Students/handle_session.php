<?php
	session_start();
	if(isset($_SESSION['login_user']))
	{
		echo "Welcome : ".$_SESSION['login_user'];
		echo "<a href='logout.php'>Logout</a>";
	}
	else
	{
		header('location: login.php');
	}
?>