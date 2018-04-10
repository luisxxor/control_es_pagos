<?PHP
	
	require_once($_SERVER['DOCUMENT_ROOT'].'/control_es_pagos/bd/connect.php');

	$stmt = $con->prepare('DELETE FROM proveedores WHERE id = :id;');

	$stmt->bindValue(":id",$_POST['id'],PDO::PARAM_INT);

	if($stmt->execute())
	{
		echo "1";
	}
	else
	{
		echo "0";
	}

	require_once($_SERVER['DOCUMENT_ROOT'].'/control_es_pagos/bd/disconnect.php');

?>