<?php
		
	$timestamp		=	mktime( 22 , 35, 25 , 01, 21, 1904 );
	$formaat		= 	date( 'd F Y, h:i:s a' , -2081039075 );

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
</head>

<body>

		<ul>
		    <li><code>mktime( 22 , 35, 25 , 21, 1, 1904 ):</code>: <?php echo $timestamp ?></li>
		    <li><code>date( 'd F Y, h:i:s a' , -2081039075 ):</code>: <?php echo $formaat ?></li>    
		</ul>

</body>
</html>