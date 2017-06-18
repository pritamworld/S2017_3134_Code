<?php
	//Sample - 1
	$a = array("id"=>1, "name"=>"Test", 1000, "cities"=> array("Toronto","London"), 2000
			 );
	
	echo $a["name"];
	echo "<pre>";
	var_dump($a);
	echo "<br>JSON OUTPUT<br>";
	echo json_encode($a);
	echo "</pre>";
	
?>
