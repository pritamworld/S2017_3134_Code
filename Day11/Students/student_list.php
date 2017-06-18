<?php 
	require "handle_session.php";
	include("menu.html");
	// include db connect class
    require_once __DIR__ . '/db_connect.php';
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

<?php
	// connecting to db
    $db = new DB_CONNECT;
    $conn = $db->connect();

	$q = "SELECT * FROM tbl_login";
	$result = mysqli_query($conn,$q);
	if(mysqli_num_rows($result) > 0)
	{
		echo "<table border=1> <tr><th></th><th>User ID</th><th>Password</th><th>First Name</th><th>Last Name</th><th>Total Marks</th><th></th></tr>";
		while($r = mysqli_fetch_row($result))
		{
			echo "<tr><td><img src=images/" . $r[5] ." height=50 width=50/></td><td><a href=student_form.php?opt=U&id=" . $r[0] .">SELECT</a></td><td>" .$r[0] ."</td><td> " . $r[1] . "</td><td> " . $r[2] ."</td><td> " . $r[3]  ."</td><td> " . number_format($r[4],2) ." </td><td><a href=student_delete.php?opt=D&id=$r[0]>DELETE</a> </td></tr>";
		}
		echo "</table>";
	}

?>
</div>
</pre>
