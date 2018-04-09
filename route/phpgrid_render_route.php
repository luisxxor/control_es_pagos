<?php

	if(isset($_GET['action']) && isset($_GET['table']))
	{
		if($_GET['action'] == 'list')
		{
			if($_GET['table'] == 'proveedores')
			{
				require('phpgrid/proveedores.php');
			}
		}
	}


?>