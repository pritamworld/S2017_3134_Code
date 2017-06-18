<?php
	//Sample - 1
	$a = array(
				array("A",'B','CBC'),
				array(100,200,300,400),
				array("X","Y")
			 );
	$b = $a[0];
	
	echo "<pre>";
	var_dump($a);
	

	$b[0]= "Pritesh";
	echo $b[0] . "<br>";
	var_dump($a);
	echo "</pre>";

	
?>
