<?php


	$message	=	false;

	

	try
	{
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' ); // Connectie maken

		if ( isset( $_POST['delete'] ) )
		{
			$deleteQuery	=	'DELETE FROM brouwers
									WHERE brouwernr = :brouwernr';

			$deleteStatement = $db->prepare( $deleteQuery );

			$deleteStatement->bindParam( ':brouwernr', $_POST['delete'] );

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

		$brouwersQuery	=	'SELECT * 
								FROM brouwers';

		$brouwersStatement = $db->prepare( $brouwersQuery );
		
		$brouwersStatement->execute();

		/*  Veldnamen ophalen*/
		$brouwersFieldnames	=	array();

		for ( $fieldNumber = 0; $fieldNumber < $brouwersStatement->columnCount(); ++$fieldNumber )
		{
			$brouwersFieldnames[]	=	$brouwersStatement->getColumnMeta( $fieldNumber )['name'];
		}

		/*De brouwer-data ophalen*/
		$brouwers	=	array();

		while( $row = $brouwersStatement->fetch( PDO::FETCH_ASSOC ) )
		{
			$brouwers[]	=	$row;
		}

	}
	catch ( PDOException $e )
	{
		$message['type']	=	'error';
		$message['text']	=	'De connectie is niet gelukt.';
	}
	
	

?>


<!DOCTYPE html>
<html>
	<head>
		<title></title>
	    <link rel="stylesheet" href="http://web-backend.local/cursus/css/global.css">
	    <link rel="stylesheet" href="http://web-backend.local/cursus/css/facade.css">
	    <link rel="stylesheet" href="http://web-backend.local/cursus/css/directory.css">
		<style>
			.modal
			{
				padding			:	6px;
				border-radius	:	3px;
			}

			.success
			{
				background-color:lightgreen;
			}

			.error
			{
				background-color:red;
			}

			.even
			{
				background-color:lightgrey;
			}

			.delete-button
			{
				background-color	:	transparent;
				border				:	none;
				padding				:	0px;
				cursor				:	pointer;
			}
		</style>
	</head>
<body class="web-backend-voorbeeld">

	<section class="body">

	<h1>Oplossing oefening 025 - a</h1>

	<?php if ( $message ): ?>
		<div class="modal <?= $message[ "type" ] ?>">
			<?= $message['text'] ?>
		</div>
	<?php endif ?>
	
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
		<table>
			
			<thead>
				<tr>
					<th>#</th>
					<?php foreach ($brouwersFieldnames as $fieldname): ?>
						<th><?= $fieldname ?></th>
					<?php endforeach ?>
					<th></th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($brouwers as $key => $brouwer): ?>
					<tr class="<?= ( ($key+1)%2 == 0 ) ? 'even' : ''  ?>">
						<td><?= ++$key ?></td>
						<?php foreach ($brouwer as $value): ?>
							<td><?= $value ?></td>
						<?php endforeach ?>
						<td>
							<!-- http://stackoverflow.com/questions/7935456/input-type-image-submit-form-value -->
							<button type="submit" name="delete" value="<?= $brouwer['brouwernr'] ?>" class="delete-button">
								<img src="icon-delete.png" alt="Delete button">
							</button>
						</td>
					</tr>
				<?php endforeach ?>
				
			</tbody>

		</table>
	</form>

</body>
</html>