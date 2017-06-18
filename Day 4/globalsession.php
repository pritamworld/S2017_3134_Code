<html>
	<body>
		<?php
			
			
			if(isset($_POST["btnAdd"]))
			{
				if(isset($GLOBALS["x"]))
				{
					$x = $GLOBALS["x"];
				}else
				{
					//$GLOBALS["x"] = 0;
					global $x;
				}
				$x = $x + 1;
				$GLOBALS["x"] = $x;
			}
			print_r($GLOBALS);
		?>
		<form method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
			<input type="submit" name="btnAdd" value="ADD">
			<span>Add : <?php echo "Global : $x"; ?></span>
			<div><?php echo session_id(); ?></div>
		</form>
	</body>
</html>
