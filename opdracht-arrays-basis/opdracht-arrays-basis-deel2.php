<?php

	$nummers1 	= 	array( 1,2,3,4,5 );
	$product	= 	array_product($nummers1);
	$nummers2	= 	array( 1,2,3,4,5 );
	$som		= 	array_sum($nummers2);

?>

<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Naamloos document</title>
    </head>

    <body>

    	<p>Product:</p>
    	<pre><?php print_r( $product ) ?></pre>
    
        <p>Som:</p>
    	<pre><?php print_r( $som ) ?></pre>
    
    </body>
    
</html>