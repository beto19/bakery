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
$id_carrito=$web->getIdCarrito($email);
$web->query("delete from carrito_detalle where id_carrito=$id_carrito");
$web->query("delete from carrito where id_carrito=$id_carrito");
echo "<script>
			      <!--
					alert('Se ha borrado el carrito');
				  -->
		  	 </script>";
$web->clienteHeader($email);
$web->tablaCarrito($email);
$web->smarty->display('cliente/indexC.html');
?>