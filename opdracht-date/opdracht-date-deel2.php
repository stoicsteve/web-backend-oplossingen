<?php
		
	$timestamp		=	mktime( 22 , 35, 25 , 01, 21, 1904 );
	setlocale( LC_ALL, 'nld_nld' );
	$datum	=	strftime( '%d %B %Y, %H:%M:%S %p', $timestamp );

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
		    <li><code>Nederlands:</code>: <?php echo $datum ?></li>    
		</ul>

</body>
</html>