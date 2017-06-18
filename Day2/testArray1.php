<?php
	//Sample - 1
	$a = array("A","B","C", "20");
	
	$a[4]= "Test";
	
	echo $a[0];
	echo $a[1];
	echo $a[2];
	echo $a[3];
	echo $a[4];

	$a[9] = "Last";

	$a[2]= "center";
	echo $a[2];

	//Sample - 2
	$b[0]= "Pritesh";
	$b[1] = "Patel";

	echo $b[0];
	echo $b[1];

	echo "<br>For Output";
	echo "<br>SIZE : " . count($a);
	for($i=0;$i<count($a);$i++)
		echo "<br>$a[$i]";
	
?>
