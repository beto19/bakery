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
$contenido=$web->pdf($email);
$nombre="historial";
$web->convertir2PDF($contenido,$nombre);
?>