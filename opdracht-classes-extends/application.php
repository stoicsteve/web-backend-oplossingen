<!doctype html>

<?php
	
	function __autoload( $className )
	{
		require_once( 'classes/' . $className . '.php' );
	}

		// ANIMAL CLASS
	$rat	=	new Animal('Lou', 'male', 100);
	$kat	=	new Animal('Dik', 'female', 100);
	$koe	=	new Animal('Mia', 'female', 80);

	$kat->changeHealth(-10);
	$koe->changeHealth(+5);

	// LION CLASS
	$simba 	= 	new lion('Simba', 'male', 100, 'Congo lion');
	$scar 	= 	new lion('Scar', 'female', 100, 'Kenia lion');

	// ZEBRA CLASS
	$zeke = new zebra('Zeke', 'male', 120, 'Quagga');
	$zana = new zebra('Zana', 'female', 100, 'Selous');

?>

<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
</head>

<body>

<h1>Opdracht classes extends</h1>

		<p><?php echo $rat->getName() ?> is van het geslacht <?php echo $rat->getGender() ?> en heeft momenteel <?php echo $rat->getHealth() ?> levenspunten</p>

		<p><?php echo $kat->getName() ?> is van het geslacht <?php echo $kat->getGender() ?> en heeft momenteel <?php echo $kat->getHealth() ?> levenspunten</p>

		<p><?php echo $koe->getName() ?> is van het geslacht <?php echo $koe->getGender() ?> en heeft momenteel <?php echo $koe->getHealth() ?> levenspunten</p>

<h1>Instantie van de lion class</h1>

		<p>De speciale move van <?php echo $simba->getName() ?> (soort: <?php echo $simba->getSpecies() ?>): <?php echo $simba->doSpecialMove() ?></p>

		<p>De speciale move van <?php echo $scar->getName() ?> (soort: <?php echo $scar->getSpecies() ?>): <?php echo $scar->doSpecialMove() ?></p>

<h1>Instantie van de zebra class</h1>

		<p>De speciale move van <?php echo $zeke->getName() ?> (soort: <?php echo $zeke->getSpecies() ?>): <?php echo $zeke->doSpecialMove() ?></p>

		<p>De speciale move van <?php echo $zana->getName() ?> (soort: <?php echo $zana->getSpecies() ?>): <?php echo $zana->doSpecialMove() ?></p>


</body>
</html>