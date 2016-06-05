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
if (!isset($_POST['cantidad'])|| $_POST['cantidad']==""||$_POST['cantidad']==0) 
{
	echo "<script>
	      alert('No se recibio la  cantidad'); 
	      history.back();
		  </script>";
		  
		  die();
}
$cantidad=$_POST['cantidad'];
if (!isset($_POST['id_producto'])) 
{
	echo "<script>
	      alert('No se recibio la referencia del producto'); 
	      history.back();
		  </script>";
		  die();
}
$id_producto=$_POST['id_producto'];
$email=$_SESSION['email'];
$query="select id_carrito from carrito where id_cliente in (select id_cliente from cliente where id_usuario in (select id_usuario from usuario where email='$email'))";
$id_cliente=$web->getIDCliente($email);

$id_carrito=$web->getIdCarrito($email);
if ($id_carrito==0) {
	$fecha = date('Y-m-d');   
	$query="insert into carrito (id_cliente,fecha) values ($id_cliente,'$fecha')";
	$web->query($query);
	$id_carrito=$web->getIdCarrito($email);
	echo "carrito";
	echo "<br>";
	echo "$id_carrito";
	$web->query("insert into carrito_detalle (id_carrito,id_producto,cantidad) values($id_carrito,$id_producto,$cantidad)");
	echo "<br>";
	echo "El error esta en la consulta";
	echo "<script>
	      alert('Se ha ingresado al carrito');
	      history.back(); 
		  </script>";
		  
		  die();
}

$carritoComprado=$web->checkFechaCompra($id_cliente,$id_carrito);
$registros=$web->numRegistros($query);
$checaCompra=$web->checkFechaCompra($id_carrito);

if ($registros==0 || $checaCompra!='' )//si no hay o ya hay un carrito comprado, lo crea
{
	$fecha = date('Y-m-d');   
	$query="insert into carrito (id_cliente,fecha) values ($id_cliente,'$fecha')";
	$web->query($query);
	$id_carrito=$web->getIdCarrito($email);
	echo "carrito";
	echo "<br>";
	echo "$id_carrito";
	$web->query("insert into carrito_detalle (id_carrito,id_producto,cantidad) values($id_carrito,$id_producto,$cantidad)");
	echo "<br>";
	echo "El error esta en la consulta";
	echo "<script>
	      alert('Se ha ingresado al carrito');
	      history.back(); 
		  </script>";
		  
		  die();

}
if ($registros>0)//si hay carrito, checa si el producto esta en el carrito y si no lo inserta
{
	$id_carrito=$web->getIdCarrito($email);
	$dias=$web->getDias($email);
	echo $id_carrito;
	
		if ($dias<=7) // si la fecha es menor igual a 7 dias entra
		{
			$registros=$web->numRegistros("select id_producto from carrito_detalle where id_carrito=$id_carrito and id_producto=$id_producto");
			if ($registros==0)//si no existe el producto en el carrito, lo inserta
			{
				$web->query("insert into carrito_detalle (id_carrito,id_producto,cantidad) values ($id_carrito,$id_producto,$cantidad)");
				//regresar a la vista del carrito
				$web->clienteHeader($email);
				$web->tablaCarrito($email);
				$web->smarty->display('cliente/carrito.html');
			}
			else//si el producto existe actualiza la cantidad del producto
			{
				$cantidadB=$web->getCantidad($id_carrito,$id_producto);
				$cantidad=$cantidad+$cantidadB;
				$web->query("update carrito_detalle set cantidad=$cantidad where id_carrito=$id_carrito 
					        and id_producto=$id_producto");	
				//regresar a la vista del carrito
				$web->clienteHeader($email);
				$web->tablaCarrito($email);
				$web->temperatura();
				$web->smarty->display('cliente/carrito.html');
			}
		}
		else//elimina el carrito si tiene mas de 7 dias de creado y crea uno nuevo 
		{
			$web->query("delete from carrito where id_carrito=$id_carrito");
			$web->query("delete from carrito_detalle where id_carrito=$id_carrito");
			$fecha = date("Y-m-d");   
			$query="insert into carrito (id_cliente,fecha) values ($id_cliente,$fecha)";
			$web->smarty->display('cliente/indexC.html');

		}
	
	
}
?>