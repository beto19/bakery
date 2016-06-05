<?php
include ('../sistema.php');
session_start();
if (!isset($_GET['id_producto'])) 
{
	echo "<script>
	      alert('No hay ningun articulo seleccionado'); 
		  </script>";
		  header('Location: ../cliente/indexClienteC.php');
		  die();
}
$email=$_SESSION['email'];
$web->clienteHeader($email);
$web->temperatura();
$id_producto=$_GET['id_producto'];
$web->descripcionProducto($id_producto);
$web->smarty->assign('email',$email);
$web->smarty->display('cliente/descripcionArticulo.html');
?>