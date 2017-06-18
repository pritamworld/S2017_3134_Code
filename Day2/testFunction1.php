<?php

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
	function display()
	{
	echo "Hello world, I'm a <strong>PHP</strong> script!";
	}

	display();
	echo "<br>Addition : ";
	$c = add(10,20);
	echo $c;

	echo "<br>Substraction : ";
	$c = sub(10,20);
	echo $c;
	echo "<br>Division : ";
	$c = div(10,20);
	echo $c;
	echo "<br>Multiplication : ";
	$c = mul(10,20);
	echo $c;
	echo "<br> Modulo : ";
	$c = mod(10,20);
	echo $c;
?>
