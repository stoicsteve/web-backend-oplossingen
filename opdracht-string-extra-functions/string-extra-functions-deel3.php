<?php
	$lettertje			= 	'e' ;
	$cijfertje			=	3 ;
	$langsteWoord       = 'zandzeepsodemineralenwatersteenstralen';

	$vervanging 		= str_replace($lettertje, $cijfertje, $langsteWoord);

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<h1>String extra functions</h1>

		<p><?php echo $vervanging ?></p>


</body>
</html>