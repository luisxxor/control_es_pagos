<?PHP
	if(!isset($_GET["goto"]))
	{
		require('views/welcome/index.php');
	}
	else if($_GET["goto"] == "proveedores")
	{
		require('views/proveedores/index.php');
	}
	else
	{
		require('views/errors/404.php');
	}
?>