<?php

	$nummers = array(8, 7, 8, 7, 3, 2, 1, 2, 4);
	$uniekeNummers = array_unique($nummers, $sort_flags = SORT_NUMERIC);


?>

<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Naamloos document</title>
    </head>

    <body>
    
    	<pre>Array met unieke waarden: <?php print_r($uniekeNummers) ?></pre>

    </body>
    
</html>