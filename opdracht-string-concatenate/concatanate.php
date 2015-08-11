<?php
	$voornaam			= 	'Steven';
	$achternaam 		= 	'Leysen';

	$volledigeNaam 		= 	$voornaam . " " . $achternaam;
	$aantalKarakters	= 	strlen( $volledigeNaam );
?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<h1>Concatanatie</h1>

		<p><?php echo $voornaam ?></p>
		<p><?php echo $achternaam ?></p>
		
		<p>Samengevoegd door php: <?php echo $volledigeNaam ?></p>

		<p><?php echo $aantalKarakters ?></p>



</body>
</html>