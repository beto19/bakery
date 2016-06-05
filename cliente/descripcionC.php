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
$web->clienteHeader($email);
$web->mostrarMartillo();
$id=$_GET['id'];
$web->mostrarDescripcion($id);
$web->smarty->display('cliente/descripcion.html');
?>

