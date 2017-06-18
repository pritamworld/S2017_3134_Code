
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
	include("menu.html");
	$conn = mysqli_connect("localhost","root","","db_students");
	
	//Added on 8th June 2017, Dynamic Operations using Query String
	if(isset($_GET["opt"]) && isset($_GET["id"]))
	{
		$opt = $_GET["opt"];
		$id = $_GET["id"];
		if($opt == "U")
		{
			$q = "DELETE FROM tbl_login WHERE userid='$id'";
			$result = mysqli_query($conn,$q);
			header('location: student_list.php');
		}
	}
	
?>