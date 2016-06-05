<?php
include ('../sistema.php');
session_start();
if (!isset($_POST['id_producto'])) 
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
$id_producto=$_POST['id_producto'];
$comentario=$_POST['Comentario'];
$web->descripcionProducto($id_producto);//muestra por partes la vista llamada descripcion
$id_cliente=$web->getIDCliente($email);
$web->query("insert into producto_cliente (id_producto,id_cliente,comentario) values ($id_producto,$id_cliente,'$comentario')");
echo"<SCRIPT language='JavaScript'>
			<!--
			alert('Se han actualizado correctamente los datos');
			history.back();
			-->
	 </script> ";   

$web->smarty->assign('email',$email);
$web->smarty->display('cliente/descripcionArticulo.html');
?>