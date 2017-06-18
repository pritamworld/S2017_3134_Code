<?php session_start(); ?>
<html>
	<body>
		<?php
		
			$x = 0;
			if(isset($_POST["btnAdd"]))
			{
				if(isset($_SESSION["x"]))
				{
					$x = $_SESSION["x"];
				}else
				{
					$_SESSION["x"] = 0;
				}
				$x = $x + 1;
				$_SESSION["x"] = $x;
			}
		?>
		<form method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
			<input type="submit" name="btnAdd" value="ADD">
			<span>Add : <?php echo $x; ?></span>
			<div><?php echo session_id(); ?></div>
		</form>
	</body>
</html>
