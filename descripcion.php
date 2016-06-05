<?php
include ('sistema.php');
if (!isset($_GET['id_producto'])) 
{
	echo "<script>
	      alert('No hay ningun articulo seleccionado'); 
		  </script>";
		  header('Location: producto.php');
		  die();
}
$web->temperatura();
$web->divisa();
$id_producto=$_GET['id_producto'];
$web->descripcionProductoSnLogin($id_producto);
$web->smarty->display('descripcion.html');
?>