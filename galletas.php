<?php
	include ('sistema.php');
	$producto = $web->mostrartabla("select p.id_producto ,p.producto ,p.foto ,p.precio ,c.categoria 
		from producto p inner join producto_categoria pc on pc.id_producto=p.id_producto inner join
		categoria c on c.id_categoria=pc.id_categoria where c.id_categoria=4 ");
	$web->smarty->assign('producto',$producto);
	$web->temperatura();
	$web->divisa();
	$web->smarty->display('producto.html');
?>