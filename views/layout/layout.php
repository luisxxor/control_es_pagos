<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shorcut icon" href=<?= ROOT."favicon.ico";?>>
	<title>Sistema de Control de Pagos</title>
	<link rel="stylesheet" href=<?= ROOT."css/bootstrap.min.css";?>>
	<link rel="stylesheet" href=<?= ROOT."css/style.css";?>>
	<link rel="stylesheet" type="text/css" media="screen" href=<?= ROOT."lib/js/themes/start/jquery-ui.custom.css"; ?>></link>	
	<link rel="stylesheet" type="text/css" media="screen" href=<?= ROOT."lib/js/jqgrid/css/ui.jqgrid.css"; ?>></link>	
	<script src=<?= ROOT."js/jquery.min.js";?>></script>
	<script src=<?= ROOT."js/popper.min.js";?>></script>
	<script src=<?= ROOT."js/bootstrap.min.js";?>></script>
	<script defer src=<?= ROOT."js/fontawesome-all.min.js";?>></script>
	<script src=<?= ROOT."js/script.js";?>></script>
	<script src=<?= ROOT."lib/js/jqgrid/js/i18n/grid.locale-es.js"; ?> type="text/javascript"></script>
	<script src=<?= ROOT."lib/js/jqgrid/js/jquery.jqGrid.min.js"; ?> type="text/javascript"></script>	
	<script src=<?= ROOT."lib/js/themes/jquery-ui.custom.min.js"; ?> type="text/javascript"></script>
</head>
<body>
	<header role="banner" id="menu">
		<?PHP require_once('header.php'); ?>
	</header>
	
	<section id="main">
		<?PHP require_once(FROOT.'route/content_route.php'); ?>
	</section>

	<footer id="footer" class="small text-center text-light pt-3">
		<?PHP require_once('footer.php'); ?>
	</footer>
</body>
</html>