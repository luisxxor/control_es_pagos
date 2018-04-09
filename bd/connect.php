<?PHP
	
	try
	{
		$con = new PDO("mysql:host={$_SERVER['SERVER_NAME']};dbname=control_es_pagos","root","");
	}
	catch (PDOException $e)
	{
		die("Error: {$e->getMessage()}");
	}

?>