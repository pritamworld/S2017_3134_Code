<?php
	class Person
	{
		var $pid;
		var $pname;

		function __construct()
		{
			echo "<h1>Hi</h1>";
		}
		function setData($id,$name)
		{
			$this->pid = $id;
			$this->pname = $name;
			//$this->getData();
		}

		function getData()
		{
			echo "<br>" . $this->pid;
			echo "<br>" . $this->pname;
		}

		function __destruct()
		{
			echo "<h1>Byee</h1>";
		}
	}

	$p = new Person;
	$p->pid = 100;
	$p->pname = "Pritesh";

	echo "<br>" . $p->pid;
	echo "<br>" . $p->pname;
	echo "<br>";

	$p->setData(200,"Test Name");
	$p->getData();
?>