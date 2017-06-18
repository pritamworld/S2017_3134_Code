<?php
	//Sample - 1
	$a = array(
				array("A",'B','CBC'),
				array(100,200,300,400),
				array("X","Y")
			 );
	$b = $a[0];
	
	echo $a[0][0] . "<br>";
	echo "<pre>";
	var_dump($a);
	echo "</pre>";
	echo $a[0][1] . "<br>";
	var_dump($a[0][1]);

	echo "<br>";
	var_dump($a[0]);
	echo "<br>";
	var_dump($a[1]);
	echo "<br>";
	echo $a[2];
	//echo $a[3];
	//echo $a[4];

	
?>
