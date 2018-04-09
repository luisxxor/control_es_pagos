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
	// set table for CRUD operations
	$g->table = "proveedores"; 

	$col = array();
	$col["title"] = "Codigo"; // caption of column
	$col["name"] = "id"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias)
	$col["width"] = "5";
	$col["editable"] = false; 
	$cols[] = $col;		

	$col = array();
	$col["title"] = "Nombre"; // caption of column
	$col["name"] = "nombre"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias)
	$col["width"] = "5";
	$col["editable"] = false; 
	$cols[] = $col;	

	$g->set_columns($cols);

	$e["on_render_pdf"] = array("filter_pdf", null, true); 
	$e["on_render_excel"] = array("filter_xls", null, true); 
	$e["on_data_display"] = array("filter_display", null, true); 
	$g->set_events($e); 
	//$grid["caption"] = "Grid 1"; 
	$grid["autowidth"] = true; 
	$grid["responsive"] = true; // responsive effect 
	// required for iphone/safari scroll display 
	// $grid["height"] = "auto"; 

	$g->set_options($grid); 
	// render grid 

	$out = $g->render('list');
?>