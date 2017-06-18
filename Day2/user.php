
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $nameErr1 ="";
$name = $lastname = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
   if (empty($_POST["lastname"])) {
    $nameErr1 = "Last Name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr1 = "Only letters and white space allowed"; 
    }
  }
    
  if (empty($_POST["website"]))
	  {
    $websiteErr = "Choose one value"; 
      } 
  else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if ( $website == "") {
      $websiteErr = "Choose one value"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  First Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Last Name: <input type="text" name="lastname" value="<?php echo $lastname;?>">
  <span class="error">* <?php echo $nameErr1;?></span>
  <br><br>
  City
  <select name="website" value="<?php echo $website;?>">
  <option value="toronto">Toronto</option>
  <option value="newyork">Newyork</option>
  <option value="delhi">Delhi</option>
  <option value="london">London</option>
</select>
 
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Adress: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
if(isset($_POST['submit']))
{
echo "<h2>Your Input:</h2>";
echo "First Name:  ".$name;
echo "<br>";
echo "Last Name:  ".$lastname;
echo "<br>";
echo "City Name:  ".$website;
echo "<br>";
echo "Adress:  ".$comment;
echo "<br>";
echo "Gender:  ".$gender;
}
?>

</body>
</html>