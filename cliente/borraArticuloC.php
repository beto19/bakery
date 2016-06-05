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
$email=$_SESSION['email'];
$id_producto=$_GET['id_producto'];
$id_carrito=$web->getIdCarrito($email);
$query="delete from carrito_detalle where id_producto=$id_producto and id_carrito=$id_carrito";
$web->query($query);
echo "<script>
			      <!--
					alert('Se ha eliminado el articulo seleccionado');
				  -->
		  	 </script>";
$email=$_SESSION['email'];
$web->clienteHeader($email);
$web->tablaCarrito($email);
$web->smarty->display('cliente/carrito.html');
?>