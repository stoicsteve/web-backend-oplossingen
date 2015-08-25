<?php

	$message = false;
	$deleteConfirm	=	false;
	$deleteId		=	false;

	try

	{

		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '');

		if ( isset( $_POST[ 'confirm' ] ) )
		{
			$deleteConfirm	=	true;
			$deleteId		=	$_POST[ 'confirm' ];
		}

				if ( isset( $_POST['delete'] ) )
		{
			$deleteQuery	=	'DELETE FROM bieren
									WHERE biernr = :biernr';

			$deleteStatement = $db->prepare( $deleteQuery );

			$deleteStatement->bindValue( ':biernr', $_POST['delete'] );

			$isDeleted 	=	$deleteStatement->execute();

			if ( $isDeleted )
			{
				$message['type']	=	'success';
				$message['text']	=	'Deze record is succesvol verwijderd.';
			}
			else
			{
				$message['type']	=	'error';
				$message['text']	=	'Deze record kon niet verwijderd worden. Reden: ' . $deleteStatement->errorInfo()[2];
			}
		}

	$queryString = 'SELECT * FROM bieren';

	$statement = $db->prepare($queryString);

	$statement->execute();

	$bieren	=	array();

	while ( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
	{
		$bieren[] 	=	$row;
	}

	$columnNames	=	array();
	$columnNames[]	=	'#';

	foreach( $bieren[0] as $key => $bier )
	{
		$columnNames[  ]	=	$key;
	}
	}

	catch ( PDOException $e )

	{
		$messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
	}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="http://web-backend.local/cursus/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/cursus/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/cursus/css/directory.css">
    <style>
    table tr:hover {background-color: lightGreen;}
    table button, img {background-color: transparent; border: none;}
    .oneven {background-color: #EEE;}
    </style>
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Overzicht van de bieren</h1>

			<?php if ( $message ): ?>
				<div class="modal <?= $message[ "type" ] ?>">
					<?= $message['text'] ?>
				</div>
			<?php endif ?>	

		<?php if ( $deleteConfirm ): ?>
			<div>
				Bent u zeker dat u deze record wilt verwijderen?
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

					<button type="submit" name="delete" value="<?= $deleteId ?>">
						Absoluut zeker!
					</button>

					<button type="submit">
						Ongedaan maken
					</button>

				</form>
			</div>
		<?php endif ?>

		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

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
					<tr class="<?= ( ( $key + 1) %2 == 0 ) ? 'even' : 'oneven' ?>">
						<td><?= ($key + 1) ?></td>
						<?php foreach ($bier as $value): ?>
							<td><?= $value ?></td>
						<?php endforeach ?>
						<td>
							<!-- http://stackoverflow.com/questions/7935456/input-type-image-submit-form-value -->
							<button type="submit" name="confirm" value="<?= $bier['biernr'] ?>" class="delete-button">
								<img src="icon-delete.png" alt="Delete button">
							</button>
						</td>
					</tr>
				<?php endforeach ?>
				
			</tbody>

		</table>

		</form>

	</section>

</body>

</html>