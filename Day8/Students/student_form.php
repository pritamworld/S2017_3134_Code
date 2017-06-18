
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
	$error=''; // Variable To Store Error Message
	$sid = $pwd = $fnm = $lnm = $total = '';
	if (isset($_POST['btnInsert']))
	{
    
		// Define $username and $password
	    $sid=$_POST['txtUserName'];
	    $pwd=$_POST['txtpassword'];
	    $pwd=$_POST['txtFirstName'];
	    $pwd=$_POST['txtLastName'];
	    $pwd=$_POST['txtTotal'];

	    $q="INSERT INTO tbl_login VALUES('$sid','$pwd','$fnm','$lnm','$total')";
	    $result = mysqli_query($conn,$q);
	    if($result)
	    {
	    	$error = "Record Inserted Successfully";
	    	header('location: student_list.php');
	    } 
	    else
	    {
	    	$error = "Error while Inserting record";
	    }
	}

	if (isset($_POST['btnUpdate']))
	{
    
		// Define $username and $password
	    $sid=$_POST['txtUserName'];
	    $pwd=$_POST['txtpassword'];
	    $pwd=$_POST['txtFirstName'];
	    $pwd=$_POST['txtLastName'];
	    $pwd=$_POST['txtTotal'];

	    $q="UPDATE tbl_login SET userid='$sid',password='$pwd',firstname='$fnm',lastname='$lnm',totalmarks='$total')";
	    echo $q;
	    $result = mysqli_query($conn,$q);
	    if($result)
	    {
	    	$error = "Record Updated Successfully";
	    	header('location: student_list.php');
	    } 
	    else
	    {
	    	$error = "Error while Updating record";
	    }
	}

	//Added on 8th June 2017, Dynamic Operations using Query String
	if(isset($_GET["opt"]) && isset($_GET["id"]))
	{
		$opt = $_GET["opt"];
		$id = $_GET["id"];
		if($opt == "U")
		{
			
			$q = "SELECT * FROM tbl_login WHERE userid='$id'";
			$result = mysqli_query($conn,$q);
			if(mysqli_num_rows($result) > 0)
			{
				$row = mysqli_fetch_row($result);
				$sid = $id;
				$pwd = $row[1];
				$fnm = $row[2];
				$lnm = $row[3];
				$total = $row[4];
			}
		}
	}
	
?>
<div>
<link type="text/css" rel="stylesheet" href="css/styles.css">
<form method="POST">
	<label>User Name </label><input type="text" name="txtUserName" required value="<? echo $sid; ?>">
	<label>User Passsword </label><input type="password" name="txtpassword" required value="<? echo $pwd; ?>">
	<label>Confirm Passsword </label><input type="password" name="txtcpassword" required>
	<label>First Name</label><input type="text" name="txtFirstName" required value="<? echo $fnm; ?>">
	<label>Last Name</label><input type="text" name="txtLastName" required value="<? echo $lnm; ?>">
	<label>Total Marks </label><input type="text" name="txtMarks" required value="<? echo $total; ?>">
	<div><?php echo $error; ?></div>
	<?
		if(isset($opt) && $opt == "U")
			echo "<input type='submit' name='btnUpdate' value='Update'>";
		else
			echo "<input type='submit' name='btnInsert' value='Insert'>";
	?>
</form>


</div>
