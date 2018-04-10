<?PHP
	
	try
	{
		$con = new PDO("mysql:host={$_SERVER['SERVER_NAME']};dbname=control_es_pagos;charset=utf8","root","");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e)
	{
		die("Error: {$e->getMessage()}");
	}

?>