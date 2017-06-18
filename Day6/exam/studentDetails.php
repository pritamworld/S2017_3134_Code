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
    include("menu.html");

    if (isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $city = $_POST['city'];
        $hobby = $_POST['hobby'];
        $description = $_POST['description'];
        
        echo "<table border=1>";
        echo "<caption>Student Information</caption>";
        echo "<tr><th>First Name</th><td>$fname</td></tr>";
        echo "<tr><th>Last Name</th><td>$lname</td></tr>";
        echo "<tr><th>Gender</th><td>$gender</td></tr>";
        echo "<tr><th>Email</th><td>$email</td></tr>";
        echo "<tr><th>Contact</th><td>$contact</td></tr>";
        echo "<tr><th>City</th><td>$city</td></tr>";
        echo "<tr><th>Hobby</th><td>$hobby</td></tr>";
        echo "<tr><th>Description</th><td>$description</td></tr>";
        echo "</table>";
    }
?>


<footer><div id='cssmenu' style="height: 20px;">Copyright (c) 2017</div></footer>