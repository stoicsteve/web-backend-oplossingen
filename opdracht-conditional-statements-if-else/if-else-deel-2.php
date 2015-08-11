<?php

	$aantalSeconden = 221108521;

	# Seconden in:

	$minuut = 60;
	$uur = 60 * $minuut;
	$dag = 24 * $uur;
	$week = 7 * $dag;
	$maand = 31 * $dag;
	$jaar = 365 * $dag;

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
</head>

<body>

<h1>Jaren, maanden, weken, dagen, uren, minuten en seconden</h1>

<p>in 221108521 seconden:</p>

<ul>
	<li><?php echo floor( $aantalSeconden / $minuut ); ?> minuten</li>
	<li><?php echo floor( $aantalSeconden / $uur ); ?> uren</li>
	<li><?php echo floor( $aantalSeconden / $dag ); ?> dagen</li>
	<li><?php echo floor( $aantalSeconden / $week ); ?> weken</li>
	<li><?php echo floor( $aantalSeconden / $maand ); ?> maanden</li>
	<li><?php echo floor( $aantalSeconden / $jaar ); ?> jaren</li>
</ul>

</body>
</html>