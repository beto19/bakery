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
if (!isset($_POST['total'])) 
{
	echo "<script>
	      alert('No se recibio el total de venta'); 
		  history.back();
		  </script>";
		  die();
}
$total=$_POST['total'];
$email=$_SESSION['email'];
$id_carrito=$web->getIdCarrito($email);
$web->query("update carrito_detalle set total = $total where id_carrito = $id_carrito");
$web->query("update carrito set fecha_compra = (CURDATE())  where id_carrito = $id_carrito");
echo"<SCRIPT language='JavaScript'>
			<!--
			alert('Se realizo la compra con exito');
			document.location.href = 'indexClienteC.php';
			-->
	 </script> ";  
die();
?>