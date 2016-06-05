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
if (!isset($_GET['id'])) 
{
	echo "<script>
	      alert('No se recibio la referencia del cliente'); 
		  history.back();
		  </script>";
		  die();
}
$id_cliente=$_GET['id'];
$email=$_SESSION['email'];
$web->nombreHeader($email);
$dato=$web->actualizaCliente($id_cliente);
$web->smarty->assign('dato',$dato);
$web->smarty->assign('id_cliente',$id_cliente);
$web->smarty->display('Admin/datosCliente.html');
?>