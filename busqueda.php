<?php
	include ('sistema.php');
	if (isset($_REQUEST['q']))
	{
		$q=$_REQUEST['q'];
	}else{
		$q='';
	}
	$q = $web->mostrartabla("select p.id_producto ,p.producto ,p.foto ,p.precio ,c.categoria from producto p inner join producto_categoria pc on pc.id_producto=p.id_producto inner join
		categoria c on c.id_categoria=pc.id_categoria where p.producto like '%".$q."%'");
	$web->smarty->assign('producto',$q);
	$web->temperatura();
	$web->divisa();
	$web->smarty->display('producto.html');
?>