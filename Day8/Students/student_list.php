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
?>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<?
	$conn = mysqli_connect("localhost","root","","db_students");

	$q = "SELECT * FROM tbl_login";
	$result = mysqli_query($conn,$q);
	if(mysqli_num_rows($result) > 0)
	{
		echo "<table border=1> <tr><th></th><th>User ID</th><th>Password</th><th>First Name</th><th>Last Name</th><th>Total Marks</th><th></th></tr>";
		while($r = mysqli_fetch_row($result))
		{
	
			//echo "<br>" .$r['userid'] ." --- " . $r['password'];
			echo "<tr><td><a href=student_form.php?opt=U&id=" . $r[0] .">SELECT</a></td><td>" .$r[0] ."</td><td> " . $r[1] . "</td><td> " . $r[2] ."</td><td> " . $r[3]  ."</td><td> " . number_format($r[4],2) ." </td><td><a href=student_delete.php?opt=D&id=$r[0]>DELETE</a> </td></tr>";
		}
		echo "</table>";
	}

?>
</div>
</pre>
