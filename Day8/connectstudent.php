
<?php
	$conn = mysqli_connect("127.0.0.1","root","","db_students") or die("Connection failed...");

	echo "Student Database Connected";

	$rows = mysqli_query($conn,"select * from tbl_login");

	echo "<br>Total Records Fetched : " . mysqli_num_rows($rows);

	if(mysqli_num_rows($rows)>0)
	{
		//mysqli_fetch_assoc($rows)
		//mysqli_fetch_array($rows)
		
		echo "<table border=1> <tr><th>User ID</th><th>Password</th></tr>";
		while($r = mysqli_fetch_row($rows))
		{
			var_dump($r);
			//echo "<br>" .$r['userid'] ." --- " . $r['password'];
			echo "<tr><td>" .$r[0] ."</td><td> " . $r[1] . " </td></tr>";
		}
		echo "</table>";
		
		//var_dump(mysqli_fetch_all($rows));
		//echo (json_encode(mysqli_fetch_all($rows)));
	}
	mysqli_close($conn);
?>
