<?PHP
	
	require_once($_SERVER['DOCUMENT_ROOT'].'/control_es_pagos/bd/connect.php');

	$stmt = $con->prepare('UPDATE proveedores
		SET nombre = :nombre,
			razon_social = :razonsocial,
			email = :email,
			telefono1 = :telefono1,
			telefono2 = :telefono2,
			celular = :celular,
			contacto = :contacto,
			direccion = :direccion,
			otro = :otro,
			estado = :estado WHERE id = :id;');

	$stmt->bindParam(":nombre",$_POST['nombre'],PDO::PARAM_STR);
	$stmt->bindParam(":razonsocial",$_POST['razonsocial'],PDO::PARAM_STR);
	$stmt->bindParam(":email",$_POST['email'],PDO::PARAM_STR);
	$stmt->bindParam(":telefono1",$_POST['telefono1'],PDO::PARAM_STR);
	$stmt->bindParam(":telefono2",$_POST['telefono2'],PDO::PARAM_STR);
	$stmt->bindParam(":celular",$_POST['celular'],PDO::PARAM_STR);
	$stmt->bindParam(":contacto",$_POST['contacto'],PDO::PARAM_STR);
	$stmt->bindParam(":direccion",$_POST['direccion'],PDO::PARAM_STR);
	$stmt->bindParam(":otro",$_POST['otro'],PDO::PARAM_STR);
	$stmt->bindParam(":estado",$_POST['estado'],PDO::PARAM_INT);
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