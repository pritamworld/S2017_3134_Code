<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
//mysqli("localhost","root","")
$conn = new mysqli($servername, $username, $password);
//$conn = mysqli_connect($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$conn->close();
//mysqli_close($conn);
?>