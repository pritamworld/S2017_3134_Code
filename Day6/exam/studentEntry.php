<?php
	session_start();
	if(isset($_SESSION['login_user']))
	{
		echo "Welcome : ".$_SESSION['login_user'];
	}
	else
	{
		header('location: login.php');
	}
?>
<!DOCTYPE HTML>
<html>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact</title>

<link type="text/css" rel="stylesheet" href="css/styles.css">

</head>

<body>
	<?php
		include("menu.html");
	?>

    <section class="body">
    
	    <form action="studentDetails.php" method="post" enctype="multipart/form-data">
	        
	        <h1 class="title">Student Details</h1>
	        
		    <label></label>
		    <input name="fname" required="required" placeholder="First Name">
		    
		    <label></label>
		    <input name="lname" required="required" placeholder="Last Name">
		    

		     <label></label>
		   	<input type="radio" name="gender" value="Male" checked> Male
  			<input type="radio" name="gender" value="Female"> Female<br>
		            
		    <label></label>
		    <input name="email" type="email" required="required" placeholder="Your Email">

		    <label></label>
		    <input name="contact" type="text" required="required" placeholder="Contact">
 
 			<label></label>
		    <select name="city" placeholder="Contact">
		     <option value="[--SELECT CITY--]">[--SELECT CITY--]</option>
			  <option value="Toronto">Toronto</option>
			  <option value="London">London</option>
			  <option value="New York">New York</option>
			  <option value="Mumbai">Mumbai</option>
			</select>
		           
		   <label></label> 
		  <input list="hobbies" name="hobby" placeholder="[--SELECT HOBBEY--]">
		  <datalist id="hobbies">
		    <option value="Foot Ball">
		    <option value="Cricket">
		    <option value="Hockey">
		    <option value="Baseball">
		    <option value="Swimming">
		  </datalist>
		    
		    <label></label>
		    <textarea name="description" cols="20" rows="5" required="required" placeholder="Description"></textarea>
		    
		    		    
		    <input id="cancel" name="cancel" value="Cancel" />
		            
		    <input id="submit" name="submit" type="submit" value="Submit">
	        
	    </form>

    </section>


<footer><div id='cssmenu' style="height: 20px;">Copyright (c) 2017</div></footer>
</body>

</html>