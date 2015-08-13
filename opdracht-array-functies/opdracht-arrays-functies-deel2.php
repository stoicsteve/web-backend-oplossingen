<?php

	$dieren = array( 'bok', 'ezel', 'geit', 'kangeroe', 'struisvogel', 'kaketoe');
	$zoogdieren = array ( 'dolfijn', 'hond', 'kat' );
	$dierenLijst = array_merge($dieren, $zoogdieren);
?>

<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Naamloos document</title>
    </head>

    <body>
    
    	<p>Merge:</p>
    	<pre><?php print_r($dierenLijst); ?>
    	</pre>

    </body>
    
</html>