
<?
	echo "<h1> DATE FORMAT</h1>";
	echo "<br>" . date('M');   
	echo "<br>" . date('Y-m-d');   // 2010-06-12
	echo "<br>" . date('m/d/y');   // 06/12/10
	echo "<br>" . date('m.d.Y');   // 06.12.2010
	echo "<br>" . date('Y');       // 2010

	echo "<h1> NUMBER FORMAT</h1>";
 	echo "<br>" . number_format(12345);            // 12,345
	echo "<br>" . number_format(12345, 2);         // 12,345.00
	echo "<br>" . number_format(12345.674, 2);     // 12,345.67
	echo "<br>" . number_format(12345.675, 2);     // 12,345.68

?>
