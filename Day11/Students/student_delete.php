
<?php 
	require "handle_session.php";
	include("menu.html");
	$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
	
	//Added on 8th June 2017, Dynamic Operations using Query String
	if(isset($_GET["opt"]) && isset($_GET["id"]))
	{
		$opt = $_GET["opt"];
		$id = $_GET["id"];
		if($opt == "D")
		{
			$q = "DELETE FROM tbl_login WHERE userid='$id'";
			$result = mysqli_query($conn,$q);
			header('location: student_list.php');
		}
	}
	
?>