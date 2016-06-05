<?php
	include ('sistema.php');
	$producto = $web->pdftodo();
	$web->smarty->assign('producto',$producto);
	$nombre="historial";
	$web->convertir2PDF($producto,$nombre);
?>