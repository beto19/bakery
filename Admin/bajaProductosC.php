<?php
	include('../sistema.php');
$nombre='';
$precio='';
$foto='';
$id_marca='';

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
$web->nombreHeader($email);
//ingresar un nuevo producto
if (isset($_GET['id_producto'])) 
{
	$id_producto=$_GET['id_producto'];
	$web->query("delete producto where id_producto=$id_producto");
	echo "<script>
	      alert('Se ha borrado un artículo'); 
		  history.back();
		  </script>";
		  die();
}
 
?>