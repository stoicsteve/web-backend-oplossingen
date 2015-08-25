<?php

	$messageContainer = '';

	try 

		{
			$db = new PDO('mysql:host=localhost; dbname=bieren', 'root', '');
			$messageContainer =	'Connectie dmv PDO geslaagd.';	

			$queryString = 'SELECT * 
							FROM bieren.brouwers
							INNER JOIN
							ON bieren.brouwernr = bieren.brouwernr'
		}

	catch ( PDOException $e )

		{
			$messageContainer = 'Er ging iets mis: ' . $e->getmessage();
		}

?>

<!doctype html>
	<head>

		<meta charset="utf-8">
		<title>Opdracht CRUD query</title>
		<link rel="http://web-backend.local/css/global.css">
		<link rel="http://web-backend.local/css/facade.css">
		<link rel="http://web-backend.local/css/directory.css">

	</head>



	<body>

		<h1>Opdracht CRUD query</h1>

		<?php echo $messageContainer ?>

	</body>
</html>