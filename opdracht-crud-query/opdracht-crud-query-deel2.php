<?php

	$messageContainer	=	'';

	$geselecteerdeBrouwer	=	false;

	try
	{

		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', ''); // Connectie maken
		$messageContainer	=	'Connectie d.m.v. PDO geslaagd!';
	}


	catch ( PDOException $e )
	{
		$messageContainer	=	'Er ging iets mis bij het connecteren met de database: ' . $e->getMessage();
	}

			// Query BROUWERS klaarmaken. 
		$brouwersQueryString = "SELECT brouwernr, brnaam FROM brouwers";

		$brouwersStatement = $db->prepare($brouwersQueryString);

			// Query BROUWERS uitvoeren
		$brouwersStatement->execute();

		$brouwers	=	array();

		while ( $row = $brouwersStatement->fetch( PDO::FETCH_ASSOC ) )
		{
			$brouwers[] 	=	$row;
		}
					// Bieren query die bij brouwer horen
		if ( isset( $_GET[ 'brouwernr' ] ) )
		{
			$geselecteerdeBrouwer	=	$_GET[ 'brouwernr' ];

			$bierenQueryString	=	'SELECT bieren.naam 
										FROM bieren 
										WHERE bieren.brouwernr = :brouwernr';

			$bierenStatement = $db->prepare( $bierenQueryString );

			$bierenStatement->bindParam( ':brouwernr', $_GET[ 'brouwernr' ] );

		}
		else
		{
			$bierenQueryString	=	'SELECT bieren.naam
										FROM bieren';

			$bierenStatement = $db->prepare( $bierenQueryString );
		}

		$bierenStatement->execute();

		/* kolomnamen van het bierenresultaat ophalen */
		$bierenHeader	=	array();
		$bierenHeader[]	=	'aantal';

		for ($columnNumber = 0; $columnNumber  < $bierenStatement->columnCount( );  ++$columnNumber) 
		{ 
			$bierenHeader[] = $bierenStatement->getColumnMeta( $columnNumber )['name'];
		}

		/* bieren in een leesbare array plaatsen */
		$bieren	=	array();

		while( $row = $bierenStatement->fetch( PDO::FETCH_ASSOC ) )
		{
			$bieren[ ]	=	$row[ 'naam' ];
		}


?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database connectie - PDO</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <style>
    	.oneven {background-color: lightGreen;}
    </style>
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Database connectie - PDO</h1>	

		<p><?php echo $messageContainer ?></p>

			<form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
            <select name="brouwernr">

            <?php foreach ($brouwers as $key => $brouwer): ?>
				<option value="<?= $brouwer['brouwernr'] ?>" <?= ( $geselecteerdeBrouwer === $brouwer['brouwernr'] ) ? 'selected' : '' ?>><?= $brouwer['brnaam'] ?></option>
			<?php endforeach ?>

            </select>

            <input type="submit" value="Geef mij alle bieren van deze brouwerij">
        </form>

        <table>

        	<thead>
        		<tr>
        			<?php foreach ($bierenHeader as $columnName): ?>
						<th><?= $columnName ?></th>
					<?php endforeach ?>
        		</tr>
        	</thead>

        	<tbody>

        			<?php foreach ($bieren as $key => $biernaam): ?>
						<tr class="<?= ( ( $key + 1) %2 !== 0 ) ? 'oneven' : '' ?>">
							<td><?= ( $key + 1 ) ?></td>
							<td><?= $biernaam ?></td>
						</tr>
			<?php endforeach ?>

        	</tbody>

        </table>

	</section>
			
</body>
</html>