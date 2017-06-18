<?php
	require_once __DIR__ . '/db_connect.php';
	// connecting to db
    $db = new DB_CONNECT;
    $conn = $db->connect();

	$q = "SELECT * FROM tbl_login";
	$result = mysqli_query($conn,$q);
	if(mysqli_num_rows($result) > 0)
	{
		$response["students"] = array();
		while($row = mysqli_fetch_assoc($result))
		{
			$student = array();
	        $student["userid"] = $row["userid"];
	        $student["password"] = $row["password"];
	        $student["firstname"] = $row["firstname"];
	        $student["lastname"] = $row["lastname"];
	        $student["totalmarks"] = $row["totalmarks"];
	        $student["photo"] = "http://localhost/S2017/Day9/Students/" . $row["photo"];
 
        	// push single product into final response array
        	array_push($response["students"], $student);
		}
		// success
    	$response["success"] = 1;
    	// echoing JSON response
    	echo json_encode($response);
	}
	else
	{
		// no products found
	    $response["success"] = 0;
	    $response["message"] = "No products found";
 
	    // echo no users JSON
	    echo json_encode($response);
	}

?>
