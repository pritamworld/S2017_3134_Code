<?php
	$x = 100;
	function display()
	{
		global $x;
		//$x = 300;
		echo "<br>Value of X : $x";
		
	}

	function printMe()
	{
		$x = 200;
		echo "<br>Value of X : $x";
	}

	function getA()
	{
		global $x;
		$x++;
		echo "<br>getA of X : $x";
	}

	function getB()
	{
		global $x;
		$x++;
		echo "<br>getB of X : $x";
	}

	function displayCall()
	{
		static $y;
		echo "<br>Value of Y : " . var_dump($y);
		$y++;
	}

	display();
	printMe();
	echo "<br>Value of [X] : $x";

	getA();
	getB();
	
	echo "<br><br>Global : ";
	var_dump($GLOBALS['x']);
	echo "<br><br>";

	displayCall();
	displayCall();
	displayCall();

	//var_dump($GLOBALS);

?>
