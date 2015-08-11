<?php
	$nummer = "1";
	

	if ( $nummer == "1" ) 
	{
		$naamDag = "maandag";
	}
	
	if ( $nummer == "2" ) 
	{
		$naamDag = "dinsdag";
	}	

	if ( $nummer == "3" ) 
	{
		$naamDag = "woensdag";
	}
	
	if ( $nummer == "4" ) 
	{
		$naamDag = "donderdag";
	}

	if ( $nummer == "5" ) 
	{
		$naamDag = "vrijdag";
	}

	if ( $nummer == "6" ) 
	{
		$naamDag = "zaterdag";
	}

	if ( $nummer == "7" ) 
	{
		$naamDag = "zondag";
	}

	$dagHoofdletters = strtoupper ( $naamDag ) ;
	$hoofdlettersBehalveA = str_replace( 'A', 'a', $dagHoofdletters ) ;
	$laatsteA = strrpos($naamDag, 'a');
	$hoofdlettersBehalveLaatsteA = substr_replace( $dagHoofdletters, 'a', $laatsteA, 1 ) ;
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
</head>
<body class="web-backend-inleiding">

	<section class="body">
	
		<h1>Deel 1</h1>

		<p>Het nummer <?php echo $nummer ?> komt overeen met <?php echo $dagHoofdletters ?>.</p>

		<p>Het nummer <?php echo $nummer ?> komt overeen met <?php echo $hoofdlettersBehalveA ?>.</p>

		<p>Laatste a: <?php echo $laatsteA ?>.</p>

		<p>Het nummer <?php echo $nummer ?> komt overeen met <?php echo $hoofdlettersBehalveLaatsteA ?>.</p>

	</section>

</body>
</html>