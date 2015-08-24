<?php

	$messageContainer	=	'';

	try
	{

		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', ''); // Connectie maken
		$messageContainer	=	'Connectie dmv PDO geslaagd.';
	}


	catch ( PDOException $e )
	{
		$messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
	}

			// Een query klaarmaken. 
		$queryString = "SELECT * FROM brouwers WHERE brnaam LIKE 'Du%' AND brnaam LIKE '%a%'";

		$statement = $db->prepare($queryString);

		// Een query uitvoeren
		$statement->execute();

		$bieren	=	array();

		while ( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
		{
			$bieren[] 	=	$row;
		}

		$columnNames	=	array();
		$columnNames[]	=	'Biernummer';

		foreach( $bieren[0] as $key => $bier )
		{
			$columnNames[  ]	=	$key;
		}


?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van database connectie - PDO</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van database connectie - PDO</h1>	

		<p><?php echo $messageContainer ?></p>

		<table>
		
			<thead>
				<tr>
					<?php foreach ($columnNames as $columnName): ?>
						<th><?= $columnName ?></th>
					<?php endforeach ?>
				</tr>
			</thead>

			<tbody>
			
				<?php foreach ($bieren as $key => $bier): ?>
					<tr class="<?= ( ( $key + 1) %2 == 0 ) ? 'even' : '' ?>">
						<td><?= ($key + 1) ?></td>
						<?php foreach ($bier as $value): ?>
							<td><?= $value ?></td>
						<?php endforeach ?>
					</tr>
				<?php endforeach ?>
				
			</tbody>

	</table>

	</section>
			
</body>
</html>