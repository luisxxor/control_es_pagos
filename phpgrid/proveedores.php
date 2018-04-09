<?php
	include_once(FROOT."config.php"); 

	include(PHPGRID_LIBPATH."inc/jqgrid_dist.php"); 

	$db_conf = array(    
		"type" => PHPGRID_DBTYPE,  
		"server" => PHPGRID_DBHOST, 
		"user" => PHPGRID_DBUSER, 
		"password" => PHPGRID_DBPASS, 
		"database" => PHPGRID_DBNAME 
	); 

	$g = new jqgrid($db_conf); 

	$g->table = "proveedores"; 

	$col = array();
	$col["title"] = "Id";
	$col["name"] = "id";
	$col["width"] = "1";
	$col["editable"] = false;
	$col["link"] = "index.php?action=modify&table=proveedores&id={id}";
	$col["linkoptions"] = "target='_self'   style='color:#2ca9d8;text-decoration: underline'"; 
	$cols[] = $col;		

	$col = array();
	$col["title"] = "Nombre";
	$col["name"] = "nombre";
	$col["width"] = "5";
	$col["editable"] = false; 
	$cols[] = $col;

	$col = array();
	$col["title"] = "Razon Social";
	$col["name"] = "razon_social";
	$col["width"] = "5";
	$col["editable"] = false; 
	$cols[] = $col;		

	$col = array();
	$col["title"] = "Email";
	$col["name"] = "email";
	$col["width"] = "5";
	$col["editable"] = false; 
	$cols[] = $col;

	$col = array();
	$col["title"] = "Telefono 1";
	$col["name"] = "telefono1";
	$col["width"] = "3";
	$col["editable"] = false; 
	$cols[] = $col;

	$col = array();
	$col["title"] = "Telefono 2";
	$col["name"] = "telefono2";
	$col["width"] = "3";
	$col["editable"] = false; 
	$cols[] = $col;

	$col = array();
	$col["title"] = "Celular";
	$col["name"] = "celular";
	$col["width"] = "3";
	$col["editable"] = false; 
	$cols[] = $col;

	/*$col = array();
	$col["title"] = "Contacto";
	$col["name"] = "contacto";
	$col["width"] = "5";
	$col["editable"] = false; 
	$cols[] = $col;*/

	$col = array();
	$col["title"] = "Dirección";
	$col["name"] = "direccion";
	$col["width"] = "5";
	$col["editable"] = false; 
	$cols[] = $col;

	$col = array();
	$col["title"] = "Otros";
	$col["name"] = "otros";
	$col["width"] = "5";
	$col["editable"] = false; 
	$cols[] = $col;												
		


	$g->set_columns($cols);

	$e["on_render_pdf"] = array("filter_pdf", null, true); 
	$e["on_render_excel"] = array("filter_xls", null, true); 
	$e["on_data_display"] = array("filter_display", null, true); 
	$g->set_events($e);

	$grid["autowidth"] = true; 
	$grid["responsive"] = true;
	$grid["height"] = "auto"; 

	$g->set_options($grid);

	$out = $g->render('list');
?>