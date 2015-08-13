<?php

	$dieren1 	= 	array( 'kat', 'hond', 'aap', 'leeuw', 'dolfijn', 'koe', 'slak', 'worm', 'tijger', 'rups' );
	$dieren2 []	= 	'kat';
	$dieren2 []	= 	'hond'; 
	$dieren2 []	= 	'aap';
	$dieren2 []	= 	'leeuw'; 
	$dieren2 []	= 	'dolfijn'; 
	$dieren2 []	= 	'koe';
	$dieren2 []	= 	'slak'; 
	$dieren2 []	= 	'worm'; 
	$dieren2 []	= 	'tijger'; 
	$dieren2 []	= 	'rups';

	$voertuigen = 	array(	'land' 	=> 	array( 'auto', 'motor', 'bus' ), 
							'water' 	=> 	array( 'boot', 'surfplank', 'duikboot' ), 
							'lucht' => 	array( 'vliegtuig', 'helikopter') );

?>

<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Naamloos document</title>
    </head>

    <body>

    	<p>Array manier 1:</p>
    	<pre><?php print_r( $dieren1 ) ?></pre>
    
        <p>Array manier 2:</p>
    	<pre><?php print_r( $dieren1 ) ?></pre>

    	<pre><?php var_dump( $voertuigen ) ?></pre>
    
    </body>
    
</html>