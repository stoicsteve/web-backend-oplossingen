<?php

	function __autoload($className)
	{
		include_once 'classes/' . $className . '-class.php'; 
	}

	$body 	= (isset( $_GET['page'] ) ? $_GET['page'] : 'index') . '.partial.php';
	
	$page	=	new HTMLbuilder('header.partial.php', $body, 'footer.partial.php');

?>