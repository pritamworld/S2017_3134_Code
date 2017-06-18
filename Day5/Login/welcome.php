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
	

	$conn = mysqli_connect("localhost","root","","db_students");
	$error=''; // Variable To Store Error Message
	if (isset($_POST['btnInsert']))
	{
    
		// Define $username and $password
	    $username=$_POST['txtUserName'];
	    $password=$_POST['txtpassword'];
	    $q="INSERT INTO tbl_login VALUES('" . $username . "','" . $password . "')";
	    echo $q;
	    $result = mysqli_query($conn,$q);
	    if($result)
	    {
	    	$error = "Record Inserted";
	    	
	    } 
	    else
	    {
	    	$error = "Error while Insert";
	    }
	}
	
?>
<pre>
<form method="POST">
	User Name <input type="text" name="txtUserName" required>
	User Passsword <input type="Passsword" name="txtpassword" required>
	Confirm Passsword <input type="Passsword" name="txtcpassword" required>
	<div><?php echo $error; ?></div>
	<input type="submit" name="btnInsert" value="Create">
</form>
<div>
<?php
	$q = "SELECT * FROM tbl_login";
	$result = mysqli_query($conn,$q);
	if(mysqli_num_rows($result) > 0)
	{
		echo "<table border=1> <tr><th></th><th>User ID</th><th>Password</th><th></th></tr>";
		while($r = mysqli_fetch_row($result))
		{
	
			//echo "<br>" .$r['userid'] ." --- " . $r['password'];
			echo "<tr><td><a href=" . 
				htmlspecialchars($_SERVER["PHP_SELF"]) . "?opt=S&id=$r[0]>SELECT</a></td><td>" .$r[0] ."</td><td> " . $r[1] . " </td><td><a href=" .
				htmlspecialchars($_SERVER["PHP_SELF"]) . "?opt=D&id=$r[0]>DELECT</a> </td></tr>";
		}
		echo "</table>";
	}

?>
</div>
</pre>
