<?php
include ('../sistema.php');
session_start();
if ($_SESSION['logueado']==0) 
{
	echo "<script>
	      alert('No ha iniciado sesión'); 
		  history.back();
		  </script>";
		  die();
}
if (!isset($_GET['id_producto'])) 
{
	echo "<script>
	      alert('no se recibio referencia del producto'); 
		  history.back();
		  </script>";
		  die();
}
$email=$_SESSION['email'];
$web->clienteHeader($email);
$web->temperatura();
$id_producto=$_GET['id_producto'];
$web->descripcionProducto($id_producto);
$web->smarty->display('cliente/descripcionArticulo.html');

?>