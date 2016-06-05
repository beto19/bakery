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
$id_producto=$_POST['id'];
$cantidad=$_POST['cantidad'];
$id_carrito=$web->getIdCarrito($email);
$query="insert into carrito_detalle (id_carrito,id_producto,cantidad)
		values ($id_carrito,$id_producto,$cantidad)";
$web->query($query);
echo "<script>
			      <!--
					alert('Se agrego al carrito con exito');
				  -->
		  	 </script>";
$email=$_SESSION['email'];
$web->clienteHeader($email);
$web->tablaCarrito($email);
$web->smarty->display('cliente/carrito.html');
?>