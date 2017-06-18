
<?php
	session_start();
	if(isset($_SESSION['login_user']))
	{
		echo "Welcome : ".$_SESSION['login_user'];
	}
	else
	{
		header('location: login.php');
	}
	
	include("menu.html");
	$str='[{"name":"Alfreds Futterkiste"},{"name":"Ana Trujillo Emparedados y helados"},{"name":"Antonio Moreno Taqueria"},{"name":"Around the Horn"},{"name":"Berglunds snabbkop"},{"name":"Blauer See Delikatessen"},{"name":"Blondel pere et fils"},{"name":"Bolido Comidas preparadas"},{"name":"Bon app"},{"name":"Bottom Dollar Marketse"}]';

	getJSONArray($str);
	getJSONClass($str);
	function getJSONClass($jsonStr)
	{
		echo "<b>Object Oriented Example</b></br>";
		$a = json_decode($jsonStr);
		//var_dump($a);
		echo "<ol>";
		for($i=0; $i<count($a);$i++)
		{
			echo "<li>" . $a[$i]->name . "</li>";
		}
		echo "</ol>";
	}

	function getJSONArray($jsonStr)
	{
		echo "<b>Array Example</b></br>";
		$a = json_decode($jsonStr,true);
		//var_dump($a);
		echo "<ol>";
		for($i=0; $i<count($a);$i++)
		{
			echo "<li>" . $a[$i]["name"] . "</li>";
		}
		echo "</ol>";
	}
?>
<footer><div id='cssmenu' style="height: 20px;">Copyright (c) 2017</div></footer>
