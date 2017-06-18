<!DOCTYPE html>

<html>

<head>
   <title>Your title goes here </title>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <meta http-equiv="Content-Language" content="en-us" />
</head>

<body>
	<?php
		$c = 0.0;
		$a = 0.0;
		$b = 0.0;
		if(isset($_POST["btnOpt"]))
		{
			$a = $_POST["txtNo1"];
			$b = $_POST["txtNo2"];

			$opt = $_POST["btnOpt"];
			switch($opt)
			{
				case "+" :
					$title = "<br>Addition : ";
					$c = $a + $b;
					break;
				case "-":
					$title = "<br>Substraction : ";
					$c = sub($a,$b);
					break;
				case "/":
					$title = "<br>Division : ";
					$c = div($a,$b);
					break;
				case "*":
					$title = "<br>Multiplication : ";
					$c = mul($a,$b);
					break;
				case "%":
					$title = "<br> Modulo : ";
					$c = mod($a,$b);
					break;
				default:
					echo "Bad Request";
			}
		}
	?>
	<h1>Maths Form</h1>
	<form method="post">
	<fieldset>
	<legend>Student</legend>
		Number 1 <input type="text" name="txtNo1" value="<?php echo $a ?>" ><br/>
		Number 2 <input type="text" name="txtNo2" value="<?php echo $b ?>" ><br/>
		<div>Result : <?php echo $c ?></div>
		<input type="submit" value="+" name="btnOpt"/>
		<input type="submit" value="-" name="btnOpt"/>
		<input type="submit" value="/" name="btnOpt"/>
		<input type="submit" value="*" name="btnOpt"/>
		<input type="submit" value="%" name="btnOpt"/>
		
		</fieldset>
	</form>

</body>
</html>
