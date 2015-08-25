<?php

	$message='';

	try 

		{

			$db = new pdo('mysql:host=localhost;dbname=bieren', 'root', '');

			$string	= 'INSERT INTO brouwers (brnaam, adres, postcode, gemeente, omzet)
							VALUES ( :brnaam, :adres, :postcode, :gemeente, :omzet )';

		

			$statement = $db->prepare( $string );

			$statement->bindParam( ':brnaam', $_POST[ 'brnaam' ] );
			$statement->bindParam( ':adres', $_POST[ 'adres' ] );
			$statement->bindParam( ':postcode', $_POST[ 'postcode' ] );
			$statement->bindParam( ':gemeente', $_POST[ 'gemeente' ] );
			$statement->bindParam( ':omzet', $_POST[ 'omzet' ] );

			$submitted = $statement->execute();

			if ( $submitted )
			{
				$insertId			=	$db->lastInsertId();
				$message	=	'Brouwerij succesvol toegevoegd. Het unieke nummer van deze brouwerij is ' . $insertId . '.';
			}
			else
			{
				$message	=	'Er ging iets mis met het toevoegen, probeer opnieuw';
			}
		}

	catch ( PDOException $e )

		{
			$messageContainer = 'Er ging iets mis: ' . $e->getmessage();
		}
	
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD insert</title>
    <link rel="stylesheet" href="http://web-backend.local/cursus/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/cursus/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/cursus/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		            <div class="facade-minimal" data-url="http://www.app.local/index.php">
                        
                    <h1>Voeg een brouwer toe</h1>

                    	<?php if ( $message ): ?>
								<?= $message ?>
						<?php endif ?>

                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                        <ul>
                            <li>
                                <label for="brouwernaam">Brouwernaam</label>
                                <input type="text" id="brnaam" name="brnaam">
                            </li>
                            <li>
                                <label for="adres">Adres</label>
                                <input type="text" id="adres" name="adres">
                            </li>
                            <li>
                                <label for="postcode">Postcode</label>
                                <input type="text" id="postcode" name="postcode">
                            </li>
                            <li>
                                <label for="gemeente">Gemeente</label>
                                <input type="text" id="gemeente" name="gemeente">
                            </li>
                            <li>
                                <label for="omzet">Omzet</label>
                                <input type="text" id="omzet" name="omzet">
                            </li>
                        </ul>
                        <input type="submit" name="submit">
                    </form>
                </div>

	</section>

</body>

</html>