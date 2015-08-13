<?php

	$dieren = array( 'bok', 'ezel', 'geit', 'kangeroe', 'struisvogel', 'kaketoe');
	$aantalDieren = count( $dieren );
	$opTeZoekenDier 	= 	'gorilla';
	
	
	if( in_array( $opTeZoekenDier, $dieren ) ) 
	{
		$resultaat = 'Waarde ' . $opTeZoekenDier . ' is gevonden in de lijst van dieren!';
	}
	else 
	{
		$resultaat = 'Waarde \'' . $opTeZoekenDier . '\' kon niet teruggevonden worden in de lijst van dieren!';
	}
?>

<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Naamloos document</title>
    </head>

    <body>
    
    	<p>Aantal elementen in de array: <?php echo $aantalDieren ?></p>
    	<p><?php echo $resultaat ?></p>

    </body>
    
</html>