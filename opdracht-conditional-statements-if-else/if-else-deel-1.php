<?php

	$jaartal = 2015;
	$schrikkeljaar = false;
	
	if ( ( ( $jaartal % 4 == 0 ) && ( $jaartal % 100 != 0 ) ) || ( $jaartal % 400 == 0) )

		{ 
			$schrikkeljaar = true;
		}
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
</head>

<body>

<p><?php echo $jaartal ?> Is <?php echo ( $schrikkeljaar ) ? 'een' : 'geen'; ?> schrikkeljaar.</p>

</body>
</html>