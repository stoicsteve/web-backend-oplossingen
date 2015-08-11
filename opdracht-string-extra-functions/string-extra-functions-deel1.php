<?php
	$fruit			= 	'kokosnoot';
	$needle			= 	'o';
	$tekstLengte	=	strlen( $fruit );
	$needlePosition = 	stripos( $fruit, $needle );
?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<h1>String extra functions</h1>

		<p><?php echo $tekstLengte ?></p>

		<p><?php echo $needlePosition ?></p>


</body>
</html>