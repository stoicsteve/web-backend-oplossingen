<?php

    session_start();

    var_dump( $_POST );
	var_dump( $_SESSION );

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
</head>

<body>

    <form action="phpoefening-021-deel3.php" method="POST">
    
    <ul>
	        <li>
	            <label for="straat">straat</label>
	            <input type="text" id="straat" name="straat" value="<?= $straat ?>" placeholder="vul straat in"  <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "straat" ) ? 'autofocus' : '' ?>>
	        </li>
	        <li>
	            <label for="nummer">nummer</label>
	            <input type="text" id="nummer" name="nummer" value="<?= $nummer ?>" placeholder="vul nummer in"  <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "nummer" ) ? 'autofocus' : '' ?>>
	        </li>
	        <li>
	            <label for="gemeente">gemeente</label>
	            <input type="text" id="gemeente" name="gemeente" value="<?= $gemeente ?>" placeholder="vul gemeente in"  <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "gemeente" ) ? 'autofocus' : '' ?>>
	        </li>
	        <li>
	            <label for="postcode">postcode</label>
	            <input type="text" id="postcode" name="postcode" value="<?= $postcode ?>" placeholder="vul postcode in"  <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "postcode" ) ? 'autofocus' : '' ?>>
	        </li>
	    </ul>

	    <input type="submit" name="submit">

    </form>
</body>
</html>
