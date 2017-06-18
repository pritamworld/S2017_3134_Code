
<?php 
	require "handle_session.php";
	include("menu.html");

	$conn = new mysqli_connect("localhost","root","","db_students");
	$error=''; // Variable To Store Error Message
	$sid = $pwd = $fnm = $lnm = $total = '';
	$file_name = "no_photo.gif";
	if (isset($_POST['btnInsert']))
	{
    
		// Define $username and $password
	    $sid=$_POST['txtUserName'];
	    $pwd=$_POST['txtpassword'];
	    $fnm=$_POST['txtFirstName'];
	    $lnm=$_POST['txtLastName'];
	    $total=$_POST['txtMarks'];

	    if(uploadImage())
	    {
	    	$file_name = $_FILES['imgStudent']['name'];
	    }

	    //$q="INSERT INTO tbl_login VALUES('$sid','$pwd','$fnm','$lnm','$total','$file_name')";
	    $stmt = $conn->prepare("INSERT INTO tbl_login VALUES(?,?,?,?,?,?)";
	    $stmt->bind_param("sss", $sid, $pwd, $fnm,$lnm,$total,$file_name);
	    $result = $stmt->execute();

	    //echo $q;
	    //$result = mysqli_query($conn,$q);
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
	    $fnm=$_POST['txtFirstName'];
	    $lnm=$_POST['txtLastName'];
	    $total=$_POST['txtMarks'];
	    if(uploadImage())
	    {
	    	$file_name = $_FILES['imgStudent']['name'];
	    	//echo $file_name;
	    }

	    $q="UPDATE tbl_login SET password='$pwd',firstname='$fnm',lastname='$lnm',totalmarks='$total',photo='$file_name' WHERE userid='$sid'";
	    //echo $q;
	    $result = mysqli_query($conn,$q);
	    if($result)
	    {
	    	$error = "Record Updated Successfully";
	    	//header('location: student_list.php');
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
				$file_name = $row[5];
			}
		}
	}

	function uploadImage()
	{
		if(isset($_FILES['imgStudent']))
		{
	      $errors= array();
	      $file_name = $_FILES['imgStudent']['name'];
	      $file_size = $_FILES['imgStudent']['size'];
	      $file_tmp = $_FILES['imgStudent']['tmp_name'];
	      $file_type = $_FILES['imgStudent']['type'];
	      $file_ext=strtolower(end(explode('.',$_FILES['imgStudent']['name'])));
	      
	      $expensions= array("jpeg","jpg","png");
	      
	      if(in_array($file_ext,$expensions) === false){
	         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
	      }
	      
	      if($file_size > 2097152) {
	         $errors[]='File size must be excately 2 MB';
	      }
	      
	      if(empty($errors)==true) {
	         move_uploaded_file($file_tmp,"images/".$file_name);
	         return true;
	      }else{
	      	print_r($errors);
	        return false;
	      }
   		}
   		return false;
	}
	
?>
<div>
<link type="text/css" rel="stylesheet" href="css/styles.css">
<form method="POST" enctype = "multipart/form-data">
	<label>User Name </label><input type="text" name="txtUserName" required value="<?php echo $sid; ?>">
	<label>User Passsword </label><input type="password" name="txtpassword" required value="<?php echo $pwd; ?>">
	<label>Confirm Passsword </label><input type="password" name="txtcpassword" required>
	<label>First Name</label><input type="text" name="txtFirstName" required value="<?php echo $fnm; ?>">
	<label>Last Name</label><input type="text" name="txtLastName" required value="<?php echo $lnm; ?>">
	<label>Total Marks </label><input type="text" name="txtMarks" required value="<?php echo $total; ?>">
	<label>Please Select your image</label><input type = "file" name = "imgStudent" /><img src='<?php echo "images/$file_name" ?>' height=50 width=50/>
	<div><?php echo $error; ?></div>
	<?php
		if(isset($opt) && $opt == "U")
			echo "<input type='submit' name='btnUpdate' value='Update'>";
		else
			echo "<input type='submit' name='btnInsert' value='Insert'>";
	?>
</form>


</div>
