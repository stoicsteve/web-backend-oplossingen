<?php
	$fruit 		= 	'ananas';
	$needle 		= 	'a';
	
	$needlePosition	= 	strrpos( $fruit, $needle );

	$hoofdletters	= 	strtoupper ($fruit) ;
?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<h1>Concatanatie</h1>

		<p><?php echo $needlePosition ?></p>

		<p><?php echo $hoofdletters ?></p>

</body>
</html>