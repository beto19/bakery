<?php
include ('../sistema.php');
session_start();
$email=$_SESSION['email'];
$web->nombreHeader($email);
$nombre='';
if(isset($_POST['ingresar']))
{
	$nombre=$_POST['nombre'];
		$query=("insert into marca (marca) values('$nombre')");
		$web->query($query);
		echo "<script>
	      alert('Se ha ingresado una nueva marca'); 
		  history.back();
		  </script>";
}
$web->mostrarMartillo('select  producto.producto, producto.foto, producto.precio, marca.marca from producto inner join marca 				  on producto.id_marca = marca.id_marca')
$web->smarty->display('cliente/martillo.html');
?>