<pre>
<?php
	//print_r($_POST);

	$a = $_POST["txtNo1"];
	$b = $_POST["txtNo2"];

	function mod($a, $b)
	{
		return $a % $b;
	}
	function sub($a, $b)
	{
		return $a - $b;
	}
	function mul($a, $b)
	{
		return $a * $b;
	}
	function div($a, $b)
	{
		return $a / $b;
	}
	function add($a, $b)
	{
		return $a + $b;
	}
	
	$opt = $_POST["btnOpt"];
	switch($opt)
	{
		case "+" :
			$title = "<br>Addition : ";
			$c = add($a,$b);
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

	printf("%s : %s %s %s = %s ",$title, $a, $opt, $b, $c);
?>
</pre>