<?php
	include ('../sistema.php');

		  

session_start();
if ($_SESSION['logueado']==0) 
{
	echo "<script>
	      alert('Ingrese sesión primero'); 
		  </script>";
		  header('Location: ../formulario_login.php');
		  die();
}
$email=$_SESSION['email'];
$web->clienteHeader($email);

$producto = $web->mostrartablaGalletas("select p.id_producto ,p.producto ,p.foto ,p.precio ,c.categoria 
	from producto p inner join producto_categoria pc on pc.id_producto=p.id_producto inner join
	categoria c on c.id_categoria=pc.id_categoria ");
$web->smarty->assign('producto',$producto);
$web->temperatura();
$web->smarty->display('cliente/mostrar.html');