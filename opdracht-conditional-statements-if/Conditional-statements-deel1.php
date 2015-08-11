<?php
	$nummer = "5";
	

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

		<p>Het nummer <?php echo $nummer ?> komt overeen met <?php echo $naamDag ?>.</p>

	</section>

</body>
</html>