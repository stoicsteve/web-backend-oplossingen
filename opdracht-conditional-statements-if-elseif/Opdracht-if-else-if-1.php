<?php
	$getal 			= 22;
	$ondergrens 	= 0;
	$bovengrens 	= 10;
	$ongeldig 		= false;
	
	if ( $getal >= 0 && $getal < 10 ) 
	{
		$ondergrens = 0;
		$bovengrens = 10;
	} 
	if ( $getal >= 10 && $getal < 20 ) 
	{
		$ondergrens = 10;
		$bovengrens = 20;
	} 
	elseif ( $getal >= 20 && $getal < 30)
	{
		$ondergrens	=	20;
		$bovengrens	=	30;
	}
	else 
	{
		$ongeldig = true;
	}

	if(!$ongeldig)
		{
			$tekst = 'Het getal ligt tussen ' . $bovengrens . ' en ' . $ondergrens . '.';
		}
	else
		{
			$tekst = 'Het getal ligt niet tussen de opgegeven waarde.';
		}

	$omgekeerdeTekst	= strrev($tekst)
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>

<body class="web-backend-inleiding">

	<p><?php echo $tekst ?></p>

	<p><?php echo $omgekeerdeTekst ?></p>

	</section>

</body>
</html>