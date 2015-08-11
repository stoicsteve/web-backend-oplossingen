<?php
	$getal = 33;
	
	if ( $drank == "cola" ) 
	{
		$antwoord = "Lekker! Ik drink graag cola.";
	} 
	elseif ( $drank == "fanta" ) 
	{
		$antwoord = "Ook al drink ik liever cola, fanta lust ik ook nog wel.";
	} 
	else 
	{
		$antwoord = "Geen cola én geen fanta? Schandalig!";
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1></h1>

		<p>Vandaag op het menu: <?php echo $drank ?></p>
		<p>- <?php echo $antwoord ?></p>

	</section>

</body>
</html>