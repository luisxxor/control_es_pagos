<?PHP
	if(empty($_GET))
	{
		require('views/welcome/index.php');
	}
	else if(isset($_GET["action"]) and isset($_GET["table"]))
	{
		if($userIsLogged)
		{
			if($_GET["action"] == "list")
			{
				if($_GET["table"] == "proveedores")
				{
					require('views/proveedores/list.php');	
				}
				else
				{
					require('views/errors/404.php');
				}
			}
			else if($_GET["action"] == "edit")
			{
				if($_GET["table"] == "proveedores")
				{
					require('views/proveedores/edit.php');
				}
			}
			else if($_GET["action"] == "create")
			{
				if($_GET["table"] == "proveedores")
				{
					require('views/proveedores/create.php');
				}			
			}
			else
			{
				require('views/errors/404.php');
			}
		}
		else
		{
			require('views/errors/403.php');
		}
	}
	else
	{
		require('views/errors/404.php');
	}
?>