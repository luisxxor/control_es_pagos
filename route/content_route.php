<?PHP
	if(!isset($_GET["action"]))
	{
		require('views/welcome/index.php');
	}
	else if($_GET["action"] == "list")
	{
		if($_GET["table"] == "proveedores"){
			require('views/proveedores/listar.php');	
		}
	}
	else
	{
		require('views/errors/404.php');
	}
?>