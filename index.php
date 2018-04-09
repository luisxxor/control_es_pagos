<?php

	define('ROOT',"http://".$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF'])."/"); 

	/*
		ROOT es una constante que contiene la ruta del host y el nombre de la carpeta del sistema en el host.
		si es un servidor local, por ejemplo: localhost y la carpeta se llama control_es_pagos, ROOT contendrá:
		'http://localhost/control_es_pagos/'
	*/

	define('FROOT',$_SERVER['DOCUMENT_ROOT']."/".basename(dirname(__FILE__))."/");
	
	/*
		FROOT es una constante que contiene la ruta absoluta del directorio raiz de la aplicación pero en el formato del sistema de archivos del sistema operativo, necesario para incluir scripts en PHP.
	*/

	session_start();
	$userIsLogged = false;
	
	if(isset($_SESSION["username"])){
		$userIsLogged = trim($_SESSION["username"]) != "";
	}

	require_once('route/phpgrid_render_route.php');

	require_once('views/layout/layout.php');

	/*
		Aqui se llama al layout, el Layout es el armazón del sistema, por defecto es un header,
		el content que cambiará dependiendo de la ruta y un footer.
	*/
?>