<pre>
<?php
	print_r($_POST);

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
	

	if(isset($_POST["btnAdd"]))
	{
		echo "<br>Addition : ";
		$c = add($a,$b);
		echo $c;
	}else if(isset($_POST["btnSub"]))
	{
		echo "<br>Substraction : ";
		$c = sub($a,$b);
		echo $c;
	}else if(isset($_POST["btnDiv"]))
	{
		echo "<br>Division : ";
		$c = div($a,$b);
		echo $c;
	}else if(isset($_POST["btnMul"]))
	{
		echo "<br>Multiplication : ";
		$c = mul($a,$b);
		echo $c;
	}else if(isset($_POST["btnMod"]))
	{
		echo "<br> Modulo : ";
		$c = mod($a,$b);
		echo $c;
	}else
	{
		echo "Bad Request";
	}
?>
</pre>