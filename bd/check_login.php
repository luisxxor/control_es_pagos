<?PHP

	$user = htmlentities($_POST['user']);
	$password = htmlentities(hash("sha256",$_POST['password']));

	require_once('connect.php');

	$stmt = $con->prepare('SELECT id FROM users WHERE username = :user and password = :password');
	$stmt->bindParam(':user',$user,PDO::PARAM_STR);
	$stmt->bindParam(':password',$password,PDO::PARAM_STR);
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);

	require_once('disconnect.php');

	if(!$row)
	{
		echo "0";
	}
	else
	{
		echo "1";
	}
	
?>