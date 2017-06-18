<?php 
    session_start(); 
    include("menu.html");
?>
<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
	width:100%;
}
#outer_container
{
	width: 100%;
    max-width: 1028px;
    margin: 0 auto
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;    width:10%;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
<div id ="outer_container">
<h2>Login Form</h2>

<form action="" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name ="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</div>
</body>
</html>
<?php
$error=''; // Variable To Store Error Message
if (isset($_POST['submit']))
{
if (empty($_POST['username']) || empty($_POST['password']))
{
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
if($username=="admin" && $password == "admin@123")
{
	$_SESSION['login_user']=$username; // Initializing Session
      header("location: studentdetails.php");
} 
}
}
?>
<footer><div id='cssmenu' style="height: 20px;">Copyright (c) 2017</div></footer>