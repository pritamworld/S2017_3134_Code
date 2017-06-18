
<html>

<style type="text/css">
	.error {
    color: #FF0000;
}
</style>
<?php
// define variables and initialize with empty values
$nameErr = $addrErr = $emailErr = $howManyErr = $favFruitErr = "";
$name = $address = $email = $howMany = "";
$favFruit = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Missing";
    }
    else {
        $name = $_POST["name"];
    }

    if (empty($_POST["address"])) {
        $addrErr = "Missing";
    }
    else {
        $address = $_POST["address"];
    }

    if (empty($_POST["email"]))  {
        $emailErr = "Missing";
    }
    else {
        $email = $_POST["email"];
    }

    if (!isset($_POST["howMany"])) {
        $howManyErr = "You must select 1 option";
    }
    else {
        $howMany = $_POST["howMany"];
    }

    if (empty($_POST["favFruit"])) {
        $favFruitErr = "You must select 1 or more";
    }
    else {
        $favFruit = $_POST["favFruit"];
    }
}
?>
<pre>
<form method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
Name <input type="text" name="name" value="<?php echo htmlspecialchars($name);?>">
<span class="error"><?php echo $nameErr;?></span>
Address <input type="text" name="address" value="">
Email <input type="text" name="email" value="">

How many fruits do you each every day?<input type="radio" name="howMany" 
 <?php if (isset($howMany) && $howMany == "zero") echo "checked"; ?>
 value="zero"> 0
<input type="radio" name="howMany"
 <?php if (isset($howMany) && $howMany == "one") echo "checked"; ?>
 value="one"> 1
<input type="radio" name="howMany"
 <?php if (isset($howMany) && $howMany == "two") echo "checked"; ?>
 value="two"> 2
<input type="radio" name="howMany"
 <?php if (isset($howMany) && $howMany == "twoplus") echo "checked"; ?>
 value="twoplus"> More than 2

 My favorite fruits<select name="favFruit[]" size="4" multiple="">
<?php
$options = array("apple", "banana", "plum", "pomegranate", "strawberry", "watermelon");
foreach ($options as $option) {
    echo '<option value="' . $option . '"';
    if (in_array($option, $favFruit)) {
        echo " selected";
    }
    echo ">" . ucfirst($option) . "</option>";
}
?>

</select>
Would you like to brochure?<input type="checkbox" name="brochure" value="Yes">
<input type="submit" name="submit" value="Submit">
</form>
</pre>
<?php
//if (isset($_GET["submit"])) {
    // process the form contents...
//}
//phpinfo();
?>
<!-- https://www.sitepoint.com/form-validation-with-php/ -->

