<?php
include('../sistema.php');
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
$web->historial($email);
$web->smarty->display('cliente/historial.html');
?>