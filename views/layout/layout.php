<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shorcut icon" href=<?PHP echo ROOT."favicon.ico";?>>
	<title>Sistema de Control de Pagos</title>
	<link rel="stylesheet" href=<?PHP echo ROOT."css/bootstrap.min.css";?>>
	<link rel="stylesheet" href=<?PHP echo ROOT."css/style.css";?>>
	<script src=<?PHP echo ROOT."js/jquery.min.js";?>></script>
	<script src=<?PHP echo ROOT."js/popper.min.js";?>></script>
	<script src=<?PHP echo ROOT."js/bootstrap.min.js";?>></script>
	<script defer src=<?PHP echo ROOT."js/fontawesome-all.min.js";?>></script>
	<script src=<?PHP echo ROOT."js/script.js";?>></script>
</head>
<body>

	<header role="banner" id="menu">
		<?PHP require_once('header.php'); ?>
	</header>
	
	<section id="main">
		<?PHP require_once(FROOT.'route/route.php'); ?>
	</section>

	<footer id="footer" class="small text-center text-light pt-3">
		<?PHP require_once('footer.php'); ?>
	</footer>
</body>
</html>