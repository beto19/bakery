<?php
	include ('../sistema.php');
	if (isset($_REQUEST['id']))
	{
		$id_cliente=$_REQUEST['id'];
		
	}
	else
	{
		echo "<script>
	      		alert('No se recibio la referencia del producto'); 
		  		history.back();
		 	  </script>";
	}
	$id_usuario=$web->getIDClienteSinMail($id_cliente);
	$registros=$web->numRegistros("select * from carrito where id_cliente=$id_cliente");
	if ($registros==0) 
	{
		$web->query("delete from producto_cliente where id_cliente=$id_cliente");
		$web->query("delete from rol_usuario where id_usuario=$id_usuario");
		$web->query("delete from cliente where id_cliente=$id_cliente");
		$web->query("delete from usuario where id_usuario=$id_usuario");
	}
	else
	{
		$id_carrito=$web->getIdCarritoSinCorreo($id_cliente);
		$web->query("delete from carrito_detalle where id_carrito=$id_carrito");
		$web->query("delete from carrito where id_cliente=$id_usuario");
		$web->query("delete from producto_cliente where id_cliente=$id_cliente");
		$web->query("delete from rol_usuario where id_usuario=$id_usuario");
		$web->query("delete from cliente where id_cliente=$id");
		$web->query("delete from usuario where id_usuario=$id_usuario");
	}
	echo "<script>
			      <!--
			      	alert('Se ha eliminado un cliente ');
					document.location.href = 'usuariosC.php';
				  -->
		  	 </script>";
?>